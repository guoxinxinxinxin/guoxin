<?php
namespace app\index\controller;
 use think\Controller;
 use think\View;
 use think\Request;
 use think\Db;
 use think\File;
class Team extends Controller
{
	//球队页面渲染添加
    public function team()
    {
    	if ($_POST) {
    		$data=$_POST;
    		 $file = request()->file('image');
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
              // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            $data['image']=$info->getSaveName();
    		$res=Db::table('team')->insert($data);
    		if ($res) {
    			$this->redirect('team/teamShow');
    		}
    	}
    		else
    		{
    			return $this->fetch('team/team');
    		}
    	}

   //球队页面展示
   public function teamShow()
   {
   	$data=Db::table('team')->select();
   	$this->assign('data',$data);
   	return $this->fetch();
   }
   //球队删除和修改页面
   public function teamOpe()
   {
     $action=isset($_GET['a'])?$_GET['a']:'';
     if ($action=='del') {
     	$id=$_GET['id'];
     	$res=Db::table('team')->where("t_id=".$id)->delete();
     	if ($res) {
     		$this->redirect('team/teamShow');
     	}
     }
     else if($action=='up')
     {
      $id=$_GET['id'];
      $find=Db::table('team')->where("t_id=".$id)->find();
      $this->assign('find',$find);
      return $this->fetch('team/teamUp');
     }
   }
   // //执行修改
   // public function teamUpdo()
   // {
   //  $data=$_POST;
   //  var_dump($data);die;
   // 	// $file = request()->file('image');
   //  // var_dump($file);die;
   //  // $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
   // 	$t_id=$_POST['t_id'];
   	
   // //	unset($data['t_id']);
   // 	 // $data['image']=$info->getSaveName();
   
   // 	$res=Db::table('team')->where('t_id='.$t_id)->update($data);
   // 	if ($res) {
   // 		$this->redirect('team/teamShow');
   // 	}
   // }
   public function player()
   {
    if ($_POST) {
      $data=$_POST;
       $file = request()->file('photo');
       $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');   
       $data['photo']=$info->getSaveName();
       $ret=Db::table('player')->insert($data);
      if ($ret) {
        $this->redirect('playerShow');
      }
    }else
    {
      $team=Db::table('team')->select();
      //var_dump($team);die;
       $this->assign('team',$team);
      return $this->fetch('team/player');
    }
   }
   public function playerShow()
   {
    $data=Db::table('team')->join('player','team.t_id=player.t_id')->select();
    $this->assign('data',$data);
    return $this->fetch('playerShow');
   }
}