<?php

namespace Compropolis\Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Flash
 *
 * @author it99
 */
class Flash
{
    /**
     * Messages collection
     * @var array
     */
    protected $errorMessages;
    protected $noticeMessages;
    protected $successMessages;
    protected $warningMessages;

    /**
     * Css classes collection
     * @var array
     */
    protected $cssClasses = [
        'error'   => 'flash-message error',
        'notice'  => 'flash-message notice',
        'success' => 'flash-message success',
        'warning' => 'flash-message warning',
    ];

    /**
     * Constructor
     * @param array $cssClasses
     * @return void
     */
    public function __construct(array $cssClasses = null)
    {
        if (!is_null($cssClasses)) {
            if (count($cssClasses)) {
                foreach($cssClasses as $type => $class) {
                    $this->cssClasses[$type] = $class;
                }
            }
        }
    }

    /**
     * Returns current messages
     * @return array
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Adds message to stack
     * @param string $type
     * @param string $text
     * @return Flash
     */
    public function message($type, $text)
    {
        $this->messages[] = [
            'type' => $type,
            'text' => $text,
        ];
        return $this;
    }    

    /**
     * Adds error message to stack
     * @param string $text
     * @return Flash
     */
    public function error($text)
    {
        $this->errorMessages[] = $text ;
        return $this;
    }    

    /**
     * Adds notice message to stack
     * @param string $text
     * @return Flash
     */
    public function notice($text)
    {
        $this->noticeMessages[] = $text ;
        return $this;
    }    

    /**
     * Adds success message to stack
     * @param string $text
     * @return Flash
     */
    public function success($text)
    {
        $this->successMessages[] = $text ;
        return $this;
    }

    /**
     * Adds warning message to stack
     * @param string $text
     * @return Flash
     */
    public function warning($text)
    {
        $this->warningMessages[] = $text ;
        return $this;
    }

    /**
     * Outputs messages from stack
     * @return string
     */
    public function output()
    {
        $output = '';
        if (count($this->messages)) {
            foreach($this->messages as $message) {
                // Configure css class
                $cssClass = 'flash-message';
                if (!empty($this->cssClasses[$message['type']])) {
                    $cssClass = $this->cssClasses[$message['type']];
                }

                // Append output
                $output.= '<div class="' . $cssClass . '">' 
                        . $message['text'] 
                        . '</div>';
            }
        }
        return $output;
    }
    
    public function outputJSon()
    {
        $array = [];
        if (count($this->errorMessages)) {
            $array["errors"] = $this->errorMessages;
        }
        if (count($this->noticeMessages)) {
            $array["notices"] = $this->noticeMessages;
        }
        if (count($this->successMessages)) {
            $array["success"] = $this->successMessages;
        }
        if (count($this->warningMessages)) {
            $array["warnings"] = $this->warningMessages;
        }
        return $array;
    }

    /**
     * Outputs all messages
     * @return string
     */
    public function __toString()
    {
        return $this->output();
    }

}