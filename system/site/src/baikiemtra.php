<?php
class kiemtra
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
    function add($sql)
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

    function test_listen($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $name_class = $row['Name_class'];
                $id_listen = $row['ID_listen'];
                $_SESSION['id_listen']=$id_listen;
                $cau1=$row['1'];
                $datacau1=explode('/', $cau1, 6);
                $cau2=$row['2'];
                $datacau2=explode('/', $cau2, 6);
                $cau3=$row['3'];
                $datacau3=explode('/', $cau3, 6);
                $cau4=$row['4'];
                $datacau4=explode('/', $cau4, 6);
                $cau5=$row['5'];
                $datacau5=explode('/', $cau5, 6);
                $cau6=$row['6'];
                $datacau6=explode('/', $cau6, 6);
                $cau7=$row['7'];
                $datacau7=explode('/', $cau7, 6);
                $cau8=$row['8'];
                $datacau8=explode('/', $cau8, 6);
                $cau9=$row['9'];
                $datacau9=explode('/', $cau9, 6);
                $cau10=$row['10'];
                $datacau10=explode('/', $cau10, 6);
                print_r('
                <form id="listen">
                    <p>class : '.$name_class.'</p>
                    <div id="test">
                        <div id="question">1.'.$datacau1[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer1" value="A">
                            <label>A. '.$datacau1[1].'</label><br>
                            <input type="radio" name="answer1" value="B">
                            <label>B. '.$datacau1[2].'</label><br>
                            <input type="radio" name="answer1" value="C">
                            <label>C. '.$datacau1[3].'</label><br>
                            <input type="radio" name="answer1" value="D">
                            <label>D. '.$datacau1[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau1[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">2.'.$datacau2[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer2" value="A">
                            <label>A. '.$datacau2[1].'</label><br>
                            <input type="radio" name="answer2" value="B">
                            <label>B. '.$datacau2[2].'</label><br>
                            <input type="radio" name="answer2" value="C">
                            <label>C. '.$datacau2[3].'</label><br>
                            <input type="radio" name="answer2" value="D">
                            <label>D. '.$datacau2[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau2[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">3.'.$datacau3[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer3" value="A">
                            <label>A. '.$datacau3[1].'</label><br>
                            <input type="radio" name="answer3" value="B">
                            <label>B. '.$datacau3[2].'</label><br>
                            <input type="radio" name="answer3" value="C">
                            <label>C. '.$datacau3[3].'</label><br>
                            <input type="radio" name="answer3" value="D">
                            <label>D. '.$datacau3[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau3[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">4.'.$datacau4[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer4" value="A">
                            <label>A. '.$datacau4[1].'</label><br>
                            <input type="radio" name="answer4" value="B">
                            <label>B. '.$datacau4[2].'</label><br>
                            <input type="radio" name="answer4" value="C">
                            <label>C. '.$datacau4[3].'</label><br>
                            <input type="radio" name="answer4" value="D">
                            <label>D. '.$datacau4[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau4[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">5.'.$datacau5[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer5" value="A">
                            <label>A. '.$datacau5[1].'</label><br>
                            <input type="radio" name="answer5" value="B">
                            <label>B. '.$datacau5[2].'</label><br>
                            <input type="radio" name="answer5" value="C">
                            <label>C. '.$datacau5[3].'</label><br>
                            <input type="radio" name="answer5" value="D">
                            <label>D. '.$datacau5[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau5[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">6.'.$datacau6[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer6" value="A">
                            <label>A. '.$datacau6[1].'</label><br>
                            <input type="radio" name="answer6" value="B">
                            <label>B. '.$datacau6[2].'</label><br>
                            <input type="radio" name="answer6" value="C">
                            <label>C. '.$datacau6[3].'</label><br>
                            <input type="radio" name="answer6" value="D">
                            <label>D. '.$datacau6[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau6[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">7.'.$datacau7[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer7" value="A">
                            <label>A. '.$datacau7[1].'</label><br>
                            <input type="radio" name="answer7" value="B">
                            <label>B. '.$datacau7[2].'</label><br>
                            <input type="radio" name="answer7" value="C">
                            <label>C. '.$datacau7[3].'</label><br>
                            <input type="radio" name="answer7" value="D">
                            <label>D. '.$datacau7[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau7[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">8.'.$datacau8[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer8" value="A">
                            <label>A. '.$datacau8[1].'</label><br>
                            <input type="radio" name="answer8" value="B">
                            <label>B. '.$datacau8[2].'</label><br>
                            <input type="radio" name="answer8" value="C">
                            <label>C. '.$datacau8[3].'</label><br>
                            <input type="radio" name="answer8" value="D">
                            <label>D. '.$datacau8[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau8[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">9.'.$datacau9[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer9" value="A">
                            <label>A. '.$datacau9[1].'</label><br>
                            <input type="radio" name="answer9" value="B">
                            <label>B. '.$datacau9[2].'</label><br>
                            <input type="radio" name="answer9" value="C">
                            <label>C. '.$datacau9[3].'</label><br>
                            <input type="radio" name="answer9" value="D">
                            <label>D. '.$datacau9[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau9[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">10.'.$datacau10[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer10" value="A">
                            <label>A. '.$datacau10[1].'</label><br>
                            <input type="radio" name="answer10" value="B">
                            <label>B. '.$datacau10[2].'</label><br>
                            <input type="radio" name="answer10" value="C">
                            <label>C. '.$datacau10[3].'</label><br>
                            <input type="radio" name="answer10" value="D">
                            <label>D. '.$datacau10[4].'</label><br>
                            <audio controls>
                            <source src="../mp3/'.$datacau10[5].'" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                    <center><input type="submit" name="submit" value="Nộp Bài"></center>
                </form>
                ');

            }
        }
        else
        echo "Bạn chưa có bài kiểm tra nào";
    }
    function test_read($sql)
    {
        $link=$this->connect();
        $ketqua=mysqli_query($link,$sql);
        $i=mysqli_num_rows($ketqua);
        if($i>0)
        {
            while($row=mysqli_fetch_array($ketqua))
            {
                $name_class = $row['Name_class'];
                $id_read = $row['ID_read'];
                $_SESSION['id_read']=$id_read;
                $cau1=$row['1'];
                $datacau1=explode('/', $cau1, 5);
                $cau2=$row['2'];
                $datacau2=explode('/', $cau2, 5);
                $cau3=$row['3'];
                $datacau3=explode('/', $cau3, 5);
                $cau4=$row['4'];
                $datacau4=explode('/', $cau4, 5);
                $cau5=$row['5'];
                $datacau5=explode('/', $cau5, 5);
                $cau6=$row['6'];
                $datacau6=explode('/', $cau6, 5);
                $cau7=$row['7'];
                $datacau7=explode('/', $cau7, 5);
                $cau8=$row['8'];
                $datacau8=explode('/', $cau8, 5);
                $cau9=$row['9'];
                $datacau9=explode('/', $cau9, 5);
                $cau10=$row['10'];
                $datacau10=explode('/', $cau10, 5);
                print_r('
                <form id="listen">
                    <p>class : '.$name_class.'</p>
                    <div id="test">
                        <div id="question">1.'.$datacau1[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer1" value="A">
                            <label>A. '.$datacau1[1].'</label><br>
                            <input type="radio" name="answer1" value="B">
                            <label>B. '.$datacau1[2].'</label><br>
                            <input type="radio" name="answer1" value="C">
                            <label>C. '.$datacau1[3].'</label><br>
                            <input type="radio" name="answer1" value="D">
                            <label>D. '.$datacau1[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">2.'.$datacau2[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer2" value="A">
                            <label>A. '.$datacau2[1].'</label><br>
                            <input type="radio" name="answer2" value="B">
                            <label>B. '.$datacau2[2].'</label><br>
                            <input type="radio" name="answer2" value="C">
                            <label>C. '.$datacau2[3].'</label><br>
                            <input type="radio" name="answer2" value="D">
                            <label>D. '.$datacau2[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">3.'.$datacau3[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer3" value="A">
                            <label>A. '.$datacau3[1].'</label><br>
                            <input type="radio" name="answer3" value="B">
                            <label>B. '.$datacau3[2].'</label><br>
                            <input type="radio" name="answer3" value="C">
                            <label>C. '.$datacau3[3].'</label><br>
                            <input type="radio" name="answer3" value="D">
                            <label>D. '.$datacau3[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">4.'.$datacau4[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer4" value="A">
                            <label>A. '.$datacau4[1].'</label><br>
                            <input type="radio" name="answer4" value="B">
                            <label>B. '.$datacau4[2].'</label><br>
                            <input type="radio" name="answer4" value="C">
                            <label>C. '.$datacau4[3].'</label><br>
                            <input type="radio" name="answer4" value="D">
                            <label>D. '.$datacau4[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">5.'.$datacau5[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer5" value="A">
                            <label>A. '.$datacau5[1].'</label><br>
                            <input type="radio" name="answer5" value="B">
                            <label>B. '.$datacau5[2].'</label><br>
                            <input type="radio" name="answer5" value="C">
                            <label>C. '.$datacau5[3].'</label><br>
                            <input type="radio" name="answer5" value="D">
                            <label>D. '.$datacau5[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">6.'.$datacau6[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer6" value="A">
                            <label>A. '.$datacau6[1].'</label><br>
                            <input type="radio" name="answer6" value="B">
                            <label>B. '.$datacau6[2].'</label><br>
                            <input type="radio" name="answer6" value="C">
                            <label>C. '.$datacau6[3].'</label><br>
                            <input type="radio" name="answer6" value="D">
                            <label>D. '.$datacau6[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">7.'.$datacau7[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer7" value="A">
                            <label>A. '.$datacau7[1].'</label><br>
                            <input type="radio" name="answer7" value="B">
                            <label>B. '.$datacau7[2].'</label><br>
                            <input type="radio" name="answer7" value="C">
                            <label>C. '.$datacau7[3].'</label><br>
                            <input type="radio" name="answer7" value="D">
                            <label>D. '.$datacau7[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">8.'.$datacau8[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer8" value="A">
                            <label>A. '.$datacau8[1].'</label><br>
                            <input type="radio" name="answer8" value="B">
                            <label>B. '.$datacau8[2].'</label><br>
                            <input type="radio" name="answer8" value="C">
                            <label>C. '.$datacau8[3].'</label><br>
                            <input type="radio" name="answer8" value="D">
                            <label>D. '.$datacau8[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">9.'.$datacau9[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer9" value="A">
                            <label>A. '.$datacau9[1].'</label><br>
                            <input type="radio" name="answer9" value="B">
                            <label>B. '.$datacau9[2].'</label><br>
                            <input type="radio" name="answer9" value="C">
                            <label>C. '.$datacau9[3].'</label><br>
                            <input type="radio" name="answer9" value="D">
                            <label>D. '.$datacau9[4].'</label><br>
                        </div>
                    </div>
                    <div id="test">
                        <div id="question">10.'.$datacau10[0].'
                        </div>
                        <div id="anser">
                            <input type="radio" name="answer10" value="A">
                            <label>A. '.$datacau10[1].'</label><br>
                            <input type="radio" name="answer10" value="B">
                            <label>B. '.$datacau10[2].'</label><br>
                            <input type="radio" name="answer10" value="C">
                            <label>C. '.$datacau10[3].'</label><br>
                            <input type="radio" name="answer10" value="D">
                            <label>D. '.$datacau10[4].'</label><br>
                        </div>
                    </div>
                    <center><input type="submit" name="submit" value="Nộp Bài"></center>
                </form>
                ');
            }
        }
    }
}
?>
