<?php
/**
 *
 */
class shw extends CI_Controller
{

 public function upload()
  {
    $this->form_validation->set_rules('nme', 'Name', 'required');
    $this->form_validation->set_rules('typ', 'Type', 'required');
    $this->form_validation->set_rules('brnd', 'Brand', 'required');
    $this->form_validation->set_rules('price', 'Price', 'required');
    $this->form_validation->set_rules('tyre', 'Tyre-Size', 'required');
    $config=array(
    'upload_path'=>'./assets/',
    'allowed_types'=>'jpg|jpeg|png|gif',
    'max_size'=>0,
    'filename'=>url_title($this->input->post('img'))
  );

    $this->load->library('upload',$config);

    if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('showroom');
                }
    else
                {
                  //$this->upload->do_upload('img')
                  $arr = array(
                    'name' =>$this->input->post('nme') ,
                    'type' =>$this->input->post('typ') ,
                    'brand' =>$this->input->post('brnd') ,
                    'price' =>$this->input->post('price') ,
                    'country' =>$this->input->post('country') ,
                    'rear_tire' => $this->input->post('tyre'),
                    'photo' =>$this->upload->file_name
                   );

                  $this->load->model('model_shw');

                  $this->model_shw->insert($arr);
                }
  }
}


?>
