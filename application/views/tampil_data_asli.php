<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Tiket Online</title>
		<style>
			@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap");

			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			body {
				font-family: "Poppins", sans-serif;
				background-color: #f6f6f6;
				height: 80vh;
			}

			.container {
				position: relative;
				width: 80rem;
				/* height: 30rem; */
				background-color: white;
				margin: 4rem auto;
				border-radius: 1rem;
				box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.18);
				overflow: hidden;
			}

			.container:hover {
				box-shadow: none;
			}

			.container .head-color {
				display: flex;
				justify-content: space-between;
				padding: 1rem 3rem;
				background-color: #ffbb00;
				width: 100%;
				color: white;
			}

			.container .head-color .pesawat {
				display: flex;
				justify-content: space-between;
				align-items: center;
				width: 50rem;
			}

			.container .head-color .pesawat h1 {
				font-size: 1.6rem;
				font-weight: 600;
				text-transform: uppercase;
			}

			.container .head-color .pesawat h2,
			.container .head-color .kelas h2 {
				font-size: 1.3rem;
				font-weight: 600;
				text-transform: uppercase;
			}

			.container .head-color .kelas {
				display: flex;
				justify-content: center;
				align-items: center;
				text-align: center;
				width: 20rem;
			}

			.container .middle {
				display: flex;
				justify-content: space-between;
				padding: 1rem 3rem;
				align-items: start;
			}

			.container .middle .data {
				display: block;
			}

			.container .middle .data .data-penumpang {
				display: flex;
				justify-content: space-between;
				align-items: center;
				width: 50rem;
				text-align: center;
			}

			.container .middle .data .data-penumpang .nama {
				text-align: left;
			}

			.container .middle .data .data-penumpang .penumpang {
				display: block;
			}

			label {
				font-weight: 700;
			}

			.container .middle .data .data-penumpang .penumpang h2,
			.container .middle .data .data-penumpang .nama h2 {
				font-size: 1.5rem;
				font-weight: 400;
				text-transform: uppercase;
			}

			.container .middle .data .tjn {
				margin-top: 2rem;
				margin-bottom: 2rem;
				display: flex;
				justify-content: space-between;
				align-items: start;
				width: 50rem;
			}

			.container .middle .data .tjn .tjn-penumpang,
			.boarding .tjn-penumpang {
				display: block;
				width: 16rem;
			}

			.container .middle .data .tjn .tjn-penumpang .tujuan,
			.boarding .tjn-penumpang .tujuan {
				display: flex;
				justify-content: space-between;
				align-items: center;
			}

			.container .middle .data .tjn .tjn-penumpang .tujuan h2,
			.container .middle .boarding h2 {
				font-size: 1.5rem;
				font-weight: 400;
				text-transform: uppercase;
			}

			.boar {
				display: block;
				text-align: center;
			}

			.boar h2,
			.boarding .tjn .boar h2 {
				font-weight: 600;
				font-size: 2rem;
			}

			.img {
				width: 10.5rem;
				height: 10.5rem;
			}

			.logo {
				width: 3rem;
				height: 3rem;
				margin-right: 1rem;
			}

			.container .footer-color {
				background-color: #ffbb00;
				height: 1.5rem;
				width: 40rem;
				color: white;
				align-items: end;
			}

			.container .middle .boarding {
				width: 20rem;
			}

			.boarding .tjn-penumpang {
				margin-top: 2rem;
			}

			.boarding .tjn {
				display: flex;
				justify-content: space-between;
				margin-top: 2rem;
			}

			.company {
				display: flex;
				justify-content: center;
				align-items: center;
				margin-top: 0.5rem;
			}

			.line {
				position: absolute;
				top: 0;
				bottom: 0;
				right: 25rem;
				height: 100%;
				width: 1px;
			}

			.line img {
				height: 100%;
			}

			.cta {
				display: flex;
				justify-content: center;
			}

			.cta input {
				text-align: center;
				padding: 1rem 3rem;
				font-size: 1.5rem;
				font-weight: 600;
				color: white;
				background-color: #ffbb00;
				border-radius: 0.5rem;
				text-decoration: none;
				border: none;
				margin-bottom: 2rem;
			}

			.button {
				margin-top: 1rem;
				display: flex;
				justify-content: end;
				align-items: center;
			}

			.button input {
				text-align: center;
				padding: 0.7rem 2rem;
				font-size: 1rem;
				font-weight: 600;
				color: white;
				background-color: #ffbb00;
				border-radius: 0.5rem;
				margin-left: 1rem;
				text-decoration: none;
				border: none;
			}
		</style>
	</head>
	<body>
		<?php 
			$no = 1;
			foreach ($penumpang as $u) : ?>

		<div class="container">
			<div class="head-color">
				<div class="pesawat">
					<h1><?= $u->pesawat; ?> TICKET</h1>
					<h2>BOARDING PASS</h2>
				</div>
				<div class="kelas">
					<h2><?= $u->kelas; ?> CLASS</h2>
				</div>
			</div>

			<div class="middle">
				<div class="data">
					<div class="data-penumpang">
						<div class="nama">
							<label> NAME OF PASSENGER </label>
							<h2><?= $u->nama; ?></h2>
						</div>
						<div class="penumpang">
							<label> DATE </label>
							<h2>14 JAN 23</h2>
						</div>
						<div class="penumpang">
							<label> BOARDING TIME </label>
							<h2>10:20</h2>
						</div>
						<div class="penumpang">
							<label> FLIGHT </label>
							<h2>JKTMLY</h2>
						</div>
					</div>

					<div class="tjn">
						<div class="tjn-penumpang">
							<div class="tujuan">
								<label> FROM : </label>
								<h2>Jakarta / JKT</h2>
							</div>
							<div class="tujuan">
								<label> TO : </label>
								<h2>Malaysia / MLY</h2>
							</div>
						</div>
						<div class="boar">
							<label> GATE</label>
							<h2>10:20</h2>
						</div>
						<div class="boar">
							<label> SEAT </label>
							<h2>21B</h2>
						</div>
						<img src="<?php base_url(); ?>assets/img/logo.jpg" class="img" />
					</div>

					<div class="data-penumpang">
						<div class="nama">
							<label> HARGA </label>
							<h2><?= $u->harga; ?></h2>
						</div>
						<div class="penumpang">
							<label> JUMLAH TIKET </label>
							<h2><?= $u->jumlah; ?></h2>
						</div>
						<div class="penumpang">
							<label> TOTAL BAYAR </label>
							<h2><?= $u->harga*$u->jumlah; ?></h2>
						</div>
					</div>
				</div>

				<div class="boarding">
					<div class="data-penumpang">
						<div class="nama">
							<label> NAME OF PASSENGER </label>
							<h2><?= $u->nama; ?></h2>
						</div>
					</div>

					<div class="tjn-penumpang">
						<div class="tujuan">
							<label> FROM : </label>
							<h2>Jakarta / JKT</h2>
						</div>
						<div class="tujuan">
							<label> TO : </label>
							<h2>Malaysia / MLY</h2>
						</div>
					</div>

					<div class="tjn">
						<div class="boar">
							<label> GATE</label>
							<h2>10:20</h2>
						</div>
						<div class="boar">
							<label> SEAT </label>
							<h2>21B</h2>
						</div>
						<div class="boar">
							<label> FLIGHT </label>
							<h2>JKTMLY</h2>
						</div>
					</div>

					<div class="company">
						<img src="<?php base_url(); ?>assets/img/logo.jpg" class="logo" />
						<h2 class="name-company">AIR WATER</h2>
					</div>

					<div class="button">
						<?= anchor('tiket/edit/'.$u->id,'<input type="button" name="submit" value="Edit" />'); ?>
						<?= anchor('tiket/hapus/'.$u->id,'<input type="button" name="submit" value="Hapus" />'); ?>
					</div>
				</div>
			</div>
			<div class="footer-color"></div>
			<div class="line"><img src="<?php base_url(); ?>assets/img/line.svg" /></div>
		</div>
		<?php endforeach; ?>

		<div class="cta">
			<?= anchor('tiket/tambah', '<input type="button" value="Tambah Data" />');
			?>
		</div>
	</body>
</html>
