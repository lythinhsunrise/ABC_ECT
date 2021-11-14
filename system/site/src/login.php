<?php
class index
{
    function connect()
    {
        $con=mysqli_connect('localhost','username','password','abc_en');
        if(!$con){                
            echo 'Khong ket noi duoc csdl.';
            exit();
        }
        else            {
            mysqli_select_db($con,"utf8");
            return $con;
        }
    }
    function sdtpass($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $sdt=$row['SDT'];
                $pass=$row['password'];
                $quyen=$row['act'];
                $_SESSION['quyen']=$quyen;
                $_SESSION['sdt']=$sdt;
                $_SESSION['pass']=$pass;

                //id_user
                $id=$row['id'];
                $_SESSION['id']=$id;
            }
        }
    }
    
}
?>
