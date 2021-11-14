<?php
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] == 0 || $_SESSION['quyen'] == 1)
	{
		echo $_SESSION['id'];
	}
    else{
        header('location:../../../index.php');
    }
}
else
{
	header('location:../../../index.php');
}
?>
<!DOCTYPE html>
<?php
	include('../../src/csdldiendan.php');
	$p=new csdl();
	$p->connect();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/diendan.css" rel="stylesheet" type="text/css">
    <title>DienDan</title>
</head>
<body>
    <div class="container">
            <div class="top">
                    <div class="top-left">
                        <h1><a href="diendan.php"><span>Diễn Đàn</span> Trung Tâm Anh Ngữ ABC</a></h1>
                    </div>
                    <div class="top-right">
                            <div class="img_user">
                                <img src="../../pic/user.png" alt="Girl in a jacket" width="50" height="50">
                            </div>
                            <div class="info_user">
                                <h3><?php
                                //Update 
                                $sdt=$_SESSION['sdt'];
                                if($_SESSION['quyen']==0)echo $p->laycot("select Name from ql where ql.SDT=$sdt");
                                if($_SESSION['quyen']==1)echo $p->laycot("select Name from nv where nv.SDT=$sdt");
                                $nameuser=$p->laycot("select Name from ql where ql.SDT=$sdt");
                                ?></h3>
                                <?php
                                $sdt=$_SESSION['sdt'];
                                if($_SESSION['quyen']==0)
                                {
                                    echo "<a href='../../QL/index.php'>Quay lại</a>";
                                }
                                if($_SESSION['quyen']==1)
                                {
                                    echo "<a href='../../NV/index.php'>Quay lại</a>";
                                }
                                ?>
                                <a href="../../../index.php">Log out</a>
                            </div>
                    </div>
            </div>

            <!-- <div class="dvsearch">
                <a href="diendan.php">Home</a>
                <div class="dvsearch1">
                    <input type="text">
                    <button>Search</button>
                </div>
            </div> -->

            <div class="main">

                    <div class="main-left">
                        <div class="main-left-top">
                            <form class="form-group purple-border" method="post" action="diendan.php" class="formdbv">
                                <h3>Tạo một đề tài thảo luận</h3>
                                <textarea class="form-control" id="txttieude" name="txttieude" rows="3" cols="28" placeholder="Tiêu đề bài viết.." maxlength="100"></textarea>
                                <textarea class="form-control" id="txtnoidung" name="txtnoidung" rows="15" cols="28" placeholder="Nội dung..."></textarea>
                                <input type="submit" name="nut" id='submit' value="Đăng bài viết">
                                <?php
                                    switch($_POST['nut'] ?? "")
                                    {
                                        case 'Đăng bài viết':
                                            {
                                                $id_bai=null;
                                                $id_user=$_SESSION['sdt'];
                                                $noidung=$_REQUEST['txtnoidung'];
                                                $tieude=$_REQUEST['txttieude'];
                                                if($p->nhapbaiviet("insert into baiviet(id_bai,id_user,noidung,tieude,name)
                                                                    values ('$id_bai','$id_user','$noidung','$tieude','$nameuser')")==1)
                                                    {
                                                        echo'Đã Đăng!';
                                                    }
                                                else
                                                    {
                                                        echo'Lỗi !!';
                                                    }
                                            }
                                    }
                                ?>
                            </form>
                        
                        </div>

                        <div class="main-left-bottom">
                            <h3>Thông báo</h3>
                            <p>-Truy cập diễn đàn thành công</p>
                        </div>
                    </div>

                    <div class="main-right">
                        <h1>Bài Viết</h1>
                        <?php
                            $p->xuatbaiviet("select * from baiviet order by id_bai desc");
                        ?>
                    </div>
            </div>
    </div>
</body>
</html>