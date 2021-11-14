<?php
class info
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
    function infomation($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $sdt=$row['SDT'];
                $name=$row['Name'];
                $Gender=$row['Gender'];
                $birthday=$row['Dateofbirth'];
                $avata=$row['Avata'];
                if($Gender == 0){
                    $Gender = "female";
                }
                else{
                    $Gender = "male";
                }
                echo'
                    <table style="font-size:19px">
                                <tr>
                                    <td>Name</td>
                                    <td>: '.$name.'</td>
                                </tr>
                                <tr>
                                    <td>SDT</td>
                                    <td>: 0'.$sdt.'</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>: '.$Gender.'</td>
                                </tr>
                                <tr>
                                    <td>D.o.B</td>
                                    <td>: '.$birthday.'</td>
                                </tr>
                        </table>
                ';
            }
        }
    }
    function pic($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $avata=$row['Avata'];
                echo $avata;
            }
        }
    }
    function infoview($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $sdt=$row['SDT'];
                $name=$row['Name'];
                $Gender=$row['Gender'];
                $birthday=$row['Dateofbirth'];
                if($Gender == 0){
                    $Gender = "female";
                }
                else{
                    $Gender = "male";
                }
                $mail=$row['Email'];
                $address=$row['Address'];
                $parent=$row['Name_parent'];
                $idlop=$row['ID_Lop'];
                echo'
                <table id="tt">
                <tr>
                    <td id="thuoctinh">Name :</td>
                    <td id="noidungtt">'.$name.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Phone Number :</td>
                    <td id="noidungtt">0'.$sdt.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Gender :</td>
                    <td id="noidungtt">'.$Gender.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Date of birth :</td>
                    <td id="noidungtt">'.$birthday.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Mail :</td>
                    <td id="noidungtt">'.$mail.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Address :</td>
                    <td id="noidungtt">'.$address.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Parents :</td>
                    <td id="noidungtt">'.$parent.'</td>
                </tr>
                <tr>
                    <td id="thuoctinh">Code of class :</td>
                    <td id="noidungtt">'.$idlop.'</td>
                </tr>
            </table>';
            }
        }
    }
    function infochange($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $sdt=$row['SDT'];
                $name=$row['Name'];
                $Gender=$row['Gender'];
                $birthday=$row['Dateofbirth'];
                
                $mail=$row['Email'];
                $address=$row['Address'];
                $parent=$row['Name_parent'];
                $idlop=$row['ID_Lop'];
                echo'
                <table id="tt" style="width: 60%;">
							<tr>
								<td id="thuoctinh">Name :</td>
								<td id="noidungtt"><input type="text" placeholder="'.$name.'" name ="name"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Phone Number :</td>
								<td id="noidungtt"><input type="phone" placeholder="0'.$sdt.'" name ="phone"></td>
							</tr>
                            <tr>
								<td id="thuoctinh">Gender :</td>
								<td id="noidungtt">
                            ';
                if($Gender == 0){
                    $Gender = "female";
                    echo $Gender;
                }
                else{
                    $Gender = "male";
                    echo $Gender;
                }    
				echo'		     
							<tr>
								<td id="thuoctinh">Date of birth :</td>
                                <td id="noidungtt">'.$birthday.'</td>
							</tr>
							<tr>
								<td id="thuoctinh">Mail :</td>
								<td id="noidungtt"><input type="mail" placeholder="'.$mail.'" size="40" name="mail"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Address :</td>
								<td id="noidungtt"><input  type="text" placeholder="'.$address.'" size="60" name="address"></td>
							</tr>
							<tr>
								<td id="thuoctinh">Parents :</td>
								<td id="noidungtt">'.$parent.'</td>
							</tr>
							<tr>
								<td id="thuoctinh">ID of class :</td>
								<td id="noidungtt">'.$idlop.'</td>
							</tr>
						</table>';
            }
        }
    }
    function infodiemdanh($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $a = 1;
                $sdt=$row['SDT'];
                $name=$row['Name'];
                echo'
                <div id="infohs">
                <div id="STT">'.$a.'</div>
                <div id="Name">'.$name.'</div>
                <div id="Code">0'.$sdt.'</div>
                <div id="check">
                    <input type="checkbox" style="height:50px" >
                </div>
                </div>
                ';
                $a++;
            }
        }
    }
    function infodiemdanh_tthv($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $a = 1;
                $idlop=$row['ID_Lop'];
                $sdt=$row['SDT'];
                $name=$row['Name'];
                echo'
                <div id="infohs">
						<div id="STT">'.$a.'</div>
						<div id="Name">'.$name.'</div>
						<div id="Code">0'.$sdt.'</div>
						<div id="check">
							<a href="../GV/GV_dshv_tthv_view.php?sdt='.$sdt.'"><button>View</button></a>
						</div>
					</div>
                ';
                $a++;
            }
        }
    }
}
?>
