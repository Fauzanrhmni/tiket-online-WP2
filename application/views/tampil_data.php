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

			.header {
				margin: 6rem auto 7rem;
				display: flex;
				justify-content: center;
				text-align: center;
			}

			.header .head-item {
				display: block;
			}

			.header .head-item svg {
				width: 13rem;
				height: 13rem;
				margin-bottom: 1rem;
				/* padding: 2rem;
				background-color: #ffffff;
				box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.18);
				border-radius: 2rem; */
			}

			.header .head-item svg:hover {
				box-shadow: none;
			}

			.header .head-item h1 {
				font-size: 2.5rem;
				font-weight: 600;
			}

			.header .head-item h2 {
				font-size: 1.3rem;
				font-weight: 400;
			}

			.container {
				position: relative;
				width: 80rem;
				/* height: 30rem; */
				background-color: white;
				margin: 5rem auto;
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

			.line svg {
				height: 33rem;
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
			
			.cta {
				display: flex;
				justify-content: center;
			}
		
			.cta input {
				text-align: center;
				padding: 0.7rem 2rem;
				font-size: 1rem;
				font-weight: 600;
				color: white;
				background-color: #ffbb00;
				border-radius: 0.5rem;
				text-decoration: none;
				border: none;
				margin-bottom: 2rem;
			}
		
			.cta input:hover {
				background-color: #ffc219;
			}
			</style>
	</head>
	<body>
		<div class="header">
			<div class="head-item">
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="300"
					height="300"
					viewBox="0 0 300 300"
					fill="none"
					class="logo-header"
					>
					<path
						d="M55.6334 78.8934C89.1287 126.874 60.0407 149.454 46.8189 145.69C37.8343 143.133 15.4135 129.519 0 136.62C3.11238 101.357 18.4313 69.5981 41.7053 45.5949C42.3313 57.7116 49.0354 69.4419 55.6334 78.8934Z"
						fill="#FFBB00"
					/>
					<path
						d="M172.866 106.177C174.629 75.1302 136.487 96.0561 125.268 92.0646C84.3352 77.5017 105.33 21.8891 126.027 1.81242C133.648 0.619334 141.46 0 149.416 0C202.68 0 249.46 27.7563 276.075 69.5913C268.981 73.3961 257.3 73.5963 240.738 69.4854C210.416 61.959 218.702 88.3014 218.702 103.354C217.997 128.944 207.243 134.192 197.547 135.341C172.161 138.352 170.516 117.153 172.866 106.177Z"
						fill="#FFBB00"
					/>
					<path
						d="M172.866 161.684C162.289 133.026 98.8245 154.158 131.438 212.487C147.794 241.74 116.122 275.081 86.8742 286.333C105.911 295.076 127.094 299.951 149.416 299.951C231.264 299.951 297.801 234.41 299.39 152.957C297.712 150.851 296.39 148.341 295.388 145.69C279.169 102.79 261.893 99.591 253.96 99.591C232.805 98.8384 239.64 131.578 239.857 147.572C240.738 212.487 184.325 192.73 172.866 161.684Z"
						fill="#FFBB00"
					/>
					<path
						d="M4.44617 188.642C10.6103 189.326 17.1149 188.452 22.1382 187.086C91.6527 181.892 84.4168 235.796 54.0411 265.737C30.2493 246.12 12.6087 219.313 4.44617 188.642Z"
						fill="#FFBB00"
					/>
				</svg>
				<h1>OFORI AIR</h1>
				<h2>Maskapai Penerbangan Bertarif Rendah Multinasional</h2>
			</div>
		</div>

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

						<!-- <img src="<?php base_url(); ?>assets/img/qr-code.png" /> -->
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="1276"
							height="1276"
							viewBox="0 0 1276 1276"
							fill="none"
							class="img"
						>
							<path
								d="M0 308H308V-1.055e-05H0V308ZM264 264H44V44H264V264Z"
								fill="black"
							/>
							<path d="M88 220H220V88H88V220Z" fill="black" />
							<path
								d="M396 43.9999H352V87.9999H396V132H352V176H440V308H484V176H528V220H572V264H528V396H572V352H616V396H660V440H748V396H792V352H748V396H704V308H748V220H704V176H792V308H836V220H880V352H836V440H880V484H836V616H792V528H748V484H704V528H748V616H704V572H528V484H572V440H484V484H440V396H484V352H264V396H308V440H220V484H132V396H220V352H0V572H44V616H0V660H44V704H88V616H132V748H88V836H132V880H88V924H220V880H264V924H308V880H264V836H352V748H308V704H176V616H220V660H352V616H264V572H440V616H484V572H528V616H572V660H528V748H572V704H616V748H660V704H704V660H792V704H748V748H704V792H660V836H616V880H660V836H704V880H748V924H704V968H660V924H528V836H572V792H484V748H396V836H484V880H440V924H528V968H572V1012H528V1100H572V1056H616V1100H660V1056H748V1100H704V1144H660V1188H616V1232H704V1144H748V1188H792V1232H748V1276H792V1232H836V1276H880V1232H968V1188H1012V1232H1144V1276H1188V1232H1232V1144H1276V1100H1232V1056H1144V1100H1100V1012H1188V968H1276V880H1232V836H1188V704H1232V660H1188V616H1100V572H1188V528H1232V484H1188V528H1144V484H1100V396H1144V352H1100V396H1056V352H1012V396H968V352H924V220H880V132H924V-6.10352e-05H792V43.9999H748V-6.10352e-05H660V43.9999H748V87.9999H704V176H528V87.9999H572V43.9999H484V87.9999H440V-6.10352e-05H396V43.9999ZM880 87.9999H792V132H836V176H792V132H748V87.9999H792V43.9999H880V87.9999ZM484 176H440V132H484V176ZM616 308H660V264H704V308H660V352H616V308H572V264H616V308ZM924 396H880V352H924V396ZM88 484H44V396H88V484ZM396 528H352V484H308V528H220V484H308V440H396V528ZM1056 484H1012V572H880V528H924V484H968V440H1056V484ZM176 572H88V528H176V572ZM484 572H440V528H484V572ZM1100 572H1056V528H1100V572ZM880 660H924V616H1012V660H1056V616H1100V660H1188V704H1100V748H1144V836H1188V880H1144V924H1100V880H1056V836H968V792H924V836H836V924H880V968H836V1012H880V1100H1100V1144H880V1100H836V1144H748V1100H792V1056H748V1012H792V968H836V924H792V880H748V836H704V792H748V748H792V704H880V660H836V616H880V660ZM660 704H616V660H660V704ZM308 792H264V836H132V792H176V748H308V792ZM1056 1056H924V924H1056V1056ZM660 1056H616V1012H660V1056ZM880 1232H836V1188H880V1232ZM1188 1232H1144V1188H1188V1232Z"
								fill="black"
							/>
							<path
								d="M968 704H1012V748H968L968 792H1100V748H1056V704H1100V660H1056V704H1012L1012 660L968 660V704Z"
								fill="black"
							/>
							<path
								d="M792 836H836L836 792H924L924 748H792L792 836Z"
								fill="black"
							/>
							<path d="M792 1056H836L836 1012H792V1056Z" fill="black" />
							<path d="M968 1012H1012V968H968V1012Z" fill="black" />
							<path
								d="M968 308H1276V-1.055e-05H968V308ZM1232 264H1012V44H1232V264Z"
								fill="black"
							/>
							<path d="M1056 220H1188V88H1056V220Z" fill="black" />
							<path d="M616 132H660V88H616V132Z" fill="black" />
							<path d="M352 308H396V220H352V308Z" fill="black" />
							<path
								d="M1188 396H1232V440H1276V396H1232V352H1188V396Z"
								fill="black"
							/>
							<path d="M616 528H660V484H616V528Z" fill="black" />
							<path d="M1232 616H1276V572H1232V616Z" fill="black" />
							<path d="M440 704H484V660H440V704Z" fill="black" />
							<path d="M0 924H44V748H0V924Z" fill="black" />
							<path d="M1232 792H1276V748H1232V792Z" fill="black" />
							<path
								d="M352 1012H396V1056H352V1276H528V1188H572V1144H484V1056H440V1012H396V880H352V1012ZM440 1144H484V1188H440V1232H396V1056H440V1144Z"
								fill="black"
							/>
							<path
								d="M0 1276H308V968H0V1276ZM264 1232H44V1012H264V1232Z"
								fill="black"
							/>
							<path d="M88 1188H220V1056H88V1188Z" fill="black" />
						</svg>
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
						<!-- <img src="<?php base_url(); ?>assets/img/logo.svg" class="logo" /> -->
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="300"
							height="300"
							viewBox="0 0 300 300"
							fill="none"
							class="logo"
						>
							<path
								d="M55.6334 78.8934C89.1287 126.874 60.0407 149.454 46.8189 145.69C37.8343 143.133 15.4135 129.519 0 136.62C3.11238 101.357 18.4313 69.5981 41.7053 45.5949C42.3313 57.7116 49.0354 69.4419 55.6334 78.8934Z"
								fill="#FFBB00"
							/>
							<path
								d="M172.866 106.177C174.629 75.1302 136.487 96.0561 125.268 92.0646C84.3352 77.5017 105.33 21.8891 126.027 1.81242C133.648 0.619334 141.46 0 149.416 0C202.68 0 249.46 27.7563 276.075 69.5913C268.981 73.3961 257.3 73.5963 240.738 69.4854C210.416 61.959 218.702 88.3014 218.702 103.354C217.997 128.944 207.243 134.192 197.547 135.341C172.161 138.352 170.516 117.153 172.866 106.177Z"
								fill="#FFBB00"
							/>
							<path
								d="M172.866 161.684C162.289 133.026 98.8245 154.158 131.438 212.487C147.794 241.74 116.122 275.081 86.8742 286.333C105.911 295.076 127.094 299.951 149.416 299.951C231.264 299.951 297.801 234.41 299.39 152.957C297.712 150.851 296.39 148.341 295.388 145.69C279.169 102.79 261.893 99.591 253.96 99.591C232.805 98.8384 239.64 131.578 239.857 147.572C240.738 212.487 184.325 192.73 172.866 161.684Z"
								fill="#FFBB00"
							/>
							<path
								d="M4.44617 188.642C10.6103 189.326 17.1149 188.452 22.1382 187.086C91.6527 181.892 84.4168 235.796 54.0411 265.737C30.2493 246.12 12.6087 219.313 4.44617 188.642Z"
								fill="#FFBB00"
							/>
						</svg>
						<h2 class="name-company">OFORI AIR</h2>
					</div>

					<div class="button">
						<?= anchor('tiket/edit/'.$u->id,'<input
							type="button"
							name="submit"
							value="Edit"
						/>'); ?>
						<?= anchor('tiket/hapus/'.$u->id,'<input
							type="button"
							name="submit"
							value="Hapus"
						/>'); ?>
					</div>
				</div>
			</div>
			<div class="footer-color"></div>
			<div class="line">
				<!-- <img src="<?php base_url(); ?>assets/img/line.svg" /> -->
				<svg
					xmlns="http://www.w3.org/2000/svg"
					width="2"
					height="911"
					viewBox="0 0 2 911"
					fill="none"
				>
					<path d="M1 0L0.99996 911" stroke="black" stroke-dasharray="5 5" />
				</svg>
			</div>
		</div>
		<?php endforeach; ?>

		<div class="cta">
			<?= anchor('tiket/tambah', '<input type="button" value="Beli Tiket" />');
			?>
		</div>
	</body>
</html>
