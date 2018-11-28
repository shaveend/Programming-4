<?php

class MUser extends CI_Model{

  public function addUser(){
    $data = array(
      'name' => $this->input->post('name'),
      'phonenumber' => $this->input->post('tp'),
      'email' => $this->input->post('email'),
      'password' => sha1($this->input->post('password')),
    );
    $response = $this->db->insert('customer',$data);
    return $response;
  }

  public function userLogin(){
    return FALSE;
  }
}
