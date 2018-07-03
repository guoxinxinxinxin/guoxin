<?php 
namespace app\index\controller;

use think\Controller;
use think\View;
use think\Request;
use think\Db;
class Redbag extends Controller
{
	public function Redbag()
	{
		if($_POST)
		{
			$data=$_POST;
			$res=Db::table('redbag')->insert($data);
			$this->redirect('show');
		}
		return $this->fetch('redbag');
	}
	public function show()
	{
		$data=Db::table('redbag')->select();	
		$this->assign('data',$data);
	  return $this->fetch('show');
	}
}




 ?>