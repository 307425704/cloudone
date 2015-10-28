<?php

function checkLogin($nameStr,$passwordStr){
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cloudonedb", $con);
	
	$sql=sprintf("SELECT count(1) as num FROM User where name='%s' and Password='%s'",
 	mysql_real_escape_string($nameStr),
 	mysql_real_escape_string($passwordStr));
	
	$result = mysql_query($sql);
	$loginsuccess = false;
	$row = mysql_fetch_array($result);
	if($row['num'] >0){
		$loginsuccess=true;
	}
	//while($row = mysql_fetch_array($result)){
  	//	echo $row['name'] . " " . $row['password'];
  	//	break;
  	//}

	mysql_close($con);
	return $loginsuccess;
}

// 定义变量并设置为空值
$nameErr = $passwordErr = $pwdnameErr="";
$name = $password="";
$success=true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "必填";
     $success=false;
   } //else {
     $name = test_input($_POST["name"]);
     // 检查姓名是否包含字母和空白字符
     //if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       //$nameErr = "只允许字母和空格"; 
       //$success=false;
     //}
   //}
   if (empty($_POST["password"])) {
     $passwordErr = "必填";
     $success=false;
   }  
   $password = $_POST["password"];
      //此处省略了账号密码验证代码，验证OK再执行下面代码 
if ($success){ 
	if(checkLogin($name, $password)){
		//会话中有要跳转的页面 
		//$url = $_SESSION['userurl']; 
		//0.5s后跳转 
		$pwdnameErr="";
		echo "<meta http-equiv=\"refresh\" content=\"1.5;url=../views/home.php?name=$name\">";
	} else {
		$pwdnameErr="用户名或者密码错误";
	}
 }  
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>

