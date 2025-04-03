<?php
$name=htmlspecialchars($_POST['name'],ENT_QUOTES);
$choices=htmlspecialchars($_POST['choices'],ENT_QUOTES);
$num=htmlspecialchars($_POST['number'],ENT_QUOTES);


print "私の名前は".$name."ですね<br />";
print "ご希望の商品は、".$choices."ですね<br />";
print "個数は".$num;