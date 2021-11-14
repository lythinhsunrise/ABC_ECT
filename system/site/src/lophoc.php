<?php
class lophoc
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
    function lophoc_gv($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $ID_lop=$row['ID_lop'];
                $Name_class=$row['Name_class'];
                $cahoc=$row['cahoc'];
                $lophoc=$row['lophoc'];
                $lichoc=$row['lichhoc'];
                $SL_hocvien=$row['SL_hocvien'];
                if($lichoc == 1)
                {
                    $lichoc = "3-5-7";
                }
                else {
                    $lichoc = "2-4-6";
                }
                echo'
                <div id="class">
                        <div id="content-class">
                            <div id="infor-class">'.$lichoc.'</div>
                            <div id="infor-class">'.$Name_class.'</div>
                            <div id="infor-class">'.$ID_lop.'</div>
                            <div id="infor-class">'.$cahoc.'</div>
                            <div id="infor-class">'.$lophoc.'</div>
                            <div id="infor-class">'.$SL_hocvien.'</div>
                        </div>
                        <div id="buttom-class">
                            <a href="../GV/GV_dshv_diemdanh.php?class='.$ID_lop.'" style="width: 15%;"><button style="width: 45%;">Điểm danh</button></a>
                            <a href="../GV/GV_dshv_tthv.php?class='.$ID_lop.'" style="width: 15%;"><button style="width: 45%;">DS.lớp</button></a>
                        </div>
                    </div>
                ';
            }
        }
    }
    function select_lop($sql)
        {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $idlop=$row['ID_lop'];
                $name_class=$row['Name_class'];
                echo'
                    <option value="'.$idlop.'">'.$name_class.'</option>

                ';
            }
        }
        }
    
}
?>
