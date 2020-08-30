<?php 
error_reporting(E_ERROR|E_WARNING|E_PARSE);
define('PATH',dirname(__FILE__).DIRECTORY_SEPARATOR);
$SELF=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
$m=$_GET['m'];if('link'==$m){
	if($_POST){
		foreach($_POST['a'] as $k=>$v){$a[$k]=array(f($v),f($_POST['b'][$k]),f($_POST['c'][$k]));$aa[]=$v;}
		array_multisort($aa,SORT_ASC,$a);file_put_contents(PATH.'cache.links.php',"<?php return '".serialize($a)."';");
	}
	$a=@include(PATH.'cache.links.php');$a=@unserialize($a);if(is_array($a)){foreach($a as $v){$jsadd.="add($v[0],'$v[1]','$v[2]');";}}
	$TITLE='友链管理';
	$E=<<<e
<div class="main">
	<div class="nav"><a href="{$SELF}">域名</a> | <a class="c" href="{$SELF}?m=link">友链</a> | <a href="{$SELF}?m=misc">其他</a></div>
	<div class="box">
		<form action="{$SELF}?m=link" method="post">
			<div class="h"><div class="col11">排序</div><div class="col12">名称</div><div class="col13">网址</div></div>
			<div id="list"></div>
			<div style="line-height:25px"><a href="javascript:add();">增加</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="提交" /></div>
		</form>
	</div>
</div>
<script>
function add(a,b,c){
if(typeof(a)=='undefined'){a=10;}if(typeof(b)=='undefined'){b='';}if(typeof(c)=='undefined'){c='';}
var div=document.createElement("div");
div.innerHTML='<input type="text" class="col11" name="a[]" value="'+a+'"> <input type="text" class="col12" name="b[]" value="'+b+'"> <input type="text" class="col13" name="c[]" value="'+c+'">';
document.getElementById("list").appendChild(div);
}
{$jsadd}
</script>
e;
}elseif('misc'==$m){
	if($_POST){
		$a=array('name'=>$_POST['name'],'contact'=>$_POST['contact'],'sid'=>$_POST['sid'],'pid'=>$_POST['pid']);
		file_put_contents(PATH.'cache.misc.php',"<?php return '".serialize($a)."';");
	}
	$a=@include(PATH.'cache.misc.php');$a=@unserialize($a);
	$TITLE='其他设置';
	$E=<<<e
<div class="main">
	<div class="nav"><a href="{$SELF}">域名</a> | <a href="{$SELF}?m=link">友链</a> | <a class="c" href="{$SELF}?m=misc">其他</a></div>
	<div class="box">
		<form action="{$SELF}?m=misc" method="post">
			网站名称 <input type="text" name="name" value="{$a['name']}" /><br>
			联系方式 <textarea name="contact">{$a['contact']}</textarea><br>
			<a href="http://cs.occamx.com/" target="_blank">云评论</a>SID <input type="text" name="sid" value="{$a['sid']}" /> (不开启评论请留空)<br>
			<a href="http://cs.occamx.com/" target="_blank">云评论</a>PID <input type="text" name="pid" value="{$a['pid']}" /> (不开启评论请留空)
			<div style="line-height:25px"><input type="submit" value="提交" /></div>
		</form>
	</div>
</div>
e;
}else{
if($_POST){
	foreach($_POST['a'] as $k=>$v){
		$a[$k]=array(f($v),f($_POST['b'][$k]),f($_POST['c'][$k]),f($_POST['d'][$k]));$aa[]=$v;
	}
	array_multisort($aa,SORT_ASC,$a);
	file_put_contents(PATH.'cache.domains.php',"<?php return '".serialize($a)."';");
}
$a=@include(PATH.'cache.domains.php');$a=@unserialize($a);if(is_array($a)){foreach($a as $v){$jsadd.="add($v[0],'$v[1]','$v[2]','$v[3]');";}}
$TITLE='域名管理';
$E=<<<e
<div class="main">
	<div class="nav"><a class="c" href="{$SELF}">域名</a> | <a href="{$SELF}?m=link">友链</a> | <a href="{$SELF}?m=misc">其他</a></div>
	<div class="box">
		<form action="{$SELF}" method="post">
			<div class="h"><div class="col11">排序</div><div class="col12">域名</div><div class="col13">价格</div><div class="col14">描述</div></div>
			<div id="list"></div>
			<div style="line-height:25px"><a href="javascript:add();">增加</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="提交" /></div>
		</form>
	</div>
</div>
<script>
function add(a,b,c,d){
if(typeof(a)=='undefined'){a=10;}if(typeof(b)=='undefined'){b='';}if(typeof(c)=='undefined'){c='';}if(typeof(d)=='undefined'){d='';}
var div=document.createElement("div");
div.innerHTML='<input type="text" class="col11" name="a[]" value="'+a+'"> <input type="text" class="col12" name="b[]" value="'+b+'"> <input type="text" class="col13" name="c[]" value="'+c+'"> <input type="text" class="col14" name="d[]" value="'+d+'">';
document.getElementById("list").appendChild(div);
}
{$jsadd}
</script>
e;
}
print<<<e
<html><head><meta charset="UTF-8"><title>{$TITLE}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<style>
*{box-sizing:border-box}a{color:#369;text-decoration:none}
.box{border:1px solid #cdcdcd;color:#666;line-height:25px;padding:20px}
.h div{text-align:center}.nav .c{text-decoration:underline}.nav{line-height:30px}
.col11,.col12,.col13,.col14{display:inline-block}
.col11{width:50px}.col12{width:200px}.col13{width:200px}.col14{width:200px}
</style>
</head><body>{$E}</body></html>
e;
function f($v){return str_replace(array('"',"'","\r","\n","\\"),'',$v);}
