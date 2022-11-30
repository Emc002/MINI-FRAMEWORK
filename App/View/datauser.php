
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>User Page</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<h2>DATA USER</h2>
			<table class="table table-dark table-info table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>ID USER</th>
						<th>USER NAME</th>
						<th>GENDER</th>
						<th>PHONE NUMBER</th>
						<th>ALAMAT</th>
					</tr>
				</thead>

				<tbody>
					<?php
						foreach($data as $td)
						{
					?>
					<tr>
						<td>
							<?php echo $td->id_user?>
						</td>
						<td>
							<?php echo $td->nama_user?>
						</td>
						<td>
							<?php echo $td->jk?>
						</td>
						<td>
							<?php echo $td->no_telp?>
						</td>
						<td>
							<?php echo $td->alamat?>
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>

</html>
