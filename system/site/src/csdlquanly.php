<?php
class csdl
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
    function thucthisql($sql)
    {
        $link=$this->connect();
        if(mysqli_query($link, $sql))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    function timkiem($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $act=$row['act'];
                $name=$row['Name'];
                $sdt=$row['SDT'];
                if($act==2) $act1='Giảng viên';
                if($act==3) $act1='Học Viên';
                if($act==0) $act1='Quản lý';
                if($act==1) $act1='Nhân viên';
                echo'
                <form>
                <table id="taotk" >
                    <tr>
                        <td>
                            <p style="float:left">Quyền người dùng :</p>
                        </td>
                        <td>
                            <p style="float:right">'.$act1.'</p>
                        </td>
                    </tr>
        
                    <tr>
                        <td>
                            <p style="float:left">Họ và tên :</p>
                        </td>
                        <td>
                            <p style="float:right">'.$name.'</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p style="float:left">Code(SDT) :</p>
                        </td>
                        <td>
                            <p style="float:right">'.$sdt.'</p>
                        </td>
                    </tr>
                    
                </table>
                <center><button><a href="QL_capnhattaikhoan.php?id='.$sdt.'&&act='.$act.'">Change</a></button></center>
                </form>
                ';
            }
        }
    }
    function xuatdstaikhoan($sql){
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $sdt=$row['SDT'];
                $name=$row['Name'];
                $act=$row['act'];
                if($act==2) $act1='Giảng viên';
                if($act==3) $act1='Học Viên';
                if($act==0) $act1='Quản lý';
                if($act==1) $act1='Nhân viên';
                echo'
                    <tr>
                    <td><a href="QL_capnhattaikhoan.php?id='.$sdt.'&&act='.$act.'">'.$sdt.'</a></td>
                    <td>'.$name.'</td>
                    <td>'.$act1.'</td>
                    <td><a href="xoa.php?act='.$act.'&&sdt='.$sdt.'">Xóa</a></td>
                    </tr>
                ';
            }
        }
    }
    function laycot($sql)
	{
		$link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
		$giatri='';
		if($i>0)
		{
			while($row=mysqli_fetch_array($ketqua))
			{
				$gt=$row[0];
				$giatri=$gt;
			}
			return $giatri;
		}
		else
		{
			return $giatri;
		}
	}
    function xuatcomboboxgv($sql)
	{
		$link = $this->connect();
		$ketqua = mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		if($i>0)
		{
			echo '<select name="sdt_gv" id="quyen" style="float:right;width:160px;">';
			while($row= mysqli_fetch_array($ketqua))
			{
				$sdt=$row['SDT'];
				$ten=$row['Name'];
				echo '<option value="'.$sdt.'">'.$ten.'</option>';
			}
        	echo '</select>';
		}
    }
    function xuatdslop($sql)
    {
        $link = $this->connect();
		$ketqua = mysqli_query($link,$sql);
		$i = mysqli_num_rows($ketqua);
		if($i>0)
		{
            while($row= mysqli_fetch_array($ketqua))
            {
                $name=$row['Name_class'];
                $sl=$row['SL_hocvien'];
                $ID=$row['ID_lop'];
                echo'
                <div id="lophoc">
							<div id="ifo">class : '.$name.'</div>
							<div id="ifo">SL : '.$sl.'</div>
							<div id="ifo">Mã lớp : '.$ID.'</div>
							<div id="ifo"><a href="../QL/QL_info-class.php?idlop='.$ID.'"><button>more-inf</button></a></div>
				</div>
                ';
            }
        }
    }
}
?>