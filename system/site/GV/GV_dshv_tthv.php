<?php
include('../src/infomation.php');
$p = new info();
$p-> connect();
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] != 2)
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
		<link href="../css/dshv.css" rel="stylesheet" type="text/css">
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
								$p->pic("select * from gv where SDT =$sdt");
						?>
						" alt="" style="width: 80%;margin-top:20px;border-radius:50px">
					</div>
					<div class="content-infor">
					<?php
								$p->infomation("select * from gv where SDT =$sdt");
						?>
					</div>
		        </div>
                <div id="bottom-left">
				<div class="action">
                    <a href="../GV/GV_kt.php"><button class="buttom"> Bài kiểm tra </button></a>
                    <a href="../GV/GV_dsl.php"><button class="buttom"> Danh sách lớp </button></a>
                    <a href="../DD"><button class="buttom"> Diễn đàn </button></a>
                    <a href="../GV/GV_index.php"><button class="buttom"> Thời khóa biểu </button></a>
                </div>
			</div>
        </div>
        <div id="right">
        <div id="top-right">
        	THÔNG TIN HỌC VIÊN
        </div>
        <div id="content-right">
            <div id="content">
                <div id="dshs">
                    <div id="infohs">
						<div id="STT">STT</div>
						<div id="Name">Name</div>
						<div id="Code">Code</div>
						<div id="check">More-info</div>
					</div>
					<?php
					$idclass= $_REQUEST['class'];
					$p->infodiemdanh_tthv('select * from hv where ID_Lop= '.$idclass.'');
					?>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>