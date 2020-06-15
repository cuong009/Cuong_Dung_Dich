<!DOCTYPE html>
<html lang="en">
chủ yếu Cường commit!
<?php
    include('controller/c_tintuc.php');
    $c_tintuc = new C_tintuc();
    $noi_dung = $c_tintuc->index();
    //print_r($noi_dung);
    $menu = $noi_dung['menu'];
                          
    if(isset($_POST['inhoadon']))
     {
        header("location:hoadon.php");
       }
                       
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Phòng Khám X</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="public/css/fontawesom/css/font-awesome.min.css" rel="stylesheet"/>

    <style type="text/css">
         table, th, td{
            border:1px solid #ccc;
        }
        table{
            border-collapse:collapse;
            width:100%;
        }
        th, td{
            text-align:left;
            padding:10px;
        }
        tr:hover{
            background-color:#ddd;
            cursor:pointer;
        }       
        #sticky{
            position: sticky;
            top: 53px;
        }
    </style>
</head>

<body>
   
    <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background: rgb(51,82,183);">
        <div class="container">
          
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i>  Trang Chủ</a>
            </div>
          
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Tìm Kiếm</button>
                </form>

                <ul class="nav navbar-nav pull-right">
                   
                    <?php 
                        if(isset($_SESSION['user_name']))
                        {
                            ?>
                            <li>
                                <a>
                                    <span class ="glyphicon glyphicon-user"></span>
                                   <?php echo $_SESSION['user_name'];  ?>
                                </a>
                            </li>

                            <li>
                                <a href="dangxuat.php">Đăng xuất</a>
                            </li>


                        <?php
                    }else{
                        ?>
                         <li><a>
                        Hello! Cuong000
                        </a></li>
                           <li>
                            <a href="benhnhanmoi.php">Thêm Bệnh Nhân</a>
                        </li>
                         <li>
                        <a href="dangxuat.php">Đăng Xuất</a>
                    </li>
                        <?php
                    }
                     ?>                   
                </ul>
            </div>        
        </div>
        
    </nav>

     <div id="main" style=" background: white;width: 1160px;margin: 0 auto;padding: 0; border:1px solid #ccc;-moz-box-shadow: 0px 0px 15px 0px #666;-webkit-box-shadow: 0px 0px 15px 0px #666;box-shadow: 0px 0px 15px 0px #666;" >   
    <div class="container">


        <div class="space20"></div>


        <div class="row main-left" >
          

            <div class="col-md-9">
	            <div class="panel panel-default" style="width: 1100px;">
	            	<div class="panel-heading" style="background-color:#337AB7; color:white;width: 1100px;" >
	            		<h2 style="">Đơn Thuốc<i class="fa fa-book-open"></i> </h2>
	            	</div>

	            	<div class="panel-body" >
	            		<!-- item -->
                        <form action="" method="POST">
                            <table>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Thuốc</th>
                                    <th>Cách Dùng</th>
                                    <th>Giá bán</th>
                                    <th>Số Lượng</th>
                                    <th>Thành Tiền</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>viTamin</td>
                                    <td>1 viên buổi sáng</td>
                                    <td>10.000 VND</td>
                                    <td>5 viên</td>
                                    <td>50.000 VND</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>viTamin</td>
                                    <td>1 viên buổi sáng</td>
                                    <td>10.000 VND</td>
                                    <td>5 viên</td>
                                    <td>50.000 VND</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>viTamin</td>
                                    <td>1 viên buổi sáng</td>
                                    <td>10.000 VND</td>
                                    <td>5 viên</td>
                                    <td>50.000 VND</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>viTamin</td>
                                    <td>1 viên buổi sáng</td>
                                    <td>10.000 VND</td>
                                    <td>5 viên</td>
                                    <td>50.000 VND</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>viTamin</td>
                                    <td>1 viên buổi sáng</td>
                                    <td>10.000 VND</td>
                                    <td>5 viên</td>
                                    <td>50.000 VND</td>
                                </tr>
                                <tr>
                                    
                                    <td>Tổng Cộng</td>
                                    <td></td>
                                </tr>
                         </table>
 
                         <div style="padding-top: 20px;padding-left:  820px;">
                             <input type="submit" name="inhoadon" value="In Hóa Đơn" style="background-color:#337AB7;color: white;border-radius: 5px; cursor: pointer;">
                             <input type="submit" name="lammoi" value="Làm Mới" style="background-color:#337AB7;color: white;border-radius: 5px; cursor: pointer;">
                             <input type="submit" name="quaylai" value="Quay Lại" style="background-color:#337AB7;color: white;border-radius: 5px;cursor: pointer;">
                         </div>
                         </form>
		                <!-- end item -->

					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; </p>
            </div>
        </div>
    </footer>
    </div>
    
    <!-- end Footer -->
    <!-- jQuery -->
    <script src="public/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/my.js"></script>
</body>
</html>
