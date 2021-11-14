<?php
include('../src/infomation.php');
$p = new info();
include('../src/csdlquanly.php');
$o = new csdl();
$p-> connect();
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] != 0)
	{
		header('location:../../index.php');
	}
}
else
{
	header('location:../../index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/css.css" rel="stylesheet" type="text/css">
        <link href="../css/tk_nv.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	<div id="left">
		<h2 style="text-align: center;color:#0034e8;margin-top:30px;font-family: Brush Script MT;margin-left:30px;font-size:40px">ABC English Center</h2>
		<div class="infor">
					<div style="border-bottom: 1px solid ;"><center>Infomation</center></div>
					<div class="image">
						<img src="../pic/
						<?php
							$quyen=$_SESSION['quyen'];
							$sdt=$_SESSION['sdt'];
								$p->pic("select * from ql where SDT =$sdt");
						?>
						" alt="" style="width: 80%;margin-top:20px;border-radius:50px">
					</div>
					<div class="content-infor">
                    <?php
								$p->infomation("select * from ql where SDT =$sdt");
						?>
					</div>
		        </div>
		<div id="bottom-left">
                <div class="action">
					<a href="../QL/QL_index.php"><button class="buttom"> Tạo Tài Khoản </button></a>
					<a href="../QL/QL_suataikhoan.php"><button class="buttom"> Sửa Tài Khoản </button></a>
                    <a href="../QL/QL_molop.php"><button class="buttom"> Mở lớp mới </button></a>
                    <a href="../QL/QL_donglop.php"><button class="buttom"> Đóng lớp </button></a>
					<a href="../QL/QL_doanhthu.php"><button class="buttom"> Doanh Thu </button></a>
					<a href="../DD/"><button class="buttom"> Diễn đàn </button></a>
                </div>
        </div>
	</div>
        <div id="right">
        <div id="top-right">
        	Mở lớp mới
        </div>
			<div id="content-right">
				<div id="content">
					<div id="content-tk">
							<center>Mở lớp mới</center>
							<form id="taotk" method="post">
								<table id="taotk">
									<tr>
										<td>
											<label for="" style="float:left">Chọn Khóa Học :</label>
										</td>
										<td>
											<select name="khoahoc" id="" style="float:right; width:80px;">
											<option value="AV1">AV1</option>
											<option value="AV2">AV2</option>
											<option value="AV3">AV3</option>
											<option value="AV4">AV4</option>
											<option value="AV5">AV5</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="" style="float:left">Tên Lớp Học :*</label>
										</td>
										<td>
											<input type="text" name="txtname" placeholder="class.." required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="quyen" style="float:left">Chọn giảng viên :</label>
										</td>
										<td>
											<?php
												$o->xuatcomboboxgv("select * from gv");
											?>
										</td>
									</tr>
									<tr>
										<td>
											<label for="quyen" style="float:left">Chọn lớp :</label>
										</td>
										<td>
											<select name="lophoc" id="quyen" style="float:right;width:80px;">
											<option value="zoom1">zoom1</option>
											<option value="zoom2">zoom2</option>
											<option value="zoom3">zoom3</option>
											<option value="zoom4">zoom4</option>
											<option value="zoom5">zoom5</option>
											<option value="zoom6">zoom6</option>
											<option value="zoom7">zoom7</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="name" style="float:left;">Số lượng học viên : </label>
										</td>
										<td>
											<input type="number" id="name" name="slhocvien"  style="float:right;width:50px;" placeholder="min15"min="15" max="30" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="quyen" style="float:left">Lịch học :</label>
										</td>
										<td>
											<select name="lichhoc" id="quyen" style="float:right;width:80px;">
											<option value="2">2-4-6</option>
											<option value="1">3-5-7</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="quyen" style="float:left">Giờ học :</label>
										</td>
										<td>
											<select name="giohoc" id="quyen" style="float:right;width:80px;">
											<option value="1">5h30-7h</option>
											<option value="2">7h30-9h</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="quyen" style="float:left">Số buổi học :</label>
										</td>
										<td>
											<select name="sobuoihoc" id="quyen" style="float:right;width:80px;">
											<option value="24">24</option>
											<option value="48">48</option>
											<option value="72">72</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="name" style="float:left">Ngày Bắt đầu:* </label>
										</td>
										<td>
											<input type="date" id="name" name="ngaybegin"  style="float:right" required>
										</td>
									</tr>
									<tr>
										<td>
											<input style="margin-left:150px"type="submit" name="nut" value="Create">
										</td>
									</tr>
								</table>
							<?php
								switch($_POST["nut"] ?? '')
								{
									case "Create":
										{
											$khoahoc=$_REQUEST['khoahoc'];
											$tenlop=$_REQUEST['txtname'];
											$sdt_gv=$_REQUEST['sdt_gv'];
											$lophoc=$_REQUEST['lophoc'];
											$sl=$_REQUEST['slhocvien'];
											$lichhoc=$_REQUEST['lichhoc'];
											$giohoc=$_REQUEST['giohoc'];
											$sobuoihoc=$_REQUEST['sobuoihoc'];
											$ngaybegin=$_REQUEST['ngaybegin'];
											// echo $khoahoc.'|'.$tenlop.'|'.$sdt_gv.'|'.$lophoc.'|'.$sl
											// .'|'.$lichhoc.'|'.$giohoc.'|'.$sobuoihoc.'|'.$ngaybegin;
											if($o->thucthisql("INSERT INTO `class`(`ID_lop`, `Name_class`, `cahoc`, `lophoc`, `lichhoc`, `ngaybatdau`, `sobuoihoc`, `SDT_gv`, `SL_hocvien`) 
																VALUES ('','$tenlop','$giohoc','$lophoc','$lichhoc','$ngaybegin','$sobuoihoc','$sdt_gv','$sl')")==1)
											{
												echo 'Succesfuly!';
											}
											else
											{
												echo 'Error!';
											}
										}
								}
							?>
							</form>
					</div>
				</div>
			</div>
        </div>
    </body>
</html>