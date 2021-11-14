<?php
include('../src/infomation.php');
include('../src/lophoc.php');
$lop= new lophoc();
$lop->connect();
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
        <link href="../css/dsl.css" rel="stylesheet" type="text/css">
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
        	<center>DANH SÁCH LỚP</center>
        </div>
        <div id="content-right">
            <div id="content">
                    <div id="class" style="border:none">
                        <div id="content-class">
                            <div id="infor-class">Lịch Học</div>
                            <div id="infor-class">Tên lớp</div>
                            <div id="infor-class">Mã Lớp</div>
                            <div id="infor-class">Ca Học</div>
                            <div id="infor-class">Lớp -Zoom</div>
                            <div id="infor-class">SL-học Viên</div>
                        </div>
                    </div>
                    <?php
						$lop->lophoc_gv("select * from class where SDT_gv =$sdt");
					?>

            </div>
        </div>
        </div>
    </body>
</html>