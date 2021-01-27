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
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Assistant');

body {
	background: #eee;
    font-family: Assistant, sans-serif;
	font-size: 20px;
}
div.padding {
  padding-top: 20px;
  padding-bottom: 20px;
}
h2{
	color: white;
	text-align: center;
}
.external-link {
    cursor: pointer;
    color: blue
} 
.center {
  margin-left: auto;
  margin-right: auto;
}
th, td {
  padding: 15px;
  width: auto;
height : auto;	

  text-align: left;
  font-family: Assistant, sans-serif;
}
th {
width: auto;
height : auto;	
background-color: hsl(0, 100%, 30%);
text-align: center;
  color: white;
}
td {
background-color:hsla(0, 100%, 70%, 0.3);
  color: white;
  font-weight: bold;
}
input {
	font-size: 20px;
	width: 50%;
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Find Flight | SNTL Airlines</title>
<link rel="icon" href="img/icon.png">
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="css/styles.css">
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
	var today = new Date();
	
	 $(function(){
	        $("#depart_date").datepicker({ dateFormat: 'yy-mm-dd', showButtonPanel: true, changeMonth: true, changeYear: true, showAnim: "slideDown" });
	    });

</script>

</head>
<body >
<div id="background_contain">
<div id="menubar-id">
        
        <div class="menubar-class">
        
        <a href="index.php"><img id="menu_logo" src="img/logo.png" alt="Delta"/></a>
            
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="status.php">Flight Status</a></li>
                <li><a href="reservation.php">Reservations</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="covid.php">Covid-19 Tracker</a></li>
				<li>
				<?php  if (isset($_SESSION['username'])) : ?>
						<a>Welcome <a style="text-transform: uppercase;"  href="profile.php"><strong><?php echo $_SESSION['username']; ?></strong></a></a>
						 <a style="color: white;">|</a><a href="index.php?logout='1'" style="color: #fe28a2;"> Logout</a>
						 
					<?php endif ?>
				</li>
            </ul>
        
        </div>
        <marquee behavior="alternate" direction="up" width="80%" ><font color="WHITE"><marquee direction="left" >
		Maintain a distance of 6 feet (2 meters) between you and others as much as possible |
		Clean your hands often | Cough or sneeze in your bent elbow - not your hands! |
		Avoid touching your eyes, nose and mouth |
		Limit social gatherings and time spent in crowded places |
		Avoid close contact with someone who is sick |
		Stay safe when you travel |
		#StaySafe 
		</marquee></marquee></font>
    
		<div class ="padding">

			<?php 
	
		//SPECIFY THE URL 
		$url1 = 'https://corona.lmao.ninja/v2/countries/Malaysia?yesterday=true&strict=true&query%20=';
		$url2 = 'https://corona.lmao.ninja/v2/countries/Brunei?yesterday&strict&query%20';
		$url3 = 'https://corona.lmao.ninja/v2/countries/China?yesterday&strict&query%20';
		$url4 = 'https://corona.lmao.ninja/v2/countries/Hong%20Kong?yesterday=true&strict=true&query%20=';
		$url5 = 'https://corona.lmao.ninja/v2/countries/India?yesterday=true&strict=true&query%20=';
		$url6 = 'https://corona.lmao.ninja/v2/countries/Indonesia?yesterday=true&strict=true&query%20=';
		$url7 = 'https://corona.lmao.ninja/v2/countries/Singapore?yesterday&strict&query%20';
		$url8 = 'https://corona.lmao.ninja/v2/countries/Taiwan?yesterday=true&strict=true&query%20=';
		$url9 = 'https://corona.lmao.ninja/v2/countries/Thailand?yesterday&strict&query%20';
		$url10 = 'https://corona.lmao.ninja/v2/countries/%20South%20Korea?yesterday=true&strict=true&query%20=';
		$url11 = 'https://corona.lmao.ninja/v2/countries/Vietnam?yesterday&strict&query%20';
		
		//CREATE NEW CURL SESSION & LINK TO URL
		$curl1 = curl_init($url1);
		$curl2 = curl_init($url2);
		$curl3 = curl_init($url3);
		$curl4 = curl_init($url4);
		$curl5 = curl_init($url5);
		$curl6 = curl_init($url6);
		$curl7 = curl_init($url7);
		$curl8 = curl_init($url8);
		$curl9 = curl_init($url9);
		$curl10 = curl_init($url10);
		$curl11 = curl_init($url11);
	

		 //MALAYSIA
		curl_setopt_array($curl1, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Malaysia?yesterday=true&strict=true&query%20=',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'Cookie: __cfduid=db4e78fbe5b4a021b672448c8e314e5a31611677929'
			),
		  ));

		  //BRUNEI
		  curl_setopt_array($curl2, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Brunei?yesterday&strict&query%20',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		  ));

		  //CHINA
		  curl_setopt_array($curl3, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/China?yesterday&strict&query%20',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		  ));
		  //HONGKONG
		  curl_setopt_array($curl4, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Hong%20Kong?yesterday=true&strict=true&query%20=',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'Cookie: __cfduid=db4e78fbe5b4a021b672448c8e314e5a31611677929'
			),
		  ));
		  //INDIA
		  curl_setopt_array($curl5, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/India?yesterday=true&strict=true&query%20=',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'Cookie: __cfduid=db4e78fbe5b4a021b672448c8e314e5a31611677929'
			),
		  ));
		  //INDONESIA
		  curl_setopt_array($curl6, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Indonesia?yesterday=true&strict=true&query%20=',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'Cookie: __cfduid=db4e78fbe5b4a021b672448c8e314e5a31611677929'
			),
		  ));
		  //SINGAPORE
		  curl_setopt_array($curl7, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Singapore?yesterday&strict&query%20',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		  ));
		  //TAIWAN
		  curl_setopt_array($curl8, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Taiwan?yesterday=true&strict=true&query%20=',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'Cookie: __cfduid=db4e78fbe5b4a021b672448c8e314e5a31611677929'
			),
		  ));
		  //THAILAND
		  curl_setopt_array($curl9, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Thailand?yesterday&strict&query%20',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		  ));
		  //Korea
		  curl_setopt_array($curl10, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/%20South%20Korea?yesterday=true&strict=true&query%20=',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
			  'Cookie: __cfduid=db4e78fbe5b4a021b672448c8e314e5a31611677929'
			),
		  ));
		  //VIETNAM
		  curl_setopt_array($curl11, array(
			CURLOPT_URL => 'https://corona.lmao.ninja/v2/countries/Vietnam?yesterday&strict&query%20',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
		  ));
		
		//Execute the cURL request with all previous settings
		$response_json1 = curl_exec($curl1);
		$response_json2 = curl_exec($curl2);
		$response_json3 = curl_exec($curl3);
		$response_json4 = curl_exec($curl4);
		$response_json5 = curl_exec($curl5);
		$response_json6 = curl_exec($curl6);
		$response_json7 = curl_exec($curl7);
		$response_json8 = curl_exec($curl8);
		$response_json9 = curl_exec($curl9);
		$response_json10 = curl_exec($curl10);
		$response_json11 = curl_exec($curl11);
		
		//Close the cURL session
		curl_close($curl1);
		curl_close($curl2);
		curl_close($curl3);
		curl_close($curl4);
		curl_close($curl5);
		curl_close($curl6);
		curl_close($curl7);
		curl_close($curl8);
		curl_close($curl9);
		curl_close($curl10);
		curl_close($curl11);

		// Translate from string to PHP array
		$response1=json_decode($response_json1, true);
		$response2=json_decode($response_json2, true);
		$response3=json_decode($response_json3, true);
		$response4=json_decode($response_json4, true);
		$response5=json_decode($response_json5, true);
		$response6=json_decode($response_json6, true);
		$response7=json_decode($response_json7, true);
		$response8=json_decode($response_json8, true);
		$response9=json_decode($response_json9, true);
		$response10=json_decode($response_json10, true);
		$response11=json_decode($response_json11, true);
		
	
	
		
		echo "<div id = container>
		<h2>COVID CASES</h2>
		<input class=form-control id=myInput type=text placeholder=Country Name..>
		<br>
		<br>
		<table class=center table table-bordered table-striped  style = height:100%;width:100%; position: absolute; top: 0; bottom: 0; left: 0; right: 0;border:1px solid>
            <thead>
                <tr>
                  
					<th> COUNTRY </th>
					<th> COUNTRY CODE </th> 
		            <th> TODAY CASES </th> 
		            <th> DEATHS </th>
		            <th> RECOVERED </th>
                </tr>
            </thead>

		<tbody id=myTable>
		<tr> 
		
		<td>", $response1['country']."</td>
		<td>KUL</td>
		<td>", $response1['todayCases']  ."</td> 
		<td>" ,$response1['deaths'] ." </td>
		<td> " ,$response1['recovered']."</td> 
		</tr>
		
		<tr> 
		
		<td>", $response2['country']." </td>
		<td>BWN</td>
		<td>", $response2['todayCases'] ."</td> 
		<td> " ,$response2['deaths']." </td>
		<td>" ,$response2['recovered'] ."</td> 
		</tr>

		<tr> 
		
		<td>", $response3['country']." </td>
		<td>WUH</td>
		<td> ",$response3['todayCases'] ."</td>
		<td> ",$response3['deaths'] ."</td>
		<td> ",$response3['recovered'] ."</td> 
		</tr>

		<tr> 
		
		<td>", $response4['country']." </td>
		<td>HKG</td>
		<td>" ,$response4['todayCases'] ."</td> 
		<td>" ,$response4['deaths'] ."</td>
		<td>" ,$response4['recovered'] ."</td> 
		</tr>

		<tr> 
		
		<td>" ,$response5['country']."</td>
		<td>MAA</td>
		<td>", $response5['todayCases'] ."</td> 
		<td>", $response5['deaths'] ."</td>
		<td>" ,$response5['recovered']." </td> 
		</tr>

		<tr> 
		
		<td>", $response6['country']. "</td>
		<td>BDO</td>
		<td>", $response6['todayCases'] ."</td> 
		<td>", $response6['deaths'] ."</td>
		<td>", $response6['recovered'] ."</td> 
		</tr>

		<tr> 
	
		<td> ",$response7['country'] ."</td>
		<td>SIN</td>
		<td>" ,$response7['todayCases']."</td> 
		<td>" ,$response7['deaths'] ."</td>
		<td> ",$response7['recovered']. "</td> 
		</tr>

		<tr> 
		
		<td> ",$response8['country'] ."</td>
		<td>TPE</td>
		<td>" ,$response8['todayCases'] ."</td> 
		<td>" ,$response8['deaths']." </td>
		<td> ",$response8['recovered']. "</td> 
		</tr>

		<tr> 
		
		<td> ",$response9['country'] ."</td>
		<td>KBV</td>
		<td> ",$response9['todayCases'] ."</td> 
		<td> ",$response9['deaths'] ."</td>
		<td> ",$response9['recovered']."</td> 
		</tr>

		<tr> 
		
		<td>", $response10['country'] ."</td>
		<td>ICN</td>
		<td> ",$response10['todayCases'] ."</td> 
		<td>" ,$response10['deaths'] ."</td>
		<td>" ,$response10['recovered']. "</td> 
		</tr>

		<tr> 
		
		<td> ",$response11['country'] ."</td>
		<td>HAN</td>
		<td>", $response11['todayCases'] ."</td> 
		<td>" ,$response11['deaths'] ."</td>
		<td> ",$response11['recovered']. "</td> 
		</tr>
		</tbody>
		</table>
		
		</div>";
	
		
?>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</div>
		<div class="footer">
  <p>CSE311 | This website is made with &#128147; by Syed, Nafis, Tamanna & Lamia</p>
</div>
</div>
</body>
</html>
