
<!-- Dưới đây là phần làm khung chi tiết của phần thêm, sửa đề tài và hiển thị danh sách các đề tài  -->
 <link rel="stylesheet" type="text/css" href="include/css/bootstrap.min.css"/><!-- nhúng file boostrap vào trong trang web-->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<div class="panel panel-default" style="width:800px;"> <!-- đây là thẻ bao toàn bộ phần hiển thị mục thêm -->
	<div class="panel-heading">
    <h3 class="panel-title">	đây là nhãn</h3>
    </div>
     <div class="panel-body">       
        <form class="form-horizontal" action="" method="post" role="form" enctype="multipart/form-data">
            <div class="form-group"> <!-- thẻ này chứa thẻ tên và thẻ nhập liệu -->
                <label class="col-sm-2 control-label"> name</label> <!-- Tên của trường mình muốn nhập vào csdl -->
                <div class="col-sm-6">
                    <input class="form-control form-control-static" type="text" id="name" name="name" /> <!-- ô nhập liệu -->
                    
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-2 control-label"> Nội dung</label> 

                <div class="col-sm-6">
                   <textarea class="form-control" id="noidung" name="noidung"></textarea>
                    
                </div>
            </div>
             <div class="form-group"> 
                <label class="col-sm-2 control-label"> Lựa chọn</label>
                <div class="col-sm-6">
                    <select class="form-control" name="luachon">
                    	<option class="" value="">lựa chọn</option>
                        <option class="" value="2">2</option>
                        <option class="" value="3">3</option>
                        <option class="" value="4">4</option>
                        <option class="" value="5">5</option>
                    </select>
                    
                </div>
            </div>
            <div class="form-group" align="center"> <!-- thẻ chứa nút thêm  -->
            	<input class="btn btn-primary " type="submit" value="Thêm"/>
            </div>
            
        </form> <!-- kết thúc form  -->
       </div>
</div> <!-- Kết thúc phần thêm đề tài dự án -->
<br /><br /><br /><br /><br /><br />
<!-- dưới đây là danh sách hiển thị các đề tài dự án đã có trong csdl  -->
<div class="panel panel-default" style="width:800px;">
	<div class="panel-heading">
    <h3 class="panel-title">	đây là hiển thị nội dung cac sản phẩm chi tiết</h3>
    </div>
     <div class="panel-body">  
     <form class="active" action="" name="frm" id="frm" method="post">     
       <table class="table table-responsive">
       <thead>
       <tr class="table-hover table-striped" style="background: blue; color:#FFF">
       	<td> STT</td>
        <td> Tên</td>
        <td> mật khẩu</td>
        <td> nội fung 2</td>
        <td> nội fung 1</td>
        <td> Hành động</td>
       </tr>
       </thead>
       <tbody>
       	<tr class="success">
       <td> 1</td>
        <td> MINH</td>
        <td> 1234</td>
        <td>chưa cập nhâtk</td>
        <td> đang thực hiện</td>
        <td> <a class="btn-link">sửa</a>/<a class="btn-link">xóa</a></td>
        </tr>
        	<tr class="success">
       <td> 1</td>
        <td> MINH</td>
        <td> 1234</td>
        <td>chưa cập nhâtk</td>
        <td> đang thực hiện</td>
        <td> <a class="btn-link">sửa</a>/<a class="btn-link">xóa</a></td>
        </tr>
        	<tr class="success">
       <td> 1</td>
        <td> MINH</td>
        <td> 1234</td>
        <td>chưa cập nhâtk</td>
        <td> đang thực hiện</td>
        <td> <a class="btn-link">sửa</a>/<a class="btn-link">xóa</a></td>
        </tr>
        	<tr class="danger">
       <td> 1</td>
        <td> MINH</td>
        <td> 1234</td>
        <td>chưa cập nhâtk</td>
        <td> đang thực hiện</td>
        <td> <a class="btn-link">sửa</a>/<a class="btn-link">xóa</a></td>
        </tr>	<tr class="success">
       <td> 1</td>
        <td> MINH</td>
        <td> 1234</td>
        <td>chưa cập nhâtk</td>
        <td> đang thực hiện</td>
        <td> <a class="btn-link">sửa</a>/<a class="btn-link">xóa</a></td>
        </tr>
       </tbody>
       <tfoot>
       <tr >
        <td colspan="3" align="right"> <input class="btn btn-primary" type="submit" value="Thêm"/></td>
        <td colspan="3" align="left"><input class="btn btn-success" type="submit" value="Thêm"/></td>
        </tr>
       </tfoot>
       </table>
       <form>
       </div>
</div>