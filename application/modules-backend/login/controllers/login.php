<?php
class Login extends MY_Controller
{
  public function index()
  {    
    $this->load->helper('form');
    $this->load->library('form_validation');
    
    $this->form_validation->set_rules("usuario", "Usuário", "required|alpha_dash");
    $this->form_validation->set_rules("senha", "Senha", "required|callback_validate_password");
    if($this->form_validation->run()===FALSE)
    {
      $this->session->sess_destroy();
      $this->data["title"]="Login";
      $this->render();
    }
    else
    {
      redirect($this->config->item('base_url').'painel');
    }
  }
  
  public function validate_password()
  {
    $this->load->model("login/usuarios_model");
    $result=$this->usuarios_model->get_user(array("username"=>$this->db->escape_like_str($this->input->post("usuario")),"password"=>$this->db->escape_like_str(md5($this->input->post("senha")))));
    if(count($result)===0)
    {
      $this->form_validation->set_message("validate_password", "Usuário ou senha inválidos");
      return false;
    }
    else
    {
      $this->session->set_userdata(array("logged_in"=>1));
      return true;
    }
  }
}