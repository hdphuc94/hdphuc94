<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="up" id="up">
	<input type="submit" name="upfile" value="upload File">
</form>
<?php 
	
	if (isset($_POST['upfile'])) {
		$u = $_FILES['up'];
		print_r( $u);
		//$conn = mysqli_connect("localhost","root","","upload") or die("Không thể kết nối database");
		 //mysqli_select_db("ql_nckh",$conn);
		  //mysqli_query($conn,"SET NAMES 'utf8'");
		//if (!$conn) {
		//	die("Không thể kết nối tới database! ".mysqli_connect_error());
		//$sql = "INSERT INTO upfile(file) VALUES $u";
		//$result = mysqli_query($conn,$sql);
		
				move_uploaded_file($u['tmp_name'],"upload/".$u['name']);
		echo "<br>".$u['name']."<br>";
		echo $u['tmp_name'];
		
			} 


?>