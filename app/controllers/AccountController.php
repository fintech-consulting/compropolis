<?php
namespace Compropolis\Controllers;

use Compropolis\Models\Usuario;
use Compropolis\Models\Rol;


class AccountController extends ControllerBase
{

    public function indexAction()
    {
//        echo '[' . __METHOD__ . ']';
//        return false;
        
//        return $this->view->setMainView(("admin/usuario/nueva"));
        
 // Render a view
    // Pick "views-dir/products/search" as view to render
         // Render 'views-dir/index.phtml'
        $this->view->pick("account/login");
         
//         return false;
        
    }

    public function loginAction()
    {
//        echo '[' . __METHOD__ . ']';
//        return false;
        
//        return $this->view->setMainView(("admin/usuario/nueva"));
        
 // Render a view
    // Pick "views-dir/products/search" as view to render
         // Render 'views-dir/index.phtml'
//        $this->view->pick("account/login");
         
//         return false;
        
    }
    
     private function _registerSession($user)
    {
        $this->session->set(
            "auth",
            [
                "id"   => $user->getIdUsuario(),
                "name" => $user->getNombreUsuario(),
            ]
        );
    }
        public function checkLoginAction()
    {
//        echo '[' . __METHOD__ . ']';
//        return false;


        
        if ($this->request->isPost()) {
            // Get the data from the user
            $email    = $this->request->getPost("usuario");
            $password = $this->request->getPost("password");

            // Find the user in the database
            $user = Usuario::findFirst(
                [
                    "NOMBRE_USUARIO = :email: AND PASSWORD = :password: ",//AND ID_STATUS = '1'",
                    "bind" => [
                        "email"    => $email,
                        "password" => $password,
//                        "password" => sha1($password),
                    ]
                ]
            );

            if ($user !== false) {
                $this->_registerSession($user);

                $this->flash->success(
                    "Welcome " . $user->getNombreUsuario()
                );

                $this->setJsonResponse();
                return array('success' => true );


            }


            $this->flash->error("Wrong email/password");
            $this->setJsonResponse();
            return array('success' => false );
            
        }

        // Forward to the login form again
        return $this->dispatcher->forward(
            [
                "controller" => "account",
                "action"     => "login",
            ]
        );
        
        
         return false;
        
    }
    
    
}
