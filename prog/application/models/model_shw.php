<?php
/**
 *
 */
class model_shw extends CI_Model
{

  public function insert ($arr)
  {
    $this->db->insert('bikes',$arr);
  }

public function fetch_data()
{
  $this->db->select("a.cust_id, a.service_id, b.type, b.price, b.time, c.name, c.phonenumber");
  $this->db->from("service as a");
  $this->db->join('services as b','a.service_id=b.id');
  $this->db->join('customer as c', 'a.cust_id=c.cid');
  $res=$this->load->get();
  $result=$query->result_array();
  return $result;
}
}


 ?>
