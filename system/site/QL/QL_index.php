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
				Tạo tài khoản(Master)
			</div>
			<div id="content-right">
				<div id="content">
					<div id="content-tk">
							<center>Tạo Tài Khoản</center>
							<form id="taotk" method="post">
								<table id="taotk">
									<tr>
										<td>
											<label for="quyen" style="float:left">Quyền người dùng :</label>
										</td>
										<td>
											<select name="quyen" id="quyen" style="float:right">
											<option value="0">Quản lý</option>
											<option value="1">Nhân viên</option>
											<option value="2">Giảng Viên</option>
											<option value="3">Học Viên</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<label for="name" style="float:left">Họ và Tên:* </label>
										</td>
										<td>
											<input type="text" id="name" name="name" placeholder="Name.." style="float:right" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="name" style="float:left">Phone number:* </label>
										</td>
										<td>
											<input type="text" id="sdt" name="sdt"  style="float:right" pattern="^(0)+([0-9]{9})$" 
											required title="10 chữ số và bắt đầu bằng số 0"
										>
										</td>
									</tr>
									<tr>
										<td>
											<label for="pass" style="float:left">Password:* </label>
										</td>
										<td>
											<input type="text" id="pass" name="pass"  style="float:right" required>
										</td>
									</tr>
									<tr>
										<td>
											<label for="name" style="float:left">Mail: </label>
										</td>
										<td>
											<input type="text" id="mail" name="mail" style="float:right">
										</td>
									</tr>
									<tr>
										<td>
											<label for="name" style="float:left">Ngày Sinh:* </label>
										</td>
										<td>
											<input type="date" id="dob" name="dob"  style="float:right" required>
										</td>
									</tr>
									<tr>
										<td>
										<label for="name" style="float:left">Giới Tính : </label>
										</td>
										<td>
											<input type="radio" id="male" name="gender" value="0">
											<label for="male">Male</label>
											<input type="radio" id="female" name="gender" value="1">
											<label for="female">Fe-Male</label>
										</td>
									</tr>
								</table>
								<center><input type="submit" name="nut" id='submit' value="Tạo tài khoản"></center>
								<?php
									switch($_POST['nut'] ?? "")
                                    {
                                        case 'Tạo tài khoản':
                                            {
                                                $quyen=$_REQUEST['quyen'];
                                                $hovaten=$_REQUEST['name'];
												$phonenumber=$_REQUEST['sdt'];
												$pass=$_REQUEST['pass'];
												$mail=$_REQUEST['mail'];
												$DOB=$_REQUEST['dob'];
												$gender=$_REQUEST['gender'] ?? "";
												//echo $quyen.'|'.$hovaten.'|'.$phonenumber.'|'.$pass.'|'.$mail.'|'.$DOB.'|'.$gender;
												//Giangvien
                                                if($quyen==2)
                                                    {
														if($o->thucthisql("INSERT INTO gv (Name, SDT, act, Gender, password, Email, Dateofbirth, Address, Avata)
														 VALUES ('$hovaten', '$phonenumber', '$quyen', '$gender', '$pass', '$mail', '$DOB', '', '');")==1)
														{
															echo 'Tạo tài khoản thành công!';
														}
														else
														{
															echo 'Tài khoản đã tồn tại';
														}
                                                    }
												//HocVien
                                                elseif($quyen==3)
                                                    {
														if($o->thucthisql("INSERT INTO hv (Name, SDT, act, Gender, password, Email, Dateofbirth, Address, Avata)
														VALUES ('$hovaten', '$phonenumber', '$quyen', '$gender', '$pass', '$mail', '$DOB', '', '');")==1)
													   {
														   echo 'Tạo tài khoản thành công!';
													   }
													   else
													   {
														   echo 'Tài khoản đã tồn tại';
													   }
                                                    }
												//Quanly
												elseif($quyen==0)
                                                    {
														if($o->thucthisql("INSERT INTO ql (Name, SDT, act, Gender, password, Email, Dateofbirth, Address, Avata)
														VALUES ('$hovaten', '$phonenumber', '$quyen', '$gender', '$pass', '$mail', '$DOB', '', '');")==1)
													   {
														   echo 'Tạo tài khoản thành công!';
													   }
													   else
													   {
														   echo 'Tài khoản đã tồn tại';
													   }
                                                    }
												//Nhanvien
												elseif($quyen==1)
                                                    {
														if($o->thucthisql("INSERT INTO nv (Name, SDT, act, Gender, password, Email, Dateofbirth, Address, Avata)
														VALUES ('$hovaten', '$phonenumber', '$quyen', '$gender', '$pass', '$mail', '$DOB', '', '');")==1)
													   {
														   echo 'Tạo tài khoản thành công!';
													   }
													   else
													   {
														   echo 'Tài khoản đã tồn tại';
													   }
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