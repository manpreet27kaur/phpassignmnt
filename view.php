<?php
	require_once('database.php');

	$database = new Database(); // Instantiate the Database object
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<!-- Your head section content -->
</head>
<body>
	<!-- Your HTML body content -->
    <?php if (!empty($res)): ?>
		<div class="container">
			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Semester</th>
							<th>Phone Number</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($r = mysqli_fetch_assoc($res)): ?>
							<tr>
								<td><?php echo $r['id']; ?></td>
								<td><?php echo $r['fname']; ?></td>
								<td><?php echo $r['email'] ?></td>
								<td><?php echo $r['semester'] ?></td>
								<td><?php echo $r['phone_number'] ?></td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php endif; ?>
</body>
</html>

