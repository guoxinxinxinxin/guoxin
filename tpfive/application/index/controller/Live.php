<?php 
namespace app\index\controller;
use think\Controller;
use think\View;
use think\File;
use think\Db;
use think\Request;
class Live extends Controller
{
   public function live()
   {
   	if ($_POST) {
   		$data=$_POST;
   		$file = request()->file('gimage');
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $data['gimage']=$info->getSaveName();
   		$data['gstart_time']=strtotime($_POST['gstart_time']);
   		$ret=Db::table('game')->insert($data);
   		if ($ret) {
   			$this->redirect('liveShow');
   		}
   	}
   	$team=Db::table('team')->select();
   	$this->assign('team',$team);
   	return $this->fetch('live');
   }
   public function liveShow()
   {
   	$data=Db::table('game')->inner('team','game.a_id=team.t_id')->select();
   	$this->assign('data',$data);
   	$this->fetch('liveShow');
   }
}


 ?>