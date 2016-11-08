<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Getdata extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('user_model');
  }
  public function index(){
    $this->load->view('welcome_message');
  }

public function showservicedata(){
  // $getalldata = $this->user_model->getedatauser();
  //  echo "<pre>";
  //  var_export($getalldata);exit();
  // $getalldata = $this->user_model->getedatauser();
  // echo json_encode($getalldata);
}
public function showdata(){
  $getalldata = $this->user_model->getedatauser();
  echo "<pre>";
  var_export($getalldata);exit();

}



}
