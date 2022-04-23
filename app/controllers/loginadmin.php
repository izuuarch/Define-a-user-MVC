<?php
Class Loginadmin extends Controller{
function index(){
  $reg = $this->model('mainmodel');
  $reg->logadmin();
}
}
