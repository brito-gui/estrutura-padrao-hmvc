<?php
Class Painel extends Backend_Controller
{
  public function index()
  {    
    $this->data['title']='Área restrita';
    $this->render();
  }
}
?>
