<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: rgb(243, 251, 247);
        }
        h1 {
            color: #343a40;
        }
        .form-group {
            color: #000000;
            background-color: #20c997;
            border: 1px solid #8b8989;
        }
        .form-control {
            background-color: #e5fff7;
            color: silver;
            border: 1px solid #8b8989;
        }
    </style>
</head>
<body>
	<div class="container mt-5">
		<h1 class="text-center mb-4">Kalkulator</h1>
		<div class="row justify-content-center">
			<div class="col-md-10">
				<form method="post" action="">
					<div class="form-group">
						<label for="angka1">Angka 1:</label>
						<input type="text" class="form-control" id="angka1" name="angka1" placeholder="Masukkan Angka" required>
					</div>
					<div class="form-group">
						<label for="angka2">Angka 2:</label>
						<input type="text" class="form-control" id="angka2" name="angka2" placeholder="Masukkan Angka" required>
					</div>
					<div class="form-group">
						<label for="operator">Operator:</label>
						<select class="form-control" id="operator" name="operator" required>
							<option value="">Pilih Operator</option>
							<option value="+">Tambah</option>
							<option value="-">Kurang</option>
							<option value="*">Kali</option>
							<option value="/">Bagi</option>
						</select>
					</div>
					<button type="submit" class="btn btn-dark btn-block" name="jumlah">Jumlahkan</button>
				</form>
			</div>
            <div class="col-md-10">
				<?php 
				if (isset($_POST['jumlah'])) {
					$angka1 = $_POST['angka1'];
					$angka2 = $_POST['angka2'];
					$operator = $_POST['operator'];
					switch ($operator) {
						case '+':
							$hasil = $angka1 + $angka2;
							break;
						case '-':
							$hasil = $angka1 - $angka2;
							break;
						case '*':
							$hasil = $angka1 * $angka2;
							break;
						case '/':
							$hasil = $angka1 / $angka2;
							break;
					}
					echo "<div class='alert alert-success mt-4'>Hasil: $hasil</div>";
				}
				?>
			</div>
		</div>
	</div>
</body>
</html>