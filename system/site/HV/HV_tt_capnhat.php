<?php
include('../src/infomation.php');
$p = new info();
$p-> connect();
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] != 3)
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
	<link href="../css/tt.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="left">
		<h2 style="text-align: center;color:#0034e8;margin-top:30px;font-family: Brush Script MT;margin-left:30px;font-size:40px">ABC English Center</h2>
		<div class="infor">
			<div style="border-bottom: 1px solid ;">
				<center>Infomation</center>
			</div>
			<div class="image">
						<img src="../pic/
						<?php
							$quyen=$_SESSION['quyen'];
							$sdt=$_SESSION['sdt'];
								$p->pic("select * from hv where SDT =$sdt");
						?>
						" alt="" style="width: 80%;margin-top:20px;border-radius:50px">
					</div>
			<div class="content-infor">
			<?php
				$p->infomation("select * from hv where SDT =$sdt");
			?>
			</div>
		</div>
		<div id="bottom-left">
			<div class="action">
				<a href="../HV/HV_kq.php"><button class="buttom"> Kết quả học tập </button></a>
				<a href="../HV/HV_tt.php"><button class="buttom"> Thông tin cá nhân </button></a>
				<a href="../HV/HV_kt.php"><button class="buttom"> Làm bài kiểm tra </button></a>
				<a href="../HV/HV_hp.php"><button class="buttom"> Học Phí </button></a>
				<a href="../DD"><button class="buttom"> Diễn đàn </button></a>
				<a href="../HV/HV_index.php"><button class="buttom"> Thời khóa biểu </button></a>
			</div>
		</div>
	</div>
	<div id="right">
		<div id="top-right">
			CẬP NHẬT THÔNG TIN CÁ NHÂN
		</div>
		<div id="content-right">
			<div id="content">
				<form>
					<div id="content-tt">
						<?php
						$p->infochange("select * from hv where SDT =$sdt");
						?>
						<br>
                        <center><input type="submit" name="submit" value="Up-date"></center>
					</div>
				</form>
			</div>
		</div>
		<?php
		if (isset($_REQUEST['submit']))
		{
			switch($_REQUEST['submit'])
			{
				case 'Up-date':
					$name= $_REQUEST['name'];
					$phone= $_REQUEST['phone'];
					$mail=$_REQUEST['mail'];
					$address=$_REQUEST['address'];
					include('../src/baikiemtra.php');
					$bkt = new kiemtra();
					$bkt ->connect();
					if($bkt->add("
					UPDATE hv
					SET SDT = '$phone', Name = '$name', Email = '$mail' , Address = '$address'
					WHERE SDT = '$sdt';") ==1)
					{
						echo"
						<script>alert('cập nhật thông tin thành công . vui lòng đăng nhập lại');</script>
						";
						$sec = "5";
						header("Refresh: $sec; url=../../");
					}
					else{
						echo"
						<script>alert('cập nhật thông tin không thành công');</script>
						";
					}
					
			}
		}
		?>
</body>

</html>