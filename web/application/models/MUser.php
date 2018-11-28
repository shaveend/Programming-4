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
    $email = $this->input->post('email');
    $password = sha1($this->input->post('password'));

    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $response = $this->db->get('customer');

    if ($response->num_rows()==1){
      return $response->row(0);
    }else{
      return FALSE;
    }

  }
}
