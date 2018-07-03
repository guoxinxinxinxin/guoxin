<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"E:\phpstudy\WWW\tpfive\public/../application/index\view\redbag\show.html";i:1524450906;}*/ ?>
<meta charset='utf8'>
<div style=" width : 300px;  height:600px;border: 1px red solid; background-color: pink">
	<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
      <h3><?php if($v['r_type']==0): ?>普通红包
           <?php elseif($v['r_type']==1): ?>拼手气红包
           <?php else: ?>口令红包
           <?php endif; ?>
      	<h3><br/>
      金额：<?php echo $v['money']; ?>元<br/>
      数量：<?php echo $v['num']; ?>个
      <a href="">抢红包</a>
	<?php endforeach; endif; else: echo "" ;endif; ?>

</div>