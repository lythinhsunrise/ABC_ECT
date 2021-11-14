<?php
include('../src/infomation.php');
$p = new info();
$p-> connect();
include('../src/csdlnhanvien.php');
$o = new csdl();
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] != 1)
	{
		header('location:../../index.php');
	}
}
else
{
	header('location:../../index.php');
}
$layid=$_GET['idlop'];
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
								$p->pic("select * from nv where SDT =$sdt");
						?>
						" alt="" style="width: 80%;margin-top:20px;border-radius:50px">
					</div>
					<div class="content-infor">
                    <?php
								$p->infomation("select * from nv where SDT =$sdt");
						?>
					</div>
		        </div>
                <div id="bottom-left">
				<div class="action">
                    <a href="../NV/NV_index.php"><button class="buttom"> Tạo Tài Khoản </button></a>
					<a href="../NV/NV_suataikhoan.php"><button class="buttom"> Sửa Tài Khoản </button></a>
                    <a href="../NV/NV_molop.php"><button class="buttom"> Mở lớp mới </button></a>
                    <a href="../NV/NV_donglop.php"><button class="buttom"> Đóng lớp </button></a>
					<a href="#BKT"><button class="buttom"> Diễn đàn </button></a>
                </div>
			</div>
        </div>
        <div id="right">
        <div id="top-right">
        	name action
        </div>
			<div id="content-right">
				<div id="content">
                    <div id="infclass">
                        <table id="infclass">
							<tr>
                                <td>Mã lớp học</td>
                                <td><?php echo $layid; ?></td>
                            </tr>
                            <tr>
                                <td>Ngày bắt đầu</td>
                                <td><?php echo $o->laycot("select ngaybatdau from class where ID_lop=$layid")?></td>
                            </tr>
							<tr>
                                <td>Ngày kết thúc</td>
                                <td>
                                    <?php $timeaa = $o->laycot("select DATE_ADD(ngaybatdau, INTERVAL 3 MONTH) from class where ID_lop=$layid");
                                       echo ($timeaa);
                                    ?>
                                </td>
                            </tr>
							<tr>
                                <td>Thời lượng học tập</td>
                                <td><?php echo $o->laycot("select sobuoihoc from class where ID_lop=$layid")?> buổi</td>
                            </tr>

							<tr>
                                <td>Số tiết đã học</td>
                                <td>0</td>
                            </tr>
							<tr>
                                <td>Số tiết đã nghỉ</td>
                                <td>0</td>
                            </tr>
							<tr>
                                <td>Giảng viên</td>
                                <td><?php $sdt=$o->laycot("select SDT_gv from class where ID_lop=$layid");
                                        echo $o->laycot("select Name from gv where SDT=$sdt");
                                ?></td>
                            </tr>
							<tr>
                                <td>Số Lượng học viên</td>
                                <td><?php echo $o->laycot("select SL_hocvien from class where ID_lop=$layid")?></td>
                            </tr>
                        </table>
						<center><button><a href="xoa.php?idlop=<?php echo $layid; ?>">đóng lớp</a></button></center>
                    </div>
				</div>
			</div>
        </div>
    </body>
</html>