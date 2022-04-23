<?php
Class Define extends Controller{
function index(){
  $data['title'] = "hello home";
  $this->view("user/layouts/define",$data);
}
}
