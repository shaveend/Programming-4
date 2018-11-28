<?php

class AddReq extends CI_Model{

  public function addrequest(){
    
    $this->db->where('type',$this->input->post('servicetype'));
    $query= $this->db->get('services');
    $row=$query->row(0);
    $data = array(
      'cust_id' => $_SESSION['cid'],
      'service_id' => $row->id,      
      'date' => $this->input->post('date'),
    );
    $response = $this->db->insert('service',$data);
    return $response;
  }

 
}
