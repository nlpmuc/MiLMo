<?php
$f_open = fopen("count.dat","r+"); //打开指定的文件
$count = fgets($f_open); //读取文件中的数据
if(empty($_COOKIE['abc'])){ //判断COOKIE的是否存在
 setcookie('abc','abc');
 $count = $count + 1; //将变量$count的值加1
 rewind($f_open); //打开指定的文件
 fwrite($f_open,$count); //向文件中写入新的数据
 fclose($f_open); //关闭文件
}
echo $count
?>
