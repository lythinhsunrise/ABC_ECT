<?php
	include('./site/src/login.php');
	$p=new index();
	$p->connect();
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./site/css/form.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form>
            <h1 class="a11y-hidden">Login Form</h1>
            <div>
                <label class="label-email">
                <input type="number" class="text" name="phone" placeholder="Phone_number" tabindex="1" required />
                <span class="required">Phone</span>
                </label>
            </div>
            <input type="checkbox" name="show-password" class="show-password a11y-hidden" id="show-password" tabindex="3" />
            <label class="label-show-password" for="show-password">
                <span>Show Password</span>
            </label>
            <div>
                <label class="label-password">
                <input type="text" class="text" name="password" placeholder="Password" tabindex="2" required />
                <span class="required">Password</span>
                </label>
            </div>
            <input type="submit" value="login" name="submit"/>
            <div class="email">
                <a href="#">Forgot password?</a>
            </div>
            <figure aria-hidden="true">
                <div class="person-body"></div>
                <div class="neck skin"></div>
                <div class="head skin">
                <div class="eyes"></div>
                <div class="mouth"></div>
                </div>
                <div class="hair"></div>
                <div class="ears"></div>
                <div class="shirt-1"></div>
                <div class="shirt-2"></div>
            </figure>
        </form>
        <?php
            switch(isset($_REQUEST['submit']))
            {
                case 'login':
                    {
                        $user=ltrim($_REQUEST['phone'],0);
                        $pass=$_REQUEST['password'];
                        if(strlen($user)==9)
                        {
                            // học viên 
                            $p->sdtpass("select * FROM hv where sdt ='$user' "); 
                            if(isset($_SESSION['pass']))
                            {
                                if($pass == $_SESSION['pass'] && $_SESSION['quyen'] == 3)
                                {
                                    header('location:./site/HV/HV_index.php');
                                }
                                else
                                {
                                    $p->sdtpass("select * FROM gv where sdt ='$user' ");
                                    if(isset($_SESSION['pass']))
                                    {
                                        if($pass == $_SESSION['pass'] && $_SESSION['quyen'] == 2)
                                        {
                                            header('location:./site/GV/GV_index.php');
                                        }
                                        else
                                        {
                                            $p->sdtpass("select * FROM nv where sdt ='$user' ");
                                            if(isset($_SESSION['pass']))
                                            {
                                                if($pass == $_SESSION['pass'] && $_SESSION['quyen'] == 1)
                                                {
                                                    header('location:./site/NV/NV_index.php');
                                                }
                                                else
                                                {
                                                    $p->sdtpass("select * FROM ql where sdt ='$user' ");
                                                    if(isset($_SESSION['pass']))
                                                    {
                                                        if($pass == $_SESSION['pass'] && $_SESSION['quyen'] == 0)
                                                        {
                                                            header('location:./site/QL/QL_index.php');
                                                        }
                                                        else
                                                        {
                                                            header('location:index.php');
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            else
                            {
                                header('location:index.php');
                            }
                        }
                    }
            }
	    ?>
    </body>
</html>