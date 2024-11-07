<?php
require '../includes/config.php';
?>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript">
    function XacNhan() {
        if (!window.confirm('Bạn Có Chắc Muốn Xóa Học Sinh Này Không!!!')) {
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html>

<head>
    <title>Lịch Sử Sửa Điểm</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body bgcolor="#CAFFFF">
    <container>
        <br />
        <h1 class="h1" style="font-family:Tahoma;text-align: center;">Các Thay Đổi</h1>
        <table width="75%" border="1" cellspacing="0" cellpadding="10" style="margin-left:180px">
            <tr class="diem" style="font-weight: bold;color: #0A246A">
                <td>Mã Học Sinh</td>
                <td style="width:200px">Tên Học Sinh</td>
                <td>Mã Lớp</td>
                <td>Mã Học Kỳ</td>
                <td>Mã Môn Học</td>
                <td>Nội Dung</td>
                <td>Thời Gian Thay Đổi</td>
            </tr>
            <?php
            ?>
            <?php
            require "../classes/diem.class.php";
            $connect = new diem();
            $students = $connect->alldiem_log();
            foreach ($students as $item) {
            ?>
                <tr>
                    <td><?php echo $item['MaHS']; ?></td>
                    <td><?php echo $item['TenHS']; ?></td>
                    <td><?php echo $item['MaLopHoc']; ?></td>
                    <td><?php echo $item['MaHocKy']; ?></td>
                    <td><?php echo $item['MaMonHoc']; ?></td>
                    <td><?php echo $item['NoiDungThayDoi']; ?></td>
                    <td><?php echo $item['ThoiGianThayDoi']; ?></td>
                </tr>
            <?php
            }
            //disconnect_db();
            ?>
        </table>
    </container>

</body>

</html>