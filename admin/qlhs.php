	<body bgcolor="#CAFFFF">
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
				<li><a href="hocsinh/xemdiem_hs.php">Xem Điểm</a></li>
				<li><a href="hocsinh/hocsinh_xemthongtin.php">Thông Tin Học Sinh</a></li>
				<li><a href="repass2.php">Thay Đổi Mật Khẩu</a></li>
				<li><a href="logout.php">Đăng Xuất</a></li>

			</ul>
		</div>

		<table border=0 cellpadding=5 cellspacing=0 align="center" width="983">
		</table>
	</body>