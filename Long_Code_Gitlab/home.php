<?php include '_head.php'; ?>

<div class="login-area bg wrapper">
	<div class="container">

		<div class="logo">
			<img src="img/logo-home.png" alt=""/>
		</div>

		<div class="description">The first online betting service based on a blockchain</div>

		<div class="title">Connection</div>

		<div class="items">
			<div class="item login">
				<form class="form validate" method="post">
					<div class="group">
						<input type="text" name="username" class="control" placeholder="Pseudo" required/>
					</div>

					<div class="group">
						<input type="text" name="address" class="control" placeholder="Wallet Address" required/>
					</div>

					<button type="submit" class="btn secondary full">
						<img src="img/v-green.png" alt=""/>
						CONFIRM
						<i>&nbsp;</i>
					</button>
				</form>
			</div>

			<div class="item register">
				<div class="inner">
					<div class="text">Not yet registered ?</div>

					<a href="#" class="btn info full">
						I'M REGISTERING
						<img src="img/arrow-right.png" alt=""/>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>

<?php include '_foot.php'; ?>