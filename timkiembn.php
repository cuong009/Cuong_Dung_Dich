<?php
    require_once("connet.php");

    $hienthi = "";
    if (isset($_POST['submit_tk'])) {
        $search = $_POST['txtSearch'];
        if($search != ""){
            $sql = "SELECT * FROM benh_nhan WHERE TenBN LIKE '%$search%' or SDT LIKE '%$search%'";
            $query = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($query);
            if($num == 0){
                 $hienthi ="<span style='color:red;'>không có bệnh nhân này ! '$search'</span>";
            }else{
                while ($row = mysqli_fetch_array($query)) {
                    $ten = $row['TenBN'];
                    $STD = $row['SDT'];
                    $Namsinh = $row['NamSinh'];
                    $GioiTinh = $row['GioiTinh'];
                    $DiaChi = $row['DiaChi'];

                    $hienthi = "<div>$ten<br> $STD<br> $Namsinh<br> $GioiTinh<br> $DiaChi</div>";
                }
            }
        }else{
            $hienthi ="<span style='color:red;'>chưa nhập dữ liệu '$search'</span>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="#" method="POST">
        <input type="text" name="txtSearch" placeholder="Nhap ten hoac sdt">
        <input type="submit" name="submit_tk" value="TimKiem">
        <?php
            echo $hienthi;
        ?>
    </form>
</body>
</html>