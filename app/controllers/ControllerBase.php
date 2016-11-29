<?php

namespace Compropolis\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {

    protected $_isJsonResponse = false;

    // Call this func to set json response enabled
    public function setJsonResponse() {
        $this->view->disable();
        
        
        $this->_isJsonResponse = true;
        $this->response->setContentType('application/json', 'UTF-8');
    }

    // After route executed event
    public function afterExecuteRoute(\Phalcon\Mvc\Dispatcher $dispatcher) {
        if ($this->_isJsonResponse) {
            $data = $dispatcher->getReturnedValue();

            $messages = $this->flash->outputJSon();
            
            if(count($messages)){
                $data["messages"] = $messages;
            }
            
            if (is_array($data)) {           
                $data = json_encode($data);
            }
            $this->response->setContent($data);
            return $this->response->send();
        } else {
            $this->view->setViewsDir($this->view->getViewsDir() . '/');
        }
    }

}
