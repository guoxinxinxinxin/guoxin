<?php 
header('content-type:text/html;charset=utf8');
include_once( 'callback.php' );
 // 初始化session.
    session_start();
     /*** 删除所有的session变量..也可用unset($_SESSION[xxx])逐个删除。****/
     //$_SESSION = array();
     /***删除sessin id.由于session默认是基于cookie的，所以使用setcookie删除包含session id的cookie.***/
     if (isset($_COOKIE[session_name()])) {
       setcookie(session_name(), '', time()-3600*31, '/');
     } session_destroy();
     unset($token);
     unset($_REQUEST['code']);
    unset($_SESSION['token']);
	unset($_COOKIE['weibojs_']);
     echo "<script>alert('微博退出成功');location.href='index.php';</script>";
     // 最后彻底销毁session.
    

 ?>
 