<?php
include('../src/infomation.php');
$p = new info();
$p-> connect();
include('../src/csdlquanly.php');
$o = new csdl();
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
$layid=$_GET['id'];
$layact=$_GET['act'];
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../css/css.css" rel="stylesheet" type="text/css">
	<link href="../css/tt.css" rel="stylesheet" type="text/css">
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
			Cập nhật thông tin
		</div>
		<div id="content-right">
			<div id="content">
					<div id="content-tt">
						<form method="post">
						<table id="tt" style="width: 60%;">
							<tr>
								<td id="thuoctinh">Name :</td>
								<td id="noidungtt"><input type="text" name="txtname" value="<?php 
									echo $o->laycot("select Name from gv where gv.SDT=$layid");
									echo $o->laycot("select Name from hv where hv.SDT=$layid");
                                    echo $o->laycot("select Name from nv where nv.SDT=$layid");
                                    echo $o->laycot("select Name from ql where ql.SDT=$layid");
								?>"> 
								</td>
							</tr>
							<tr>
								<td id="thuoctinh">Phone Number :</td>
								<td id="noidungtt"><input type="phone" name="txtphone" value="<?php 
									echo $o->laycot("select SDT from gv where gv.SDT=$layid");
									echo $o->laycot("select SDT from hv where hv.SDT=$layid");
                                    echo $o->laycot("select SDT from nv where nv.SDT=$layid");
                                    echo $o->laycot("select SDT from ql where ql.SDT=$layid");
								?>"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Password :</td>
								<td id="noidungtt"><input type="phone" name="txtpass" value="<?php 
									echo $o->laycot("select password from gv where gv.SDT=$layid");
									echo $o->laycot("select password from hv where hv.SDT=$layid");
                                    echo $o->laycot("select password from nv where nv.SDT=$layid");
                                    echo $o->laycot("select password from ql where ql.SDT=$layid");
								?>"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Gender :</td>
								<td id="noidungtt">
                                    <input type="radio" id="male" name="gender" value="0">
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="1">
                                    <label for="female">Fe-Male</label>
                                </td>
							</tr>
							<tr>
								<td id="thuoctinh">Date of birth :</td>
								<td id="noidungtt"><input type="datetime" name="dob" value="<?php 
									echo $o->laycot("select Dateofbirth from gv where gv.SDT=$layid");
									echo $o->laycot("select Dateofbirth from hv where hv.SDT=$layid");
                                    echo $o->laycot("select Dateofbirth from nv where nv.SDT=$layid");
                                    echo $o->laycot("select Dateofbirth from ql where ql.SDT=$layid");
								?>"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Mail :</td>
								<td id="noidungtt"><input name="mail" type="mail" size ="40" value="<?php 
									echo $o->laycot("select Email from gv where gv.SDT=$layid");
									echo $o->laycot("select Email from hv where hv.SDT=$layid");
                                    echo $o->laycot("select Email from nv where nv.SDT=$layid");
                                    echo $o->laycot("select Email from ql where ql.SDT=$layid");
								?>"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Address :</td>
								<td id="noidungtt"><input name="address" type="text" placeholder="Địa chỉ..." value="<?php 
									echo $o->laycot("select Address from gv where gv.SDT=$layid");
									echo $o->laycot("select Address from hv where hv.SDT=$layid");
                                    echo $o->laycot("select Address from nv where nv.SDT=$layid");
                                    echo $o->laycot("select Address from ql where ql.SDT=$layid");
								?>" size="60"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Parents(Học Viên) :</td>
								<td id="noidungtt"><input name="parents" type="text" placeholder="Tên phụ huynh..." value="<?php 
									echo $o->laycot("select Name_parent from hv where hv.SDT=$layid");
								?>" size="60"></td>
							</tr>
							<tr>
								<td id="thuoctinh">ID of class(Học Viên) :</td>
								<td id="noidungtt"><input name="classid" type="text" placeholder="ID Lớp..." value="<?php 
									echo $o->laycot("select ID_Lop from hv where hv.SDT=$layid");
								?>" size="60"></td>
							</tr>
						</table>
                        <center style="margin-top: 30px;"><input type="submit" name="nut" value="Change"></center>
						<?php
							switch($_POST["nut"] ?? '')
							{
								case 'Change':
									{
										$name=$_REQUEST['txtname'];
										$phone=$_REQUEST['txtphone'];
										$pass=$_REQUEST['txtpass'];
										$gender=$_REQUEST['gender'] ?? '';
										$dob=$_REQUEST['dob'];
										$mail=$_REQUEST['mail'];
										$address=$_REQUEST['address'];
										$parents=$_REQUEST['parents'];
										$idclass=$_REQUEST['classid'];
										// echo $name.'|'.$phone.'|'.$pass.'|'.$gender.'|'.$dob.'|'.$mail.'|'.$address.'|'.$parents.'|'.$idclass;
										if($layact==3)
										{
											if($o->thucthisql("UPDATE hv SET Name='$name',SDT='$phone',act='3',Gender='$gender',password='$pass',ID_Lop='$idclass'
											,Email='$mail',Dateofbirth='$dob',Address='$address',Avata='',Name_parent='$parents' WHERE hv.SDT='$layid'")==1)
											{
												echo 'Update thanh cong!';
											}
											else
											{
												echo 'Loi sql!';
											}
										}
										else if($layact==2)
										{
											if($o->thucthisql("UPDATE gv SET Name='$name',SDT='$phone',act='2',Gender='$gender',password='$pass'
											,Email='$mail',Dateofbirth='$dob',Address='$address',Avata='' WHERE gv.SDT='$layid'")==1)
											{
												echo 'Update thanh cong!';
											}
											else
											{
												echo 'Loi sql!';
											}
										}
                                        else if($layact==1)
										{
											if($o->thucthisql("UPDATE nv SET Name='$name',SDT='$phone',act='1',Gender='$gender',password='$pass'
											,Email='$mail',Dateofbirth='$dob',Address='$address',Avata='' WHERE nv.SDT='$layid'")==1)
											{
												echo 'Update thanh cong!';
											}
											else
											{
												echo 'Loi sql!';
											}
										}
                                        else if($layact==0)
										{
											if($o->thucthisql("UPDATE ql SET Name='$name',SDT='$phone',act='0',Gender='$gender',password='$pass'
											,Email='$mail',Dateofbirth='$dob',Address='$address',Avata='' WHERE ql.SDT='$layid'")==1)
											{
												echo 'Update thanh cong!';
											}
											else
											{
												echo 'Loi sql!';
											}
										}
									}
							}
						?>
						</form>
					</div>
			</div>
		</div>
</body>

</html>