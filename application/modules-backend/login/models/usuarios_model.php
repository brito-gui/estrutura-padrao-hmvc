<?php
class Usuarios_model extends CI_Model
{
  private $tablename="tbl_users";
  
  public function __construct() {
    parent::__construct();
    $this->load->database();
  }
  public function get_user(array $array_where=array())
  {
    $query=$this->db->get_where($this->tablename, $array_where);
    return $query->result();
  }
}