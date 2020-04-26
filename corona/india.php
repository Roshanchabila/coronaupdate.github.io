 <!DOCTYPE html >
<html >
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ******************************bootstrap link******************************** -->
	

	<!-- <*********************************css link************************************** -->
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\corona\css\style.php">
  
  <link rel="stylesheet"  href="C:\xampp\htdocs\corona\coronaapi.php">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css" href="index.php">
 <meta charset="utf-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
 
  
</head>
<body >


	<!-- **************************nav bar started -->
<header style="background-color: #66ff99" >
	
		<nav class="navbar navbar-expand-lg navbar-light " style=" text-transform: uppercase;font-weight: bold; font-size: 2rem; margin-left:7px; ">
  <a class="navbar-brand" style="color: white;" href="#">corona update</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" menu collapse navbar-collapse" id="navbarSupportedContent" style="text-transform: capitalize; font-size: 1.2rem;font-weight: bold;margin-right: 2px; hover: background-color:white;">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">about corona</a>
      </li>
      </li>
      <li class="nav-item" >
        <a class="nav-link " href="index.php">world corona update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">preventive measure</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#index.php">symptoms</a>
      </li>
      
      </li>
      <li class="nav-item">
        <a class="nav-link " href="index.php">helpline</a>
      </li>
    </ul>
   <
  </div>
</nav>
	</header>



	<!-- **************************nav bar ended*********************************** -->



<!-- *******************************css code for numbering in table started**************************** -->
	<style>
.css-serial  {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.css-serial  td, .css-serial  th {
  border: 1px solid #ddd;
  padding: 8px;
}

.css-serial  tr:nth-child(even){background-color: #ffff;}

.css-serial  tr:hover {background-color: #ddd;}

.css-serial  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>


<!-- *******************************css code for numbering in table ended**************************** -->

<!-- *******************************main body part started************************************** -->

<section style="margin-top: 4rem;margin-bottom: 2rem;">
	<div>
		<h2 style="text-transform: uppercase;font-weight: bold;text-align: center;color: #003399;
		">india corona live update</h2>
	</div>
</section>

<div class="container my-4">

  
            <!-- Section: Live preview -->
            <section>
      
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Statewise Update</a>
                </li>
                <!-- <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ex1</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link " id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ex2</a>
                </li> -->
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show table-responsive table-fixed" id="home" role="tabpanel" aria-labelledby="home-tab"><br><br>


                  <?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coronadata = json_decode($data, true);


  ?>

  <div class="container" style="text-align: center;font-weight: bold;">
  <div class="row">
    <div class="col-sm">
     <div class="card">
      <div class="card-body" style="margin-right: 2px;border-bottom:solid 5px #ffff00;">
        <h5 class="card-header">CORONAVIRUS TOTAL <br>CASES</h5><br>
        <h2 class="card-text"><?php echo $coronadata['statewise'][0]['confirmed'];  ?></h2>
    </div>
</div>
</div>

    <div class="col-sm">
      <div class="card">
      <div class="card-body" style="border-bottom: solid 5px #ff3300;">
        <h5 class="card-header">CORONAVIRUS TOTAL DEATHS</h5><br>
        <h2 class="card-text"><?php echo $coronadata['statewise'][0]['deaths'];  ?></h2>
        
      </div>
      </div>

    </div>

    <div class="col-sm">
      <div class="card">
      <div class="card-body" style="border-bottom: solid 5px #00ff00;">
        <h5 class="card-header">CORONAVIRUS TOTAL RECOVERED</h5><br>
        <h2 class="card-text"><?php echo $coronadata['statewise'][0]['recovered'];  ?></h2>
        
      </div>
  </div>
    </div>
  
</div> 
</div><br><br>

                 

                	<table class=" css-serial table table-striped table-bordered " style="position: sticky;" id="table" >
				
				<tr style="position: sticky;"  >
					<th >SR.NO</th>
				 <th>State</th>
				  <th>Statecode</th>
				 <th>Last Updated</th>
                 <th>Active</th>
                 <th>Confirmed</th>
                 <th>Deaths</th>
                 <th>Recovered</th>
                 </tr>

            <?php


            $data = file_get_contents('https://api.covid19india.org/data.json');
            $coronalive = json_decode($data, true);

            $statescount = count($coronalive['statewise']);

             $i=1;
             while($i < $statescount){

             	?>

             	<tr>
             		<td style="width: 9px;" ></td>
                    <td><?php echo $coronalive['statewise'][$i]['state']; ?></td>
             		<td><?php echo $coronalive['statewise'][$i]['statecode']; ?></td>
             		<td><?php echo $coronalive['statewise'][$i]['lastupdatedtime']; ?></td>
             	    <td><?php echo $coronalive['statewise'][$i]['active']; ?></td>
             		<td><?php echo $coronalive['statewise'][$i]['confirmed'];  ?></td>
             		<td><?php echo $coronalive['statewise'][$i]['deaths']; ?></td>
             		<td><?php echo $coronalive['statewise'][$i]['recovered']; ?></td>
             	</tr>
              

              <?php
             	$i++;
             
	             }
             ?>
         </table>



                 </div>
               <!--  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab"></div> -->
              </div>
      
            </section>
            <!-- Section: Live preview -->
      
          </div>
          <style >
          	
          </style>
          


<!-- ************************************main body part ended**************************************** -->





<style>
	.css-serial {
  counter-reset: serial-number;  /* Set the serial number counter to 0 */
}

.css-serial td:first-child:before {
  counter-increment: serial-number;  /* Increment the serial number counter */
  content: counter(serial-number);  /* Display the counter */
}
</style>



<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

<style >
  #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: blue; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 50px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
  scroll-behavior: smooth;
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>

<script >
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>
<footer>
  <h5 style="text-transform: capitalize; font-weight: bold; text-align: center; background-color: #003333;color: #ffff">&#169 copyright corona</h5>

</footer>




   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

