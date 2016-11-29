<?php

namespace Compropolis\Controllers\Admin;

class IndexController extends ControllerBase


{

    public function initialize()
    {
        $this->view->setTemplateAfter("admin");
        
        /*
        // Add some local CSS resources
        $this->assets->addCss("public/css/bootstrap.min.css");
        $this->assets->addCss("public/css/font-awesome.min.css");

        // And some local JavaScript resources
        $this->assets->addJs("public/js/jquery.js");
        $this->assets->addJs("public/js/bootstrap.min.js");
        */
    }
    
    public function indexAction()
    {

        
        // BASED DE DATOS
        
        // Pass the $postId parameter to the view
        $this->view->variable = "NUEVO VALOR";
        
        /*
        // Shows only the view related to the action
        $this->view->setRenderLevel(
            View::LEVEL_ACTION_VIEW
        );
        */
        
        
    }
    
    
    

}

