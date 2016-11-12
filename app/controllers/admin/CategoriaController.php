<?php

namespace Compropolis\Controllers\Admin;

use Compropolis\Models\Categoria;


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
    
    
    public function salvarAction()
    {

        $categoria = new Categoria();
        
        // crear el objeto caetegoria
        
        // asiganr valroes
         // Check if request has made with POST
        if ($this->request->isPost()) {
            // Access POST data
//            $categoria->setId(3);
            $categoria->setCategoria($this->request->getPost("categoria"));
            $categoria->setPathImagen($this->request->getPost("imagen"));
            $categoria->setEsFinal(false);
            $categoria->setNivel(0);
            
            $categoria->setEsRecomendableDespuesCompra(false);
            $categoria->setIdStatus(1);
//            $categoria->setIdCategoriaPadre(NULL);

            
            // INFO DE BITACORA
            
            $categoria->setCreacionFecha(now());
            $categoria->setCreacionIdUsuario(1);

            if ($categoria->save() === false) {

                $messages = $categoria->getMessages();
                
                foreach ($messages as $message) {
                    $this->flash->error( $message->getMessage() );
                }
                
                $this->setJsonResponse();
                return array('success' => false , "otras cosas"  => 2 );

            } else {
                $this->flash->success("Se ha guardado exitosamente esta categoría");
                $this->setJsonResponse();
                return array('success' => true );
                
                
            }
        }
        
        
        
        return false;        
    }
    
    
    
    
}

