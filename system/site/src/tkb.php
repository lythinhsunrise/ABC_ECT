<?php
class tkb
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
    function gettkbhv($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $tenlop=$row['Name_class'];
                $lophoc=$row['lophoc'];
                $lichhoc=$row['lichhoc'];
                $tengv=$row['Name'];
                $cahoc=$row['cahoc'];
                if($cahoc == 1)
                {
                    if($lichhoc == 1 )
                    {
                        echo'
                        <table id="tkb">
                        <tr id="tr">
                            <td style="width:85px;height:50px">Ca Học</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_1 (5h30-7h)</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_2 (7h30-9h)</td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                        </tr>
                    </table>
                        ';
                    }
                    else{
                        echo'
                        <table id="tkb">
                        <tr id="tr">
                            <td style="width:85px;height:50px">Ca Học</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_1 (5h30-7h)</td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'v</td>
                            <td id="td"></td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_2 (7h30-9h)</td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                        </tr>
                    </table>
                        ';
                    }
                }
                else{
                    if($lichhoc == 1 )
                    {
                        echo'
                        <table id="tkb">
                        <tr id="tr">
                            <td style="width:85px;height:50px">Ca Học</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_1 (5h30-7h)</td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_2 (7h30-9h)</td>
                            <td id="td">trống</td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td">Wednesday</td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td">Friday</td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                        </tr>
                    </table>
                        ';
                    }
                    else{
                        echo'
                        <table id="tkb">
                        <tr id="tr">
                            <td style="width:85px;height:50px">Ca Học</td>
                            <td>Monday</td>
                            <td>Tuesday</td>
                            <td>Wednesday</td>
                            <td>Thursday</td>
                            <td>Friday</td>
                            <td>Saturday</td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_1 (5h30-7h)</td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                            <td id="td"></td>
                        </tr>
                        <tr id="tr">
                            <td id="td" style="width:85px">Ca_2 (7h30-9h)</td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'</td>
                            <td id="td"></td>
                            <td id="td">'.$tenlop.'<br>'.$lophoc.'<br>'.$tengv.'v</td>
                            <td id="td"></td>
                        </tr>
                    </table>
                        ';
                    }
                }
            }
        }
    }
}
?>