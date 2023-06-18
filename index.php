<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Record of Students | Create & Read</title>
	<meta name="description" content="Enter the details about the students and keep record.">
	<meta name="robots" content="noindex, nofollow">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./css/style.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/php-logo.png" alt="header logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
	<section class="masthead">
		<div>
			<h1>Record Of Students</h1>
		</div>
	</section>
  <main class="container">
	   <section class="form-row row justify-content-center">
		     <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
					 <h2>Enter Details</h2>
                     <div class="form-group">
						 <label for="input1" class="col-sm-2 control-label">Id</label>
						 <div class="col-sm-10">
							 <input type="text" name="id" class="form-control" id="input1">
						 </div>
					 </div>
					 <div class="form-group">
						 <label for="input2" class="col-sm-2 control-label">Full Name</label>
						 <div class="col-sm-10">
							 <input type="text" name="fname" class="form-control" id="input2">
						 </div>
					 </div>
					 <div class="form-group">
						 <label for="input3" class="col-sm-2 control-label">Email</label>
						 <div class="col-sm-10">
							 <input type="text" name="email" class="form-control" id="input3">
						 </div>
					 </div>
					 <div class="form-group">
						 <label for="input4" class="col-sm-2 control-label">Semester</label>
						 <div class="col-sm-10">
							 <input type="text" name="semester" class="form-control" id="input4">
						 </div>
					 </div>
                     <div class="form-group">
						 <label for="input5" class="col-sm-2 control-label">Phone Number</label>
						 <div class="col-sm-10">
							 <input type="text" name="phone_number" class="form-control" id="input5">
						 </div>
					 </div>
					 
					 <div class="form-group">
						 <input type="submit" class="btn btn-primary col-md-2 offset-md-10" value="Submit">
					 </div>
		     </form>
         <div class="form-group submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) && !empty($_POST)){
							$fname = $_POST['fname'];
							$email = $_POST['email'];
							$semester = $_POST['semester'];
                            $phonenumber = $_POST['phone_number'];
							$res   = $database->create($fname, $email, $semester, $phone_number);
							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
        </div>
      </section>
     </main>
   </body>
</html>
