<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 <?php include '../server/loginaction.php' ?>
 <br />
 <br/>
 <br />
 <br/>
 <br />
 <br/>
 <br />
 <br/>
 <div class="form-control:focus" align='center'>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		 <table>
			<tr>
				<td> 姓名：</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
				<td><span class="error">* <?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="password" value="<?php echo $password;?>"></td>
				<td><span class="error">* <?php echo $passwordErr;?></span></td>
			</tr>
			<tr>
				<td column='2'><input type="submit" name="submit" value="登陆"> </td>
				<td><span class="error"><?php echo $pwdnameErr;?></span></td>
			</tr>
		</table>
		 
	 </form> 
  </div>     
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.js"></script>
</body>