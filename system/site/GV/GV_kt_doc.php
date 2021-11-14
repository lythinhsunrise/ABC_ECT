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
        <link href="../css/test.css" rel="stylesheet" type="text/css">
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
        	BÀI KIỂM TRA
        </div>
        <div id="content-right">
            <div id="content">
                <form id="listen">
                    <label for="class">Chọn lớp học</label>
                    <select name="class" id="class">
                    <?php
                    include('../src/lophoc.php');
                    $lh= new lophoc();
                    $lh->connect();
                    $lh->select_lop("select * from class where SDT_gv='$sdt'");
                    ?>
                    </select>
                    <?php
                        for($i=1;$i<=10;$i++)
                        {
                            echo'<div id="test">
                            <div id="question">'.$i.'
                            <input type="text" style="width: 300px;" name="q'.$i.'">
                            </div>
                            <div id="anser">
                                <input type="radio" name="answer'.$i.'" value="A">
                                <label>A<input type="text" name="'.$i.'A"></label><br>
                                <input type="radio" name="answer'.$i.'" value="B">
                                <label>B<input type="text" name="'.$i.'B"></label><br>
                                <input type="radio" name="answer'.$i.'" value="C">
                                <label>C<input type="text" name="'.$i.'C"></label><br>
                                <input type="radio" name="answer'.$i.'" value="D">
                                <label>D<input type="text" name="'.$i.'D"></label><br>
                            </div>
                        </div>';
                        }
                    ?>
                    <center><input type="submit" name="submit" value="CREATE"></center>
                </form>
                
                <?php
                if (isset($_REQUEST['submit']))
                {
                    switch($_REQUEST['submit'])
                    {
                        case "CREATE":
                            $tl='';
                            for($i=1;$i<=10;$i++)
                            {
                                if(isset($_REQUEST['answer'.$i.'']))
                                {
                                $tl = $tl.$_REQUEST['answer'.$i.''].'/';
                                }
                                else $tl = $tl.'0/';;
                            }
                            $answer = rtrim($tl, '/');
                            $idclass=$_GET['class'];
                            $id_read=$idclass.'2';
                            for($i=1;$i<=10;$i++)
                            {
                                $cau[$i]='';
                            }
                            
                            for($i=1;$i<=10;$i++)
                            {
                                if(isset($_REQUEST['q'.$i.'']))
                                {
                                    $cau[$i] .= $_REQUEST['q'.$i.''].'/';
                                }
                                else{
                                    $cau[$i] .= '0/';
                                }
                                if(isset($_REQUEST[''.$i.'A']))
                                {
                                    $cau[$i] .= $_REQUEST[''.$i.'A'].'/';
                                }
                                else{
                                    $cau[$i] .= '0/';
                                }
                                if(isset($_REQUEST[''.$i.'B']))
                                {
                                    $cau[$i] .= $_REQUEST[''.$i.'B'].'/';
                                }
                                else{
                                    $cau[$i] .= '0/';
                                }
                                if(isset($_REQUEST[''.$i.'C']))
                                {
                                    $cau[$i] .= $_REQUEST[''.$i.'C'].'/';
                                }
                                else{
                                    $cau[$i] .= '0/';
                                }
                                if(isset($_REQUEST[''.$i.'D']))
                                {
                                    $cau[$i] .= $_REQUEST[''.$i.'D'].'/';
                                }
                                else{
                                    $cau[$i] .= '0/';
                                }
                                $cau[$i]= rtrim($cau[$i],"/");
                            }
                            include('../src/baikiemtra.php');
                            $bkt = new kiemtra();
                            $bkt -> connect();
                            if($bkt ->add("INSERT INTO `reading` (`ID_read`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `answer`) VALUES($id_read, '$cau[1]', '$cau[2]','$cau[3]','$cau[4]','$cau[5]', '$cau[6]', '$cau[7]','$cau[8]','$cau[9]','$cau[10]','$answer');
                            ")==1)
                            {
                                echo '<script> alert("Tạo bài kiêm tra thành công")</script>';
                            }
                            else{
                                echo "<script>alert('bài kiểm tra đã được tạo trước đó !')</script>";
                            }


                        }
                }
                ?>
            </div>
        </div>
        </div>
    </body>
</html>