<head></head>

<body bgcolor="#CAFFFF">
	<?php
	define('ROOT', dirname(__FILE__));
	include "../includes/function.php";
	session_start();
	?>
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
			width: 195px;
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
	<br />
	<div id="menu">
		<p style="font-family:Tahoma;font-weight: bold;text-align: center;font-size: large">CHÀO MỪNG BẠN ĐẾN TRANG QUẢN LÝ CỦA GIÁO VIÊN</p>
		<ul>
			<li><a href="diem/add_chon2.php">Nhập Điểm</a></li>
			<li><a href="qlgv.php?mod=hs">Xem Điểm</a></li>
			<li><a href="repass1.php">Thay Đổi Mật Khẩu</a></li>
			<li><a href="logout.php">Đăng Xuất</a></li>

		</ul>
	</div>
	<div class="right">
		<?php include "mod_gv.php"; ?>
	</div>

	<table border=0 cellpadding=5 cellspacing=0 align="center" width="983">
	</table>
</body>