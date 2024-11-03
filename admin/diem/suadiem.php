<?php
session_start();
require "../../includes/config.php";
$madiem = $_GET['cma'];
$malop = $t = $gt = $ns = $nois = $dt = $cha = $me = "";
if (isset($_POST['ok'])) {
    if ($_POST['txtmieng'] == null) {
        echo "ban chua nhap diem mieng";
    } else {
        $DiemMieng = $_POST['txtmieng'];
    }
    if ($_POST['txt15p1'] == null) {
        echo "ban chua nhap diem 15p1";
    } else {
        $Diem15p1 = $_POST['txt15p1'];
    }
    if ($_POST['txt15p2'] == null) {
        echo "ban chua nhap diem 15p2";
    } else {
        $Diem15p2 = $_POST['txt15p2'];
    }
    if ($_POST['txt1t1'] == null) {
        echo "ban chua nhap diem 1t1";
    } else {
        $Diem1t1 = $_POST['txt1t1'];
    }
    if ($_POST['txt1t2'] == null) {
        echo "ban chua nhap diem 1t2";
    } else {
        $Diem1t2 = $_POST['txt1t2'];
    }
    if ($_POST['txtthi'] == null) {
        echo "ban chua nhap diem thi";
    } else {
        $Diemthi = $_POST['txtthi'];
    }
    if ($DiemMieng && $Diem15p1 && $Diem15p2 && $Diem1t1 && $Diem1t2 && $Diemthi) {
        $query = "update diem set DiemMieng='$DiemMieng',Diem15Phut1='$Diem15p1',Diem15Phut2='$Diem15p2',Diem1Tiet1='$Diem1t1',Diem1Tiet2='$Diem1t2',DiemThi='$Diemthi' where MaDiem='$madiem'";
        $results = mysqli_query($conn, $query);
        header("location:../index.php?mod=diem");
        exit();
    }
}
$query = "select * from diem where MaDiem='$madiem'";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($results);
?>

<body bgcolor="#CAFFFF">
    <h1 align="center">TRANG SỬA ĐIỂM</h1>
    <table align="center" border="1" cellspacing="0" cellpadding="10">
        <form action="suadiem.php?cma=<?php echo $row['MaDiem']; ?>" method="post">
            <tr>
                <td>Mã Học Sinh</td>
                <td><input type="text" name="txths" size="25" value="<?php echo $row['MaHS']; ?>" readonly="readonly" /></td>
            </tr>

            <tr>
                <td>Mã Lớp</td>
                <td><input type="text" name="txtmalop" size="25" value="<?php echo $row['MaLopHoc']; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
                <td>Mã Môn</td>
                <td><input type="text" name="txtmamon" size="25" value="<?php echo $row['MaMonHoc']; ?>" readonly="readonly" /></td>
            </tr>
            <tr>
                <td>Mã Học Kỳ</td>
                <td><input type="text" name="txthk" size="25" value="<?php echo $row['MaHocKy']; ?>" readonly="readonly" /> </td>
            </tr>
            <tr>
                <td>Điểm Miệng</td>
                <td><input type="text" name="txtmieng" size="25" value="<?php echo $row['DiemMieng']; ?>" /> </td>
            </tr>
            <tr>
                <td>Điểm 15 Phút</td>
                <td><input type="text" name="txt15p1" size="25" value="<?php echo $row['Diem15Phut1']; ?>" /> </td>
            </tr>
            <tr>
                <td>Điểm 15 Phút</td>
                <td><input type="text" name="txt15p2" size="25" value="<?php echo $row['Diem15Phut2']; ?>" /> </td>
            </tr>
            <tr>
                <td>Điểm 1 Tiết</td>
                <td><input type="text" name="txt1t1" size="25" value="<?php echo $row['Diem1Tiet1']; ?>" /> </td>
            </tr>
            <tr>
                <td>Điểm 1 Tiết</td>
                <td><input type="text" name="txt1t2" size="25" value="<?php echo $row['Diem1Tiet2']; ?>" /></td>
            </tr>
            <td>Điểm Thi</td>
            <td><input type="text" name="txtthi" size="25" value="<?php echo $row['DiemThi']; ?>" /></td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="ok" value="Sửa" /><br />
                </td>
            </tr>
        </form>
    </TABLE>