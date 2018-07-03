<?php 
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;
class User extends Controller
{
 public function login()
    {
      if ($_POST) {
      $data['user_name']=$_POST['user_name'];
      $data['user_pwd']=$_POST['user_pwd']; 
      $res=Db::table('user')->where($data)->find();
     if ($res) {
           $this->redirect('team/player');
         } 
   
}
 return $this->fetch('login');
}
}
 ?>