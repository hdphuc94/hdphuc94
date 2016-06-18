<?php 

	include('config/conection.php');
	$sqlselectdt = "SELECT * FROM detai , linhvuc,loaidetai Where detai.Dt_IDLinhVuc = linhvuc.Lv_ID AND  detai.Dt_IDLoaiDT=loaidetai.Ldt_ID ORDER BY detai.dt_id ASC  ";
	$rerult = mysqli_query($conn,$sqlselectdt);
	$count = mysqli_num_rows($rerult);
	if (isset($_GET['dtid'])) {
		$r=$_GET['dtid'];
		if ($r=='' || $r==1) {
			$page3=0;
			echo "bawng khong";
		}else{
			$page3 = ((intval($r))*10)-10;
			echo "dung roi";

		}
	}else{$page3=0;}


?>
<style type="text/css">
	table tr td {
		text-align: center;
		border-left: solid 1px #FFf;
	}
</style>
<div class="panel panel-default" style="width:800px;">
	<div class="panel-heading">
    <h3 class="panel-title">	đây là hiển thị nội dung cac sản phẩm chi tiết</h3>
    </div>
     <div class="panel-body">  
<table  class="table table-responsive" >
	<tr class="table-active table-hover table-striped" style="background:blue;color:#FFF;">
		<td scope="row">STT</td>
		<td>Mã đề tài</td>
		<td>Loại đề tài</td>
		<td>Lĩnh vực</td>
		<td>Tên đề tài</td>
		<td> Ngày đề xuất</td>
		<td>Ngày bắt đầu</td>
		<td>Ngày kết thúc</td>
		<td>Năm thực hiện</td>
		<td>ID chủ nhiệm</td>
		<td>Thành viên</td>
		<td>Tình trạng</td>
		<td>Phê duyệt</td>
		<td>Mã số</td>
		<td>Sửa/Xóa</td>


	</tr>

<?php
			
				
				
		$rr="SELECT * FROM detai , linhvuc,loaidetai Where detai.Dt_IDLinhVuc = linhvuc.Lv_ID AND  detai.Dt_IDLoaiDT=loaidetai.Ldt_ID ORDER BY detai.dt_id ASC LIMIT $page3,10";
		$result1 =mysqli_query($conn,$rr);
					
		$i=1;
		while ($row= mysqli_fetch_array($result1)) {
		
	 ?>
	<tr class="table-success danger" >
		<td> <?php echo $i; ?> </td>
		<td ><?php echo $row['Dt_ID'] ?></td>
		<td><?php echo $row['Ldt_TenLDT'] ?></td>
		<td><?php echo $row['Lv_TenLV'] ?></td>
		<td><?php echo $row['Dt_TenDT'] ?></td>
		<td><?php echo $row['Dt_NgayDeXuat'] ?></td>
		<td><?php echo $row['Dt_NgayBatDau'] ?></td>
		<td><?php echo $row['Dt_NgayKetThuc'] ?></td>
		<td><?php echo $row['Dt_NamThucHien'] ?></td>
		<td><?php echo $row['Dt_IDChuNhiem'] ?></td>
		<td><?php echo $row['Dt_ThanhVien'] ?></td>
		<td><?php echo $row['Dt_TinhTrang'] ?></td>
		<td><?php echo $row['Dt_PheDuyet'] ?></td>
		<td><?php echo $row['Dt_Maso'] ?></td>
		<td><a  href="?action=sua?dt_id=<?php echo $row['Dt_ID'] ?>">Sửa</a>/<a  href="?action=xoa?dt_id = <?php echo $row['Dt_ID'] ?>">Xóa</a></td>

	</tr>
	
	<?php $i++; } ?>

</table>

<ul class="pagination pagination-sm">
	<li><a href="?dtid=1">&laquo;</a></li>
	<?php
		$baitren_mottrang = 10;
		$sotrang = $count/$baitren_mottrang;
	 for ($l=1 ; $l <=  $sotrang; $l++ ) 
	 { 
		echo "<li><a href='?dtid={$l}'>{$l}</a></li>";
	 } ?>

	<li><a href="?dtid=<?php echo (int)$sotrang ?>">&raquo;</a></li>
</ul>
</div>