<?php

namespace Compropolis\Controllers\Admin;

use Compropolis\Models\Usuario;
use Compropolis\Models\Rol;


class UsuarioController extends ControllerBase
{

    public function indexAction()
    {

// How many robots are there?
        $usuarioList = Usuario::find();
        
        
        
//        return false;
        $this->view->usuarioList = $usuarioList;
        
        
    }

    public function nuevaAction()
    {

// How many robots are there?
        
        $rolList = Rol::find(array("order" => "ID_ROL"));
        $this->view->rolList = $rolList;
        
        
        
    }
    
    
    public function salvarAction()
    {

        $usuario = new Usuario();
        
        // crear el objeto caetegoria
        
        // asiganr valroes
         // Check if request has made with POST
        if ($this->request->isPost()) {
            // Access POST data
//            $usuario->setId(3);
            $usuario->setIdRol($this->request->getPost("idRol", "int"));
            $usuario->setNombreUsuario($this->request->getPost("nombreUsuario","string"));
            $usuario->setPassword($this->request->getPost("password","string"));
            
            // INFO DE BITACORA
            
            $usuario->setCreacionFecha(date("Y-m-d H:i:s", time()));
//            $usuario->setCreacionIdUsuario(1);

            if ($usuario->save() === false) {

                $messages = $usuario->getMessages();
                
                foreach ($messages as $message) {
                    $this->flash->error( $message->getMessage() );
                }
                
                $this->setJsonResponse();
                return array('success' => false , "otras cosas"  => 2 );

            } else {
                $this->flash->success("Se ha guardado exitosamente este usuario");
                $this->setJsonResponse();
                return array('success' => true );
                
                
            }
        }
        
        
        
        return false;        
    }
 
    
    public function editAction()
    {

        $idUsuario = $this->request->getPost("idUsuario", "int");
        
        if($idUsuario == NULL){
            $this->response->redirect('http://localhost/compropolis/admin/usuario');
            return;
        }
        $usuario = Usuario::findFirst($idUsuario);
        $rolList = Rol::find(array("order" => "ID_ROL"));
        
        $this->view->rolList = $rolList;        
        $this->view->usuario = $usuario;

//        return $this->view->setMainView(("admin/usuario/nueva"));
//        $this->view->pick("admin/usuario/nueva");
    }
 
    

    public function updateAction()
    {

        $idUsuario = $this->request->getPost("idUsuario", "int");

        $usuario = Usuario::findFirst($idUsuario);
        
        // crear el objeto caetegoria
        
        // asiganr valroes
         // Check if request has made with POST
        if ($this->request->isPost()) {
            // Access POST data
//            $usuario->setId(3);
            $usuario->setIdRol($this->request->getPost("idRol", "int"));
            $usuario->setNombreUsuario($this->request->getPost("nombreUsuario","string"));
            $usuario->setPassword($this->request->getPost("password","string"));
            
            // INFO DE BITACORA
            
            $usuario->setCreacionFecha(date("Y-m-d H:i:s", time()));
//            $usuario->setCreacionIdUsuario(1);

            if ($usuario->save() === false) {

                $messages = $usuario->getMessages();
                
                foreach ($messages as $message) {
                    $this->flash->error( $message->getMessage() );
                }
                
                $this->setJsonResponse();
                return array('success' => false , "otras cosas"  => 2 );

            } else {
                $this->flash->success("Se ha guardado exitosamente este usuario");
                $this->setJsonResponse();
                return array('success' => true );
                
                
            }
        }
        
        
        
        return false;        
    }
     
}

