<?php

class MContact extends CI_Model{

  public function submitContact(){
    $data = array(
      'name' => $this->input->post('name'),
      'phonenumber' => $this->input->post('tp'),
      'email' => $this->input->post('email'),
      'title' => $this->input->post('title'),
      'discription' => $this->input->post('discription'),
    );
    $response = $this->db->insert('contact',$data);
    return $response;
  }

}
