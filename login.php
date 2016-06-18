
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Quản lý nghiên cứu khoa học - Khoa Công Nghệ Thông Tin</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="include/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="include/css/login.css">
		<script src="include/js/jquery-1.12.3.min.js"></script>
		<script src="include/js/bootstrap.min.js"></script>

		
	</head>
	<body>
		

    <div class="wrapper">
    <form class="form-signin" action="config/xuly_login.php" method="POST">       
      <h2 class="form-signin-heading">Đăng nhập hệ thống </h2>
      <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Ghi nhớ đăng nhập
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn_dangnhap">Đăng nhập</button>   
    </form>
  </div>

    
  
	
	</body>
</html>