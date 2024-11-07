<?php
require "../../classes/DB.class.php";
$connect = new db();
$conn = $connect->connect();
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Trang Nhập Điểm</title>
</head>

<body bgcolor="#f0ffff">
    <?php
    if (isset($_POST['themdiem'])) {
        $query = "SELECT * FROM hocsinh";
        $results = mysqli_query($conn, $query);
        $i = 1;

        while ($row = mysqli_fetch_assoc($results)) {
            $ma = isset($_POST["ma$i"]) ? $_POST["ma$i"] : null;
            $lop = isset($_POST["lop$i"]) ? $_POST["lop$i"] : null;
            $mon = isset($_POST["mon$i"]) ? $_POST["mon$i"] : null;
            $hk = isset($_POST["hk$i"]) ? $_POST["hk$i"] : null;
            //ép kiểu số
            $mieng = isset($_POST["diem$i"]) && $_POST["diem$i"] !== '' ? (float)$_POST["diem$i"] : null;
            $p1 = isset($_POST["diem1$i"]) && $_POST["diem1$i"] !== '' ? (float)$_POST["diem1$i"] : null;
            $p2 = isset($_POST["diem2$i"]) && $_POST["diem2$i"] !== '' ? (float)$_POST["diem2$i"] : null;
            $t1 = isset($_POST["diem3$i"]) && $_POST["diem3$i"] !== '' ? (float)$_POST["diem3$i"] : null;
            $t2 = isset($_POST["diem4$i"]) && $_POST["diem4$i"] !== '' ? (float)$_POST["diem4$i"] : null;
            $d = isset($_POST["diem5$i"]) && $_POST["diem5$i"] !== '' ? (float)$_POST["diem5$i"] : null;


            if ($ma && $lop && $mon && $hk && $mieng !== null && $p1 !== null && $p2 !== null && $t1 !== null && $t2 !== null && $d !== null) {
                // $tb = ($mieng + $p1 + $p2 + ($t1 + $t2) * 2 + $d * 3) / 10;

                // $sql = "INSERT INTO diem (MaHocKy, MaMonHoc, MaHS, MaLopHoc, DiemMieng, Diem15Phut1, Diem15Phut2, Diem1Tiet1, Diem1Tiet2, DiemThi, DiemTB) 
                //         VALUES ('$hk', '$mon', '$ma', '$lop', '$mieng', '$p1', '$p2', '$t1', '$t2', '$d', '$tb')";

                // Gọi Stored Procedure
                $sql = "CALL insert_diem('$hk', '$mon', '$ma', '$lop', '$mieng', '$p1', '$p2', '$t1', '$t2', '$d')";


                $results1 = mysqli_query($conn, $sql);

                if (!$results1) {
                    echo "Lỗi khi chèn dữ liệu: " . mysqli_error($conn);
                }
            }

            $i++;
        }
    ?>
        <script type="text/javascript">
            alert("Bạn Đã Cập Nhật Điểm Thành Công");
            window.location = "../qlgv.php?mod=hs";
        </script>
    <?php
    }
    ?>
    <center>
        <h1>Trang Nhập Điểm</h1>
    </center>
    <form action="add_diemhs.php" method="post">
        <table border="1" cellspacing="0" cellpadding="1">
            <tr style="font-weight: bold">
                <td>Mã Học Sinh</td>
                <td>Tên Học Sinh</td>
                <td>Lớp</td>
                <td>Môn Học</td>
                <td>Học Kỳ</td>
                <td>Điểm Miệng</td>
                <td>Điểm 15 phút</td>
                <td>Điểm 15 phút</td>
                <td>Điểm 1 Tiết</td>
                <td>Điểm 1 Tiết</td>
                <td>Điểm Thi</td>
            </tr>
            <?php
            $query = "SELECT * FROM hocsinh";
            $results = mysqli_query($conn, $query);
            $i = 1;

            while ($row = mysqli_fetch_assoc($results)) {
                if ($row['MaLopHoc'] == $_SESSION['malop']) {
                    echo "<tr>";
            ?>
                    <td><input style="width:90px" type="text" name="ma<?php echo $i; ?>" value="<?php echo $row['MaHS']; ?>" readonly="readonly" /></td>
                    <td><input style="width:200px" type="text" name="ten<?php echo $i; ?>" value="<?php echo $row['TenHS']; ?>" readonly="readonly" /></td>
                    <td><input style="width:70px" type="text" name="lop<?php echo $i; ?>" value="<?php echo $_SESSION['malop']; ?>" readonly="readonly" /></td>
                    <td><input style="width:90px" type="text" name="mon<?php echo $i; ?>" value="<?php echo $_SESSION['mamon']; ?>" readonly="readonly" /></td>
                    <td><input style="width:100px" type="text" name="hk<?php echo $i; ?>" value="<?php echo $_SESSION['mahk']; ?>" readonly="readonly" /></td>
                    <td><input style="width:100px" type="text" name="diem<?php echo $i; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem1<?php echo $i; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem2<?php echo $i; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem3<?php echo $i; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem4<?php echo $i; ?>" /></td>
                    <td><input style="width:100px" type="text" name="diem5<?php echo $i; ?>" /></td>
                    </tr>
            <?php
                    $i++;
                }
            }
            ?>
        </table>
        <div>
            <input type="submit" name="themdiem" value="Thêm Điểm" />
        </div>
    </form>
</body>

</html>