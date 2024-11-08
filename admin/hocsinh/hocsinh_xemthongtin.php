<br />
<div style="text-align:right;margin-right:186px;font-weight: bold ">
    <?php
    session_start();
    echo '<br/>';
    ?>
    <div style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large; padding-bottom: 5px">
        <?php
        echo "<b>CHÀO MỪNG BẠN " . $_SESSION['ses_TenHS'];
        echo "</b>"
        ?>
    </div>
    <style type="text/css">
        #menu {
            text-align: center;
            /* Căn giữa nội dung trong menu */
        }

        #menu ul {
            display: inline-block;
            /* Để ul là một khối nội dòng để có thể căn giữa */
            padding: 0;
            /* Xóa khoảng trống mặc định của ul */
            margin: 0;
            /* Xóa khoảng cách mặc định của ul */
        }

        #menu ul li {
            display: inline-block;
            /* Để các li nằm ngang */
            margin: 0;
            /* Xóa khoảng cách mặc định */
        }

        #menu ul a {
            text-decoration: none;
            width: 245px;
            float: left;
            background: #336699;
            color: #FFFFFF;
            text-align: center;
            line-height: 27px;
            font-weight: bold;
            border-left: 1px solid #FFFFFF;
        }

        #menu ul a:hover {
            background: #000000;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="style.css">
    <div id="menu">

        <ul>

            <li><a href="xemdiem_hs.php">Xem Điểm</a></li>
            <li><a href="hocsinh_xemthongtin.php">Thông Tin Học Sinh</a></li>
            <li><a href="../repass2.php">Thay Đổi Mật Khẩu</a></li>
            <li><a href="../logout.php">Đăng Xuất</a></li>

        </ul>
    </div>
    <?php
    require "../../classes/hocsinh.class.php";
    $connect = new hocsinh();
    $students = $connect->allhs();
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Danh sách học sinh</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body bgcolor="#CAFFFF">
        <br />
        <h1 style="font-family:Tahoma;text-align: center;">THÔNG TIN HỌC SINH</h1>
        <table width="74%" border="1" cellspacing="0" cellpadding="10" style="margin-left:180px">
            <tr style="font-weight: bold;color: #0A246A">
                <td>Mã Học Sinh</td>
                <td>Lớp</td>
                <td>Tên Học Sinh</td>
                <td>Giới Tính</td>
                <td>Ngày Sinh</td>
                <td>Nơi Sinh</td>
                <td>Dân Tộc</td>
                <td>Họ Tên Cha</td>
                <td>Họ Tên Mẹ</td>
            </tr>

            <?php
            foreach ($students as $item) {
                if ($_SESSION['ses_MaHS'] == $item['MaHS']) {
            ?>
                    <tr>
                        <td><?php echo $item['MaHS']; ?></td>
                        <td><?php echo $item['TenHS']; ?></td>
                        <td><?php echo $item['MaLopHoc']; ?></td>
                        <td><?php echo $item['GioiTinh']; ?></td>
                        <td><?php echo $item['NgaySinh']; ?></td>
                        <td><?php echo $item['noisinh']; ?></td>
                        <td><?php echo $item['dantoc']; ?></td>
                        <td><?php echo $item['hotencha']; ?></td>
                        <td><?php echo $item['hotenme']; ?></td>
                    <?php }

                    ?>
                    </tr>
                <?php }
                ?>
        </table>

    </body>

    </html>