<?php
class s{
	var $xulie = "system('dir');";
}
$a = new s();
$xulie = serialize($a);
echo "<br/> $xulie";

echo "-----------------------------------------------------";	

echo "<br/>" . unserialize($xulie);

/******************

if(unserialize($xulie)){
    
}else{
    echo "<br/>" . "反序列化有误，请重新输入！";
}

***/
?>