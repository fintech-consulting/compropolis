<?php

namespace Compropolis\Controllers\Admin;

use Compropolis\Models\Categoria;
use Phalcon\Http\Request;


class CategoriaController extends ControllerBase
{

    public function indexAction()
    {

// How many robots are there?
        $categoriaList = Categoria::find();
        var_dump(count($categoriaList));
        
        
//        return false;
        $this->view->categoriaList = $categoriaList;
        
        
    }

    public function nuevaAction()
    {

// How many robots are there?




    }

    public function uploadAction()
    {
        $img_path = "./images/uploads/marcas/".$this->request->getPost("categoria").".".$this->request->getPost("extencion");
        // Check if the user has uploaded files
        if ($this->request->hasFiles() == true)
        {
            // Print the real file names and their sizes
            foreach ($this->request->getUploadedFiles() as $file)
            {
                echo $file->getName(), " ", $file->getSize(), $img_path, "\n";
            }
            $file->moveTo($img_path);
        }
        else
        {
            echo "Error";
        }
    }
    
    
    public function salvarAction()
    {
        $categoria = new Categoria();
        
        // crear el objeto caetegoria
        
        // asiganr valroes
         // Check if request has made with POST
        if ($this->request->isPost()) {
            // Access POST data
//            $categoria->setId(3);
            // $this->request->getPost("categoria")
            $img_path = "./images/uploads/marcas/".$this->request->getPost("categoria").".".$this->request->getPost("extencion");
            $img_path1 = "/public/images/uploads/marcas/".$this->request->getPost("categoria").".".$this->request->getPost("extencion");
            
            $categoria->setCategoria($this->request->getPost("categoria"));
            $categoria->setPathImagen($img_path1);
            $categoria->setEsFinal(false);
            $categoria->setNivel(0);

//            $categoria->setIdCategoriaPadre($this->request->getPost('categoriaPadre'));
            
            $categoria->setEsRecomendableDespuesCompra(false);
            $categoria->setIdStatus(1);
//            $categoria->setIdCategoriaPadre(NULL);

            if ($this->request->hasFiles() == true)
            {
                // Print the real file names and their sizes
                foreach ($this->request->getUploadedFiles() as $file)
                {
//                    echo $file->getName(), " ", $file->getSize(), $img_path, "\n";
                }
                $file->moveTo($img_path);
            }


            if ($categoria->save() === false) {

                $messages = $categoria->getMessages();
                
                foreach ($messages as $message) {
                    $this->flash->error( $message->getMessage() );
                }
                
                $this->setJsonResponse();
                return array('success' => false , "otras"  => "otra cosa" );

            } else {
                $this->flash->success("Se ha guardado exitosamente esta categoría");
                $this->setJsonResponse();
                return array('success' => true );
                
                
            }
        }
        
        
        
        return false;        
    }

    public function arbolAction()
    {
        $categoriaList = Categoria::find();
        $arbol = array();
        $padres = array();

        foreach ($categoriaList as $eList) {
            $nombre = $eList->getCategoria();
            $idPadre = $eList->getIdCategoriaPadre();
            $idCategoria= $eList->getIdCategoria();

            $padres[] = array( "idCategoria" => $idCategoria, "nombre" => "$nombre", "idPadre" => $idPadre);

            //Nodos Raiz getIdCategoriaPadre() getIdCategoria() getCategoria()
            //var data
            //'nombre' : {text: 'Nombre', type: 'folder', 'icon-class':'red'}
            //Nodos Hoja
            //data['nombre']['additionalParameters']
            //{text: '<i class='glyphicon glyphicon-tag red'></i> backup4.zip', type: 'item'}
            $arbol[$nombre] = array('text' => "<i class='glyphicon glyphicon-tag red'></i> "
                                .$nombre, 'type' => 'item', 'icon-class' => 'red', 'idCategoria' => $idCategoria);
        }
        
        $this->setJsonResponse();
        return $arbol;
    }
    
}

