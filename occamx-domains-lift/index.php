<?php 
error_reporting(E_ERROR|E_WARNING|E_PARSE);
define('PATH',dirname(__FILE__).DIRECTORY_SEPARATOR);
$misc=@include(PATH.'cache.misc.php');$misc=@unserialize($misc);
$domains=@include(PATH.'cache.domains.php');$domains=@unserialize($domains);
$links=@include(PATH.'cache.links.php');$links=@unserialize($links);
$TITLE=$misc['name']?$misc['name']:'无名米表';
if(is_array($domains)){foreach($domains as $v){empty($v[2])&&$v[2]='议价';empty($v[3])&&$v[3]='&nbsp;';$e_d.='<div class="e'.($v[2]=='已售'?' sold':'').'"><div class="card"><div class="row"><h5>'.$v[1].'</h5><span class="price">'.$v[2].'</span></div><p>'.$v[3].'</p></div></div>';}}
if(is_array($links)){foreach($links as $v){$e_l.='<a href="'.$v[2].'" target="_blank">'.$v[1].'</a>&nbsp;&nbsp;';}}
if($misc['sid']&&$misc['pid']){
	$e_c='<div style="max-width:1000px"><br><div id="tc_s'.$misc['sid'].'p'.$misc['pid'].'"></div><link rel="stylesheet" href="//c.fansx.com/tc.css"/><script src="//c.fansx.com/?m=c1&sid='.$misc['sid'].'&pid='.$misc['pid'].'"></script></div>';
}
print<<<e
<html><head><meta charset="UTF-8"><title>{$TITLE}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<style>
body,ul,ol,li,dl,dd,p,h1,h2,h3,form{margin:0;padding:0}*{box-sizing:border-box}
body{color:#444;text-align:center;font:400 16px/1.7 "Microsoft JhengHei", sans-serif}.wp{width:90%;max-width:1000px;margin:auto;text-align:left;line-height:25px}
h1{line-height:50px;font-size:28px;margin-top:20px}a{text-decoration:none;color:#000}b{font-weight:600}
.tb{border-collapse:collapse;border:none}.tb th,.tb td{padding:3px 10px 3px 0;line-height:35px}
.green{color:#9ACD32}.gray{color:#ccc}.misc{margin-top:10px;line-height:30px;font-size:14px}
.hr{border-bottom:1px solid #cfdee3;width:200px;line-height:35px;margin:20px 0 10px;font-weight:400;font-size:20px}
.foot{margin:30px auto;font-size:12px}
.center{width:100%;text-align:center}.brand{display:inline-block;margin:auto}
.box{display:flex;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.box .e{flex:0 0 25%}.sold{color:#999;text-decoration:line-through}
.card{border:1px solid rgba(0,0,0,0.125);border-radius:0.25rem;margin:10px 15px}.card .row{display:flex;flex-wrap:wrap;margin:15px}.card p{margin:15px}
.card h5{margin:0;font-weight:700;font-size:17px;flex:0 0 75%}.card .price{flex:0 0 25%;text-align:right}
@media(max-width:767px){.box .e{flex:0 0 100%}}
@media(min-width:766px){.card h5{max-width:152px;overflow:hidden}}
</style>
</head><body>
<div class="wp">
	<div class="center"><div class="brand"><h1><a href="./">{$TITLE}</a></h1></div></div>
	<div class="box">
		{$e_d}
	</div>

<div class="hr">联系方式</div>
<div class="misc">{$misc['contact']}</div>
<div class="hr">友情链接</div>
<div class="misc">{$e_l}</div>
{$e_c}
<div class="foot">Powered by <a href="http://www.fzlym.com/t/15" target="_blank">非主流米表</a> v1.0</div>
</div>
</body>
</html>
e;
