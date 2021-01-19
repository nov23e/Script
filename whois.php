<?php
$url = $_GET['domain'];
	if(substr($url,0,7)=="http://"){
		$url = substr($url,7,99);
	}else{
      if(substr($url,0,8)=="https://"){
        $url = substr($url,8,99);}else{
      if(substr($url,0,3)=="www"){
      $url = substr($url,4,99);
      }
      }
    }
$domain=$url;
$whoisservers = array(
	"aero"=>"whois.aero",
	"arpa" =>"whois.iana.org",
	"asia" =>"whois.nic.asia",
	"at" =>"whois.nic.at",
	"be" =>"whois.dns.be",
	"biz" =>"whois.biz",
	"br" =>"whois.registro.br",
	"ca" =>"whois.cira.ca",
	"cc" =>"whois.nic.cc",
	"cn" =>"whois.cnnic.net.cn",
	"com" =>"whois.verisign-grs.com",
	"gov" =>"whois.nic.gov",
	"in" =>"whois.inregistry.net",
	"co.in" =>"whois.inregistry.net",
	"net.in" =>"whois.inregistry.net",
	"org.in" =>"whois.inregistry.net",
	"ind.in" =>"whois.inregistry.net",
	"firm.in" =>"whois.inregistry.net",
	"info" =>"whois.afilias.info",
	"int" =>"whois.iana.org",
	"is" =>"whois.isnic.is",
	"it" =>"whois.nic.it",
	"im" =>"whois.nic.im",
	"jobs" =>"jobswhois.verisign-grs.com",
	"me" =>"whois.nic.me",
	"mil" =>"whois.nic.mil",
	"mobi" =>"whois.dotmobiregistry.net",
	"museum" =>"whois.museum",
	"name" =>"whois.nic.name",
	"net" =>"whois.verisign-grs.net",
	"org" =>"whois.pir.org",
	"pro" =>"whois.registrypro.pro",
	"tc" =>"whois.adamsnames.tc",
	"tel" =>"whois.nic.tel",
	"travel" =>"whois.nic.travel",
	"tv" => "whois.www.tv",
	"co.uk" =>"whois.nic.uk",
	"org.uk" =>"whois.nic.uk",
	"us" =>"whois.nic.us",
	"ws" =>"whois.website.ws",
    "cx" =>"whois.nic.cx",
    "gs" =>"whois.nic.gs",
    "bid" =>"whois.nic.bid",
    "pw" =>"whois.nic.pw",
    "edu" =>"whois.educause.edu",
    "ac" =>"whois.nic.ac",
    "tw" =>"whois.twnic.net.tw",
    "hk" =>"whois.hkirc.hk",
    "vc" =>"whois2.afilias-grs.net",
    "la" =>"whois.nic.la",
    "tk" =>"whois.dot.tk",
    "ml" =>"whois.dot.ml",
    "cf" =>"whois.dot.cf",
    "gq" =>"whois.dominio.gq",
    "tn" =>"whois.ati.tn",
    "rs" =>"whois.rnids.rs",
    "pm" =>"whois.nic.pm",
    "fm" =>"whois.iana.org",
    "nz" =>"whois.srs.net.nz",
    "re" =>"whois.nic.re",
    "yt" =>"whois.nic.yt",
    "fun" =>"whois.nic.fun",
    "win" =>"whois.nic.win");

function LookupDomain($domain){
	global $whoisservers;
	$whoisserver = "";

	$dotpos=strpos($domain,".");
	$domtld=substr($domain,$dotpos+1);

	$whoisserver = $whoisservers[$domtld];

	if(!$whoisserver) {
		return "Error: No appropriate Whois server found for <b>$domain</b> domain!";
	}
	$result = QueryWhoisServer($whoisserver, $domain);
	if(!$result) {
		return "Error: No results retrieved $domain !";
	}

	preg_match("/Whois Server: (.*)/", $result, $matches);
	$secondary = $matches[1];
	if($secondary) {
		$result = QueryWhoisServer($secondary, $domain);
	}
		return  $result;
}

function QueryWhoisServer($whoisserver, $domain) {
	$port = 43;
	$timeout = 10;
	$fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
	fputs($fp, $domain . "\r\n");
	$out = "";
	while(!feof($fp)){
		$out .= fgets($fp);
	}
	fclose($fp);
	return $out;
}
$result = LookupDomain($domain);
?>
<html>
<head>
<title>在线域名WHOIS查询</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

<body>
 <center> <div class="page-header">
  <h1>在线域名Whois查询<small></small></h1>
</div></center>
<form action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="row"> <div class="col-lg-6 col-lg-offset-3">
    <div class="input-group">
      <input type="text" name="domain" id="domain" autocomplete="off" title="baidu.com" class="form-control" placeholder="要查询的域名">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">点击查询</button>
      </span>
    </div>
  </div>
</div>
</form>
<?php
if ($domain) {
    if (!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
        die("查询域名WHOIS格式, 比如. <i>baidu.com</i>!");
    }
    $result = LookupDomain($domain);
    echo "<pre>\n" . $result . "\n</pre>\n";
}
?>
<div align="center">
  <p>&#9400; 2020
    <a href="https://cyril.soy" title="Hxzo, lnc.">Cyril's Blog.</a></p>
</div>
</div>
</body>

</html>
