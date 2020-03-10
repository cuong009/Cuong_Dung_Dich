<!DOCTYPE html>
<html>
    <head>
        <title>Thêm Bệnh Nhân</title>
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
                    <h1>Thêm Bệnh Nhân mới</h1>

                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Nhập Họ Tên" name="HoTen">
                    </div>
                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Nhập Số Điện Thoại" name="sdt">
                    </div>
                   
                    <div class="input-box">
                        <i ></i>
                        <input type="text" placeholder="Địa Chỉ" name="diachi">
                    </div>
                    <div style="padding-top: 15px;padding-bottom: 15px;">
                       Giớ Tính :
                        <input type="radio" name="gioitinh" checked>Nam
                        <input type="radio" name="gioitinh">Nữ<br/>
                    </div>
                	  <div class="input-box">
                        <i ></i>
                        Năm Sinh:
                        <select name="namsinh">
						<option value="volvo">1990</option>
						<option value="saab">1991</option>
						<option value="fiat">1992</option>
						<option valsue="audi">1993</option>
						<option value="volvo">1994</option>
						<option value="saab">1995</option>
						<option value="fiat">1996</option>
						<option valsue="audi">1997</option>
						<option value="volvo">1998</option>
						<option value="saab">1999</option>
						<option value="fiat">2000</option>
						<option valsue="audi">2001</option>
						</select>
                    </div>
          
                    <div class="btn-box">
                        <input type="submit" name="submit" value="Thêm" style="width: 80px;height: 40px; border-radius: 10px;background-color: rgb(128,128,128,0.2);cursor: pointer;" >
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