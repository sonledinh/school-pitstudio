<?php include 'header.php';?>
<main>
	<section class="box-login">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<form action="bai-giang.php">
						<div class="txt-login">
							<div class="title text-center">
								<h2>Pit School Management</h2>
								<p>Đăng nhập để quản lý bài giảng & lịch học </p>
							</div>
							<div class="box-form-login">
								<div class="item">
									<label>Email*</label>
									<input type="text" class="txt_login" placeholder="Nhập địa chỉ email">
								</div>
								<div class="item">
									<label>Mật khẩu*</label>
									<input type="text" class="txt_login" placeholder="Nhập mật khẩu">
								</div>
								<div class="item item-remb">
									<input type="checkbox" id="remb" class="check_inp">
									<label for="remb">Keep me logged in</label>
								</div>
								<div class="item">
									<input type="submit" value="ĐĂNG NHẬP" class="btn_form">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="bn-login">
						<img src="images/bg-login.jpg" class="img-fluid" alt="">
						<div class="info">Discover the world’s top <br> Designers & Creatives.</div>
					</div>
				</div>
			</div>
		</div> 
	</section>
</main>
<?php include 'footer.php';?>       