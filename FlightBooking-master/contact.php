<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home | SNTL Airlines</title>
<link rel="icon" href="img/icon.png">
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
</script>
</head>

<style type="text/css">
    .quick {
    width: 730px;
	height: 530px;
	background-color: rgba(12,35,75,0.7);
	display: inline-block;
	text-transform: uppercase;
	font-family: Verdana, arial, times;
	border-radius: 28px;
	font-size: 14px;
	color: white;
    padding: 25px;    }
    
    .page-section h3.section-subheading {
    font-size: 1.3rem;
    font-weight: 1000;
    color : #baabab;
    font-style: italic;
    font-family: "Droid Serif", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin-bottom: 2rem;
}
    
</style>

<body>
<div id="background_contain">
 <div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src="img/logo.png"/></a>  
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="status.php">Flight Status</a></li>
                <li><a href="reservation.php">Reservations</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="covid.php">Covid-19 Tracker</a></li>
				<li>
					<?php  if (isset($_SESSION['username'])) : ?>
						<a>Welcome <a style="text-transform: uppercase;" href="profile.php"><strong><?php echo $_SESSION['username']; ?></strong></a></a>
						 <a style="color: white;">|</a><a href="index.php?logout='1'" style="color: #fe28a2;"> Logout</a>
						 
					<?php endif ?>
				</li>
				
            </ul>
        </div>

<?php 
			
			//Step 1. Connect to the database.
			//Step 2. Handle connection errors
			//including the database connection file
            $db = mysqli_connect('localhost', 'rooty', '123', 'test');

			$name = $phone = $message = $email = "";

			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				// do post
				if ( isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["message"]) && isset($_POST["email"])  ) {

                    $name = $_POST['name'];
                    $phone=$_POST['phone'];
                    $message=$_POST['message'];
                    $email =$_POST['email'];

                $stmt = mysqli_query($db,"INSERT INTO contact(name,email,phone,message) VALUES ( '$name','$email','$phone','$message')");

                echo "<script> alert('Message sent! Thank you for your message :)');
                window.location.href='contact.php';
                </script>";
                  

                //Step 5: Freeing Resources and Closing Connection using mysqli	
                mysqli_close($db);
                }
            } 
?>
        
        <div id="menubar_space"></div>

    <section class="page-section">
        <div class="quick">
            <h3 id="booking_header">Contact us:</h3>
            <h3 class="section-subheading text-muted">Feel free to contact us if you experience any further problem/issues. Let us know for our better improvement. Thank you :) </h3>
                <form action="contact.php" method="post">
                    <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Please enter name *" name="name" required>
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Please enter email *" name="email"required>
                    </div>
                    <div class="form-group">
                    <label for="phone">Contact number:</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Please enter contact number *" name="phone"required>
                    </div>
                    <label for="message">Message:</label>
                    <div class="form-group form-group-textarea mb-md-0">
                    <textarea class="form-control" id="message" name ="message" placeholder="Please enter the message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    </div>
    
            <button type="submit" name = "submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </section>







 </div> <!--end background and menubar-->       
</div> 

<div class="footer">
<p>CSE311 | This website is made with &#128147; by Syed, Nafis, Tamanna & Lamia</p>
</div>

</body>

</html>