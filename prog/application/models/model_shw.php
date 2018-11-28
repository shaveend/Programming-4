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

}


 ?>
