<?php
if(isset($_GET['id']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "userinfo";
	$id = $_GET['id'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);

	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

	// OPERATIONS
	$sql = "SELECT * FROM register WHERE id = '$id'";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		$row = $result->fetch_assoc();
	}
	else 
	{
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
		<div class="main-body mt-5">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="css/avatar.png" alt="Admin" class="rounded-circle p-1" width="110">
								<div class="mt-3">
									<h4><?php echo $row['Fullname']; ?></h4>
									<p class="text-secondary mb-3"><?php echo $row['category2']; ?></p>
									<a href="index.php"><button class="btn btn-outline-danger">Logout</button></a>
								</div>
							</div>
							<hr class="my-4">
							<ul class="list-group list-group-flush">
								<li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
									<h6 class="mb-0"><i class="fa-solid fa-pen-to-square"></i> Write-ups</h6>
									<span class="text-secondary">458</span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
				<form action="authentication/edit.php" method="POST">
					<input type="hidden" value='<?php echo $id; ?>' name="id">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="fname" class="form-control" value="<?php echo $row['Fullname']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">User Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="uname" class="form-control" value="<?php echo $row['Username']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="email" class="form-control" value="<?php echo $row['Email']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="pass" class="form-control" value="<?php echo $row['Password']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="ph" class="form-control" value="<?php echo $row['Phone']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Date of Birth</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="dob" class="form-control" value="<?php echo $row['dob']; ?>">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Gender</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<select name="gender" id="" class="form-control"> 
									<option value="male" <?php if($row['gender']=='male') { ?> selected <?php } ?>  >Male</option>
									<option value="female" <?php if($row['gender']=='female') { ?> selected <?php } ?>>Female</option>
									<option value="prefernottosay" <?php if($row['gender']=='prefernottosay') { ?> selected <?php } ?> >Prefer not to say</option>
									</select>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Category - 1</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<select name="category-1" id="" class="form-control"> 
									<option value="writer" <?php if($row['category1']=='writer') { ?> selected <?php } ?>  >Writer</option>
									<option value="reader" <?php if($row['category1']=='reader') { ?> selected <?php } ?>>Reader</option>
									<option value="jury" <?php if($row['category1']=='jury') { ?> selected <?php } ?> >Jury</option>
									</select>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Category - 2</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<select name="category-2" id="" class="form-control"> 
									<option value="shortstory writer" <?php if($row['category2']=='shortstory writer') { ?> selected <?php } ?>  >ShortStory Writer</option>
									<option value="poem writer" <?php if($row['category2']=='poem writer') { ?> selected <?php } ?>>Poem Writer</option>
									<option value="Article writer" <?php if($row['category2']=='Article writer') { ?> selected <?php } ?> >Article Writer</option>
									</select>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Save Changes">
								</div>
							</div>
						</div>
					</div>
					
				</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>