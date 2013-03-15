<?php
Class Usuarios extends Backend_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('login/usuarios_model');
  }
  
  public function index()
  {    
    $this->load->library("form_validation");
    $this->data['title']='Usuários';
    $this->data['usuarios']=$this->usuarios_model->get_user();
    $this->render();        
  }
  
  public function cadastrar()
  {
    $this->load->library("form_validation");
    $this->data['title']='Usuários';
    if($this->form_validation->run()===FALSE)
    {
      $this->render();
    }
    else
    {
      redirect(base_url()."usuarios");
    }
  }
}
?>
