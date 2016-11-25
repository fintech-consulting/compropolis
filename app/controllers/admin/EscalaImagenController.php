<?php
  namespace Compropolis\Controllers\Admin;
  use Compropolis\Library\EscalarImagen;

  class EscalaImagenController extends ControllerBase{
    public function indexAction(){
      EscalarImagen::recibeImagen("C:/xampp/htdocs/compropolis/app/library/","enji.jpg");
    }
  }
?>
