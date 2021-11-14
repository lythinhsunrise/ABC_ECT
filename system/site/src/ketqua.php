<?php
class ketqua
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
    function ketqua_lis($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $ketqua_hv = $row['ketqua'];
                $ketqua_de = $row['answer'];
                $name_class=$row['Name_class'];
                $date = $row['ngaykiemtra'];
                $split_ketqua_hv=explode('/', $ketqua_hv, 10);
                $split_ketqua_de=explode('/', $ketqua_de, 10);
                $a = 0;
                for($i=0;$i<=9;$i++)
                {
                    if($split_ketqua_hv[$i]==$split_ketqua_de[$i])
                    {
                        $a++;
                    }
                }
                echo'
                <div id="kq">
					<div id="info-kq">
						<div id="more">Lớp : '.$name_class.'</div>
						<div id="more">Loại bài Thi : Listening</div>
						<div id="more">Kết quả : '.$a.' đ</div>
					</div>
					<div id="date">Ngày thi : '.$date.'</div>
				</div>
                '; 
            }
        }
    }
    function ketqua_read($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $ketqua_hv = $row['ketqua'];
                $ketqua_de = $row['answer'];
                $name_class=$row['Name_class'];
                $date = $row['ngaykiemtra'];
                $split_ketqua_hv=explode('/', $ketqua_hv, 10);
                $split_ketqua_de=explode('/', $ketqua_de, 10);
                $a = 0;
                for($i=0;$i<=9;$i++)
                {
                    if($split_ketqua_hv[$i]==$split_ketqua_de[$i])
                    {
                        $a++;
                    }
                }
                echo'
                <div id="kq">
					<div id="info-kq">
						<div id="more">Lớp : '.$name_class.'</div>
						<div id="more">Loại bài Thi : Reading</div>
						<div id="more">Kết quả : '.$a.' đ</div>
					</div>
					<div id="date">Ngày thi : '.$date.'</div>
				</div>
                '; 
            }
        }
    }
}
?>