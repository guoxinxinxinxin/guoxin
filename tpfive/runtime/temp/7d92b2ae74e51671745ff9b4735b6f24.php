<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\phpstudy\WWW\tpfive\public/../application/index\view\user\login.html";i:1528803661;}*/ ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
<div>
    <h1>前台管理</h1>
    <form action="" method="post">
    <div>
        <div>
                <ul>
                    <li>
                        <label for="user_name">用户名：</label>
                        <input type="text" name="user_name" value="user" id="user_name" size="40"  /><span></span>
                    </li>
                    <li>
                        <label for="user_pwd">密码：</label>
                        <input type="password" name="user_pwd" value="user" id="user_pwd" size="40" /><span></span>
                    </li>
                     
                  
                    <li>
                    	<input type="submit" value="提交">
                    </li>
                </ul>
                <a href="/demo/">第三方登录</a>
        </div>s
    </div>
</div>
</form>
</body>
</html>