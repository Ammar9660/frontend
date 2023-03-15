<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="stylesheet" href="style2.css">
        <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    </head>

    <header>
	<h1>Doctor<span>Patient</span></h1>
		<nav>
	
		<ul> 
			<li><a href="index3.php">Add/Delete Doctor</a></li>
			<li><a href="viewdoctor.php">View Doctors</a></li>
			<li><a href=" viewpatients.php">View Patients</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>

  			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>

		</ul>
	</nav>
</header>

    <body>
        <div class="container">
            <div class="form-box">
                <div class="header">
	                <h1>Add Doctor</h1>
                 </div>

                <form method="post" action="Doctor.php" class="Aform">

                    <?php include ('../datalayer/errors.php')?>

                    <div class="input-group">
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="addID" placeholder="Doctor ID">
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="addname" placeholder="Doctor Name">
                        </div>

						<div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="addAddress" placeholder="Address">
                        </div>

						<div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="addContactNumber" placeholder="Contact Number">
                        </div>

						<div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="addEmail" placeholder="Email Address">
                        </div>

						<div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="password" name="addpassword" placeholder="Password">
                        </div>

						<div class="input-field">
                            <input type="text" placeholder="Category">

							<select name="addcategory" class="xd">
								<option value="bone" >bones</option>
	   							<option value="heart">heart</option>
	   							<option value="Dentistry">Dentistry</option>
	   							<option value="MentalHealth">Mental Health</option>
	   							<option value="Surgery">Surgery</option>

	   						</select>
                        </div>
                        
                        <div class="btn-field">
		                <button type="submit" name="Add" class="btnA">Add Doctor</button>
	                    </div>
                        
                    </div>
                </form>
                
            </div>
                   <div class="headerAD">
	                <h2>Delete Doctor</h2>
                 </div>

<form method="post" action="index3.php" class="delete">

	<div class="input-field">
         <i class="fa-solid fa-user"></i>
        <input type="text" name="deleteID" placeholder="Doctor ID">
    </div>

	<div class="btn-field">
		<button type="submit" name="Delete" class="btnA2">Delete</button>
	</div>

</form>
        </div>
    </body>
</html>