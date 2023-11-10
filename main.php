<?php
$wordlist = array('kontol.php','indosec.php','upload.php5','wso.php','alfa.php','Alfa.php','mini.php','up.php','1337up.php','up.php5','up.php7','bypass.php','bypass.php7','bypass.phtml','bypass.php5','shell1337.php','memek.php','indonxploit.php','gelay.php','bypass.php7','bypass.php5','bypass.phtml','idx.php','upload.php','up.php','up.php5','up.php7','marijuana.phtml','403.phtml','shell.phtml','alfa.php','Alfa.php','Alfa.phtml','up.phtml','p.php','webadmin.php','403.php','c99.php','indoxploit.php','marjan.php','marijuana.php','indosec.php','ids.php','eviltwin.php','mass.php','evil.php','shel.php','shell.php','b374k.php','minishell.php','mini.php','wso.php',);
echo "\33[0;36m==========================================================\n";
echo "\33[37;1mFounder : Ahmdcybr\n";
echo "\33[37;1mblogspot : https://stdfromcybertobrotherhood.blogspot.com\n";
echo "\33[0;36m==========================================================\n";
echo "\33[37;1msite:";
$target = fopen("php://stdin","r"); 
$url = trim(fgets($target));
foreach ($wordlist as $key) {
$domain = $url.'/'.$key;
$checker = get_headers($domain);
if (preg_match('/200/', $checker[0])) {
echo "\33[0;32m[✓]".$domain."\n";
}else{
echo "\33[31;1m[x]".$domain."\n";
     }
   }
?>