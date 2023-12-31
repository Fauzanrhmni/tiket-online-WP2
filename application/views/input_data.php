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
				padding: 2rem 3rem;
				width: 30rem;
				background-color: white;
				margin: 4rem auto;
				border-radius: 1rem;
				box-shadow: 0 2rem 3rem rgba(132, 139, 200, 0.18);
			}

			.container:hover {
				box-shadow: none;
			}

			.container h1 {
				margin-bottom: 1rem;
				font-size: 1.8rem;
				text-align: center;
			}

			.container form {
				display: flex;
				flex-wrap: wrap;
			}

			.container form .input-user {
				height: 3rem;
				width: 100%;
				margin-bottom: 3rem;
			}

			label {
				text-align: left;
				font-size: 1rem;
				font-weight: 500;
			}

			.container form .input-user .username {
				background-color: #eaeaea;
				font-size: 1rem;
				width: 100%;
				height: 100%;
				padding: 1rem;
				border: none;
				border-radius: 0.5rem;
				outline-color: #ffbb00;
				margin-top: 0.5rem;
			}

			.container form .radio .radio-inp {
				margin-top: 0.5rem;
			}

			.container form .radio .radio-inp .radio-input {
				transform: scale(1.5);
				margin: 0 0.5rem 1.5rem 2rem;
			}

			.container form .submit-reset {
				margin-top: 0.5rem;
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
				width: 100%;
				align-items: center;
			}

			.container form .submit-reset input {
				height: 3rem;
				margin-bottom: 1rem;
				width: 11rem;
				font-size: 1rem;
				border-radius: 0.5rem;
				border: none;
				background-color: #ffbb00;
				color: white;
				font-weight: 600;
			}

			.container form .kembali {
				width: 100%;
			}

			.container form .kembali .kembali-1 {
				height: 3rem;
				width: 100%;
				font-size: 1rem;
				border-radius: 0.5rem;
				border: none;
				background-color: #ffbb00;
				color: white;
				font-weight: 600;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<h1>Tiket Pesawat</h1>

			<form
				action="<?= base_url(). 'index.php/tiket/tambah_aksi'; ?>"
				method="post"
				enctype="multipart/form-data"
			>
				<div class="input-user">
					<label>Nama Penumpang</label>
					<input
						class="username"
						type="text"
						name="nama"
						placeholder="Masukan Nama"
					/>
				</div>

				<div class="input-user">
					<label>Pilih Nama Pesawat</label>
					<select name="pesawat" id="kelas" class="username">
						<option value="Garuda">GRD (GARUDA)</option>
						<option value="Merpati">MPT (MERPATI)</option>
						<option value="Batavia">BTV (BATAVIA)</option>
					</select>
				</div>

				<div class="radio">
					<label>Pilih Kelas</label>
					<div class="radio-inp">
						<label>
							<input
								class="radio-input"
								type="radio"
								name="kelas"
								value="Eksekutif"
								/>Eksekutif
						</label>
						<label>
							<input
								class="radio-input"
								type="radio"
								name="kelas"
								value="Bisnis"
								/>Bisnis
						</label>
						<label>
							<input
								class="radio-input"
								type="radio"
								name="kelas"
								value="Ekonomi"
								/>Ekonomi
						</label>
					</div>
				</div>

				<div class="input-user">
					<label>Jumlah Tiket</label>
					<select name="jumlah" class="username">
						<option value="1">1</option>
          	<option value="2">2</option>
          	<option value="3">3</option>
          	<option value="4">4</option>
          	<option value="5">5</option>
          	<option value="6">6</option>
          	<option value="7">7</option>
          	<option value="8">8</option>
          	<option value="9">9</option>
          	<option value="10">10</option>
					</select>
				</div>

				<div class="submit-reset">
					<div class="submit">
						<input type="submit" value="Beli"/>
					</div>

					<div class="submit">
						<input type="reset" value="Batal" />
					</div>
					<div class="kembali">
						<?= anchor('tiket/index', '<input type="button" value="Kembali" class="kembali-1"/>');
						?>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>
