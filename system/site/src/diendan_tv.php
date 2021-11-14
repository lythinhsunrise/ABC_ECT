<?php
class csdl
{
    function connect()
    {
        {
            $con=mysqli_connect('localhost','username','password','abc_en');
            if(!$con)
            {
                echo 'Khong ket noi duoc csdl.';
                exit();
            }
            else
            {
                mysqli_select_db($con,"utf8");
                return $con;
            }
        }
    }
    function xuatbaiviet($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id_bai=$row['id_bai'];
                $tieude=$row['tieude'];
                $content=$row['noidung'];
                $id_user=$row['name'];
                echo'<div class="baiviet">
                <div class="top-bv">
                    <div class="top-bv-left">
                        <img src="../../pic/user.png" alt="Girl in a jacket" width="50" height="50" style="float:left;">
                        <h3 style="margin-top:-1px; width= 50%;"><a href="baiviet.php?id_baiviet='.$id_bai.'">'.$tieude.'<a></h3>
                        <p>'.$id_user.'<p>
                    </div>
                    <div class="top-bv-right">
                        
                    </div>
                </div>
                
                <div class="bottom-bv">
                    <p class="content">'.$content.'</p>
                </div>
                </div>';
            }
        }
        else{
            echo 'Chưa có bài viết nào! Hãy tạo một một bài viết để mọi người cùng thảo luận.';
        }
    }
    //FUNCTION Thực thi sql (làm biếng đổi tên :)))
    function nhapbaiviet($sql)
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

    // dwd
    function xuatbaivietfull($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id_bai=$row['id_bai'];
                $tieude=$row['tieude'];
                $content=$row['noidung'];
                $id_user=$row['name'];
                echo'<div class="baiviet">
                <div class="top-bv">
                    <div class="top-bv-left">
                        <img src="../../pic/user.png" alt="Girl in a jacket" width="50" height="50" style="float:left;">
                        <h3 style="margin-top:-1px; width= 50%;"><a href="baiviet.php?id_baiviet='.$id_bai.'">'.$tieude.'<a></h3>
                        <p>'.$id_user.'<p>
                    </div>
                    <div class="top-bv-right">
                        
                    </div>
                </div>
                
                <div class="bottom-bv">
                    <p>'.$content.'</p>
                </div>
                </div>';
            }
        }
    }
    function xuatbinhluan($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $id_bl=$row['id_bl'];
                $id_bai=$row['id_bai'];
                $tieude=$row['tieude'];
                $content=$row['noidung'];
                $id_user=$row['name'];
                $noidung=$row['noidung_bl'];
                echo'
                <div class="binhluan">
                <div class="user_bl">
                    <div class="top-bv-left">
                        <img src="../../pic/user.png" alt="" width="50" height="50" style="float:left;">
                        <a href="#" >'.$id_user.'<a>
                    <p>'.$noidung.'</p>
                    </div>
                    <div class="top-bv-right">
                        
                    </div>
                </div>
                </div>
                ';
            }
        }
        else{
            echo 'Chưa có bình luận nào!';
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
}    
?>