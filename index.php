<?php 
require_once 'vendor/fzaninotto/Faker/src/autoload.php';

$faker = Faker\Factory::create('id_Id');


// echo $faker->name;
// echo "<br>";
// echo $faker->text;
// echo "<br>";
// echo $faker->email;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Random</title>
</head>
<body>
	
	<h1 style="text-align: center; margin-bottom: 30px;">Data Random</h1>
	<table border="1" cellpadding="10" cellspacing="0" style="margin: 0 auto;">
		<thead>
			<tr>
				<th>No. </th>
				<th>Nama</th>
				<th>Email</th>
				<th>Address</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php $no = 1; for ($i = 1; $i <= 100; $i++) {
				$nama = $faker->name;
				$address = $faker->address;
				$password = $faker->password;
				$email = $faker->email; ?>
				<tr>
					<th><?= $no++ ?></th>
					<th><?= $nama; ?></th>
					<th><?= $email; ?></th>
					<th><?= $address; ?></th>
					<th><?= $password; ?></th>
				</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>