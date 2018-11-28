<?php

class MShowcase extends CI_Model{

  public function getBikes(){
    $response = $this->db->get('bikes');
    return $response;
  }

}
