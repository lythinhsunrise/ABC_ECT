<!DOCTYPE html>
<?php
	include('../src/csdldiendan.php');
	$p=new csdl();
	$p->connect();
?>
<?php
$laysdt=$_GET['sdt'];
$layact=$_GET['act'];
$layidlop=$_GET['idlop'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // echo $layact .'|'. $laysdt;
        if($layact==2)
        {
            if($p->nhapbaiviet("DELETE FROM gv WHERE gv.sdt = $laysdt")==1)
            {
                header('location: QL_suataikhoan.php');
                exit();
            }
            else
            {
                echo 'Ops! ERROR 000.' ;
            }
        }
        elseif($layact==3)
        {
            if($p->nhapbaiviet("DELETE FROM hv WHERE hv.sdt = $laysdt")==1)
            {
                header('location: QL_suataikhoan.php');
                exit();
            }
            else
            {
                echo 'Ops! ERROR 000.' ;
            }
        }
        elseif($layact==1)
        {
            if($p->nhapbaiviet("DELETE FROM nv WHERE nv.sdt = $laysdt")==1)
            {
                header('location: QL_suataikhoan.php');
                exit();
            }
            else
            {
                echo 'Ops! ERROR 000.' ;
            }
        }
        elseif($layact==0)
        {
            if($p->nhapbaiviet("DELETE FROM ql WHERE ql.sdt = $laysdt")==1)
            {
                header('location: QL_suataikhoan.php');
                exit();
            }
            else
            {
                echo 'Ops! ERROR 000.' ;
            }
        }

        if($layidlop!=null)
        {
            if($p->nhapbaiviet("DELETE FROM class WHERE class.ID_lop = $layidlop")==1)
            {
                header('location: QL_donglop.php');
                exit();
            }
            else
            {
                echo 'Ops! ERROR 000.' ;
            }
        }
    ?>
</body>
</html>