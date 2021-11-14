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
        <link href="../css/lh.css" rel="stylesheet" type="text/css">
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
        	Đóng lớp
        </div>
			<div id="content-right">
				<div id="content">
					<div id="content-lh">
					<?php
						$o->xuatdslop("select * from class");
					?>
                    </div>
				</div>
			</div>
        </div>
    </body>
</html>