<?php
require_once "../models/user.php";
class userController{
    private $model;
    public function __construct()
    {
        $this->model    =   new User();
        return "true";
    }
    public function signup($data){
        //Signup code goes here
    }
    public function login($data){
        //Login code goes here
    }
}

$init   =   new userController();

if (isset($_POST['signup_submit']))
{
    $data = [
        'name'=>$_POST['name'],
        'password'=>$_POST['pwd'],
        'username'=>$_POST['username'],
    ];
    $init->signup($data);
}
if (isset($_POST['login_submit']))
{
    $data = [
        'password'=>$_POST['pwd'],
        'username'=>$_POST['username'],
    ];
    $init->login($data);
}