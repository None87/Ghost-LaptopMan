<?php
header('Set-Cookie: cross-site-cookie=name; SameSite=lax; Secure');
setcookie("noLax",'123',null,"/","n0ne.site",true,true);
setcookie("Lax","123",array('samesite'=>'Strict'));
#$dbh=new pdo("mysql:host=localhost;dbname=northwind","sheng","kk123123");
#$sth=$dbh -> prepare("select * from customers where first_name like ? ");
#$sth->execute(array("%a%"));
#$res=$sth->fetchAll();
#print_r($res);
print_r(end(explode('.',$_GET['filename'])));
$lfi=str_replace('.','',$_GET['lfi']);
print_r(str_replace('/','',$lfi));
$xss=addslashes(htmlspecialchars($_GET['xss'],ENT_QUOTES));
print_r($xss);
$ary=array(1,2,3,4,5,6,7,8);
echo in_array(8,$ary);
?>
