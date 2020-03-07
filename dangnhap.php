<?php
    require_once("connet.php");
    if(isset($_POST['submit']))
    {
        if(empty($_POST['username']) or empty($_POST['password']))
        {
             $error = "Chưa Nhập Tài Khoản và Mật Khẩu !!";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql ="SELECT * from taikhoan where user_name = '$username' and password = '$password'";
            $query = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($query);
            if($num == 0)
            {
                $error = "Tài Khoản và Mật Khẩu không chính xác !!";
            }else
            {
                $_SESSION['username'] = $username;
                header("location:index.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/DangNhap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    	<div id="wrap">
        <header>
            <div class="container">
                <h3>QUẢN LÝ PHÒNG KHÁM</h3>
            </div>
        </header>
        <main>
            <div class="container">
            <div class="login-form">
                <form action="" method="post">
                    <h1>Đăng nhập vào website</h1>
                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Nhập username" name="username">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="password" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="btn-box">
                        <input type="submit" name="submit" value="Đăng Nhập" style="width: 80px;height: 40px; border-radius: 10px;background-color: rgb(128,128,128,0.2);cursor: pointer;" >
                    </div>
                </form>
            </div>
            </div>
               <?php
                    if(isset($error))
                    {
                        echo '<p style="color:red;margin-left:320px;">'.$error.'<p>';
                    }
                ?>
        </main>
        <footer>
            <div class="container">
             
            	@copyright
            </div>
        </footer>
    </div>
    </body>
</html>