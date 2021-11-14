<?php
session_start();
if(isset($_SESSION['quyen']))
{
	if($_SESSION['quyen'] == 0 || $_SESSION['quyen'] == 1)
	{
		
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
<?php
$layid=$_GET['id_baiviet'];
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
                            <form method="post" action="diendan.php" class="formdbv">
                                <h3>Tạo một đề tài thảo luận</h3>
                                <textarea id="txttieude" name="txttieude" rows="3" cols="30" placeholder="Tiêu đề bài viết.." maxlength="100"></textarea>
                                <textarea id="txtnoidung" name="txtnoidung" rows="15" cols="30" placeholder="Nội dung..."></textarea>
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
                            $p->xuatbaivietfull("select * from baiviet where id_bai='$layid'");
                        ?>
                        <!-- <div class="baiviet">
                            
                            <div class="top-bv">
                                <div class="top-bv-left">
                                    <img src="../pic/user.png" alt="Girl in a jacket" width="50" height="50" style="float:left;">
                                    <h3 style="margin-top:-1px; width= 50%;"><a href="#">Chia động từ<a></h3>
                                    <a href="#">Nguời dùng khác<a>
                                </div>
                                <div class="top-bv-right">
                                    <a href="#">Bình luận</a>
                                </div>
                            </div>
                            
                            <div class="bottom-bv">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ac enim suscipit, porttitor odio sed, pharetra magna. Aliquam mi leo, convallis ac porta id, molestie non turpis. Maecenas tincidunt bibendum ligula in accumsan. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi imperdiet, ipsum a lacinia vestibulum, eros sapien eleifend eros, nec accumsan dui mauris luctus leo. Suspendisse a nibh et purus posuere vehicula. Phasellus tempor iaculis nisl. Vivamus in molestie diam. Nulla eu nisi in mauris molestie ultrices. Etiam imperdiet tempus turpis. Integer ac risus vel tortor fringilla gravida. Fusce sit amet aliquam ante, vel ornare urna. Sed et tristique leo, id placerat enim. Vestibulum eleifend convallis metus, ac dignissim nibh dictum non. Sed lacus neque, rutrum a ipsum at, tempus tincidunt elit. Phasellus neque neque, accumsan placerat augue vel, elementum tempus sem.</p>
                            </div>
                        </div> -->
                        <h3>Bình luận</h3>
                        <?php
                            $p->xuatbinhluan("select * from baiviet inner join binhluan on baiviet.id_bai=binhluan.id_bai where baiviet.id_bai='$layid'");
                        ?>
                        <!-- <div class="binhluan">
                            <div class="user_bl">
                                <img src="../pic/user.png" alt="Girl in a jacket" width="50" height="50" style="float:left;">
                                <a href="#" >Nguời dùng khác 1<a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div> -->
                        <div class="binhluan">
                            <div class="user_bl">
                                <img src="../../pic/user.png" alt="Girl in a jacket" width="50" height="50" style="float:left;">
                                <a href="#" >Bạn<a>
                            </div>
                            <form method="post" action="baiviet.php?id_baiviet=<?php echo $layid;?>">
                                <textarea id="txtbl" name="txtbl" rows="3" cols="40" placeholder="Nội dung.."></textarea>
                                <input type="submit" name="nut" id='submit' value="Bình luận">
                                <?php
                                switch($_POST['nut'] ?? "")
                                {
                                    case 'Bình luận':
                                    {
                                        $id_bl=null;
                                        $id_bai=$layid;
                                        $id_user_bl=$_SESSION['sdt'];
                                        $noidung_bl=$_REQUEST['txtbl'];
                                        if($p->nhapbaiviet("insert into binhluan(id_bl,id_bai,id_user_bl,noidung_bl,name)
                                                            values ('$id_bl','$id_bai','$id_user_bl','$noidung_bl','$nameuser')")==1)
                                                    {
                                                        echo'Up!';
                                                        echo("<meta http-equiv='refresh' content='0.1'>");
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
                    </div>
            </div>
    </div>
</body>
</html>