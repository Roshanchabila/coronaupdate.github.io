<!DOCTYPE html>
<html >
<head>
	<title></title>
	<!-- ************************required meta tag****************************** -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ******************************bootstrap link******************************** -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- <*********************************css link************************************** -->
	<link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\corona\css\style.php">
  
  <link rel="stylesheet"  href="C:\xampp\htdocs\corona\coronaapi.php">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body onload="fetch()">
	<!-- *****************************nav bar********************************************** -->
  <!-- <div> -->
    <!-- <style>
    a:link {
  color: red;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color: hotpink;
}

/* selected link */
a:active {
  color: blue;
}
</style>
  </div> -->
  <style >
    *{
      margin: 0px;
      padding: 0px;
      scroll-behavior: smooth;
    }
  </style>

  
	<header style="background-color: #66ff99" >
		<nav class="navbar navbar-expand-lg navbar-light " style=" text-transform: uppercase;font-weight: bold; font-size: 2rem; margin-left:7px; ">
  <a class="navbar-brand" style="color: white;" href="#">corona update</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class=" menu collapse navbar-collapse" id="navbarSupportedContent" style="text-transform: capitalize; font-size: 1.2rem;font-weight: bold;margin-right: 2px; hover: background-color:white;">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="#about" style="
        scroll-behavior: smooth;">about corona</a>
      </li>
      </li>
      <li class="nav-item" >
        <a class="nav-link " href="india.php">india corona update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventive">preventive measure</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">symptoms</a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      
    </ul>
   <!--  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
	</header>
  
  
  <section class="logo img-fluid" > 
    <div class="container">
  <div class="row">
    <div class="col img-fluid logo ">
    <img id="dj" src="image 1.png" width="400px" height="400px"  style="margin-top: 3rem; ">         
    </div>
    <div class="col" style="font-size: 2.2rem;text-transform: uppercase;font-weight: bold;text-align: center;margin-top: 7rem;color: #ff0066; border-bottom: 2px dashed black;  "><br>
      stay home,stay safe<br>
      stay home,stay live.<br>
      and fight together against corona virus.
    </div>
    
  </div>
</div>
<style>
#tbval {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tbval td, #tbval th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tbval tr:nth-child(even){background-color: #ffff;}

#tbval tr:hover {background-color: #ddd;}

#tbval th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

   
  </section> <br><br><br><hr>
  <section>
    <div>
      <h1 style="font-weight: bold;text-align: center;text-transform: uppercase; color: #993333">Corona Live update </h1>
    </div>
  </section><br><br>

  <?php

$data = file_get_contents('https://corona.lmao.ninja/v2/all');
$coronadata = json_decode($data,true);
 ?>


  <div class="container" style="text-align: center;font-weight: bold;">
  <div class="row">
    <div class="col-sm">
     <div class="card">
      <div class="card-body" style="margin-right: 2px;border-bottom:solid 5px #ffff00;">
        <h5 class="card-header">CORONAVIRUS TOTAL <br>CASES</h5><br>
        <h2 class="card-text counter"><?php echo $coronadata['cases'];  ?></h2>
    </div>
</div>
</div>

    <div class="col-sm">
      <div class="card">
      <div class="card-body" style="border-bottom: solid 5px #ff3300;">
        <h5 class="card-header">CORONAVIRUS TOTAL DEATHS</h5><br>
                <h2 class="card-text counter"><?php echo $coronadata['deaths'];  ?></h2>
        
      </div>
      </div>

    </div>

    <div class="col-sm">
      <div class="card">
      <div class="card-body" style="border-bottom: solid 5px #00ff00;">
        <h5 class="card-header">CORONAVIRUS TOTAL RECOVERED</h5><br>
              <h2 class="card-text counter" ><?php echo $coronadata['recovered'];  ?></h2>
                
        
      </div>
  </div>
    </div>
  
</div> 
</div><br><br>

<div id="flip" class="container" style="cursor: pointer;">Click For More Information</div>
<div id="panel" class="container">

   <div class="container">
  <div class="row" style="text-align: center;font-weight: bold;" alt="Second slide">
    <div class="col-sm">
      <div class="card" style="">
       <div class="card-body" style="margin-right: 2px;border-bottom:solid 5px #ffff00;" >
        <h5 class="card-header">CORONAVIRUS NEW<br> CASES</h5><br>
        <h2 class="card-text counter"><?php echo $coronadata['todayCases'];  ?></h2>
        
      </div>
      </div>
      </div>
    <div class="col-sm" >
      <div class="card
      ">
      <div class="card-body" style="border-bottom: solid 5px #ff3300;">
        <h5 class="card-header">CORONAVIRUS NEW <br>DEATHS</h5><br>
        <h2 class="card-text counter"><?php echo $coronadata['todayDeaths'];  ?></h2>
    </div>
    </div>
    </div><br><br>

    </div>
    </div><br><br>


<div class="container">
  <div class="row" style="text-align: center;font-weight: bold;" alt="Second slide">
      <div class="col" >
      <div class="card
      ">
      <div class="card-body" style="border-bottom: solid 5px #ff3300;">
        <h5 class="card-header">CORONAVIRUS ACTIVE <br>CASES</h5><br>
        <h2 class="card-text counter"><?php echo $coronadata['active'];  ?></h2>
    </div>
    </div>
    </div>
      <div class="col" >
      <div class="card
      ">
      <div class="card-body" style="border-bottom: solid 5px #ff3300;">
        <h5 class="card-header">CORONAVIRUS CRITICAL <br>CASES</h5><br>
        <h2 class="card-text counter"><?php echo $coronadata['critical'];  ?></h2>
    </div>
    </div>
    </div>
  
    
    </div>
    </div>

  

</div><BR><BR>

 



<section class="container">
  <input class="input-icons" type="text icons" id="myInput" onkeyup="myFunction()" placeholder="Search for country.." style="float: right;width: 20%;border-radius: 10px;height: 2rem; padding-left: 8px;" >
  
    <i class="fa fa-search" style="float: right;margin:4px;
    width:20px; 
cursor: pointer;color: blue;"></i>
    

  </section><br><br>
  <section class="container"><div class="table-responsive">
     <table id="tbval" class=" table table-bordered table-striped text-center container-fluid">
       <tr>
         <th>Country</th>
         <th>NewConfirmed</th>
         <th>TotalConfirmed</th>
         <th>TotalRecovered</th>
         <th>TotalDeaths</th>
         <th>NewRecovered</th>
         <th>NewDeaths</th>
         <!-- <th>Date</th> -->
       </tr>
     </table>
</div>
</section>

<section id="about">
  <div>
    <h2 style="text-transform: uppercase;
    font-weight: bold;text-align: center;color: red;" id="about">About covid-19</h2> <hr>
  </div>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img src="images.jpg" width="500" height="300" style="margin-top: 12px">
          
        </div>
        <div class="col-sm">
         
          Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.

Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.

The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).

At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments.

          
        </div>
      </div>
      
    </div>
  </section><br><br><br>
  </section>

  <section style="background-color: #f5f5f0" id="symptoms">
 <h2 style="text-align: center;text-transform: uppercase;font-weight: bold;padding-top:25px;color: #006666">symptoms of corona virus</h2><br><hr>
 <h5 style="text-align: center;text-transform: uppercase;font-weight: bold; color: #007acc"><u>Common symptoms include</u></h5><hr><br>
<section>
  <div class="container">
  <div class="row" style="text-align: center;">
    <div class="col-sm">
      <img src="symptoms/fever (1).png" height="120px" width="120px"style="text-align: center;"><br>
     <h5> FEVER</h5>
    </div>
    <div class="col-sm">
      <img src="symptoms/fatigue.png" height="120px" width="120px"style="text-align: center;"><br>
      <h5>TIREDNESS</h5>
    </div>
    <div class="col-sm">
      <img src="symptoms/cough.png" height="120px" width="120px" style="text-align: center;"><br>
     <h5> DRY COUGH</h5>
    </div>
  </div><br><hr>
  <h5 style="text-align: center;text-transform: uppercase;font-weight: bold; color: #008ae6"><u>Other symptoms include:</u></h5><hr><br>
</div><br>
  <div class="container">
  <div class="row"style="text-align: center;">
    <div class="col-sm">
      <img src="symptoms/breathing.png"height="120px" width="120px" style="text-align: center;">
      <h5>SHORTNESS OF BREATH</h5>
    </div>
    <div class="col-sm">
      <img src="symptoms/cramps.png"height="120px" width="120px" style="text-align: center;">
      <h5>ACHES AND PAIN</h5>
    </div>
    <div class="col-sm">
      <img src="symptoms/sore-throat.png"height="120px" width="120px" style="text-align: center;">
      <h5>SORE THROAT</h5>
    </div>
  </div>
</div><br><br><hr>
<h5 style="text-align: center;text-transform: uppercase;font-weight: bold; color: #0099ff"><u>very few people will report this symptoms also</u></h5><hr><br>
<div class="container">
  <div class="row"style="text-align: center;">
    <div class="col-sm">
      <img src="symptoms/diarrhea.png"height="120px" width="120px" style="text-align: center;">
      <h5>DIARRHEA</h5>
    </div>
    <div class="col-sm">
      <img src="symptoms/sneeze.png"height="120px" width="120px" style="text-align: center;">
      <h5>NAUSEA</h5>
    </div>
    <div class="col-sm">
      <img src="symptoms/runny-nose.png"height="120px" width="120px" style="text-align: center;">
      <h5>RUNNY NOSE</h5>
    </div>
  </div>
</div>
</section>

</section><br><br><br><br>


<section id="preventive">
  <h2 style="text-transform: uppercase;font-weight: bold;text-align: center;color: #990000"> preventive mearsure of covid-19</h2><br><br>
  <div>
     <div class="container">
  <div class="row"style="text-align: center;">
    <div class="col-sm">
      <img src="preventive measure/stay-home.png"height="120px" width="120px" style="text-align: center;">
      <h5 style="text-transform: capitalize;">stay home,stay safe.</h5>
    </div>
    <div class="col-sm">
      <img src="preventive measure/protection.png"height="120px" width="120px" style="text-align: center;">
      <h5 style="text-transform: capitalize;">keep a safe distance from other upto 2 meters.</h5>
    </div>
    <div class="col-sm">
      <img src="preventive measure/wash-your-hands-regularly.png"height="120px" width="120px" style="text-align: center;">
      <h5 style="text-transform: capitalize;">wash your hand regularly.</h5>
    </div>
  </div>
</div><br><br>
 <div class="container">
  <div class="row"style="text-align: center;">
    <div class="col-sm">
      <img src="preventive measure/face-mask.png"height="120px" width="120px" style="text-align: center;">
      <h5 style="text-transform: capitalize;">use mask and not touch your face or eye without hand wash.</h5>
    </div>
    <div class="col-sm">
      <img src="preventive measure/news.png"height="120px" width="120px" style="text-align: center;">
      <h5 style="text-transform: capitalize;">get update news related covid-19 to make yourself aware.</h5>
    </div>
    <div class="col-sm">
      <img src="preventive measure/infected.png"height="120px" width="120px" style="text-align: center;">
      <h5 style="text-transform: capitalize;">if you feel sinkness then directly consult a doctor or call to a helpline no.</h5>
    </div>
  </div>
</div>

    
  </div>
</section><hr><br><br><br>
<section style="background-color: #ebebe0">
<h3 style="text-transform: uppercase; text-align: center; padding-top: 3rem; ">To get first update please register</h3><br>

<section style="margin-left: 500px">
  <form class="needs-validation" novalidate action="" method="POST">
  <div class="form-row">
    <div class="col-md-4" style="margin-left: 1rem;">
    
      <label for="validationCustom01">Username</label>
      <input type="text" class="form-control" id="validationCustom01" name="Username" placeholder="Username" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      </div>
    </div><br>
    
    <div class="col-md-4 mb-3">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
        <input type="email" class="form-control" name="Email" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a email.
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom02">Password</label>
      <input type="password" class="form-control" id="validationCustom02" name="Password" placeholder="password" required >
      <div class="valid-feedback">
        Please choose a password
      </div>
    </div>
         
        </div>
      </div>
    </div>
  
  <!-- <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
    </div><br>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div><br>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div><br>
  </div><br> -->
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div><br>
  <button class="btn btn-primary alert" type="submit" name="submit">Submit form</button>
<!--   <a href="#submit" class="btn btn-primary btn-lg active" role="button" >Submit form</a>
<a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a> -->
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</section>
</section>

 
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<script >
function fetch(){
      $.get("https://api.covid19api.com/summary",

             function (data){
             // console.log(data['Countries'].length);
             var tbval = document.getElementById('tbval');

             for(var i=1; i<(data['Countries'].length); i++){
              var x = tbval.insertRow();
              x.insertCell(0);

              tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
              // tbval.rows[i].cells[0].style.background = '#e60000';
              // tbval.rows[i].cells[0].style.color='#fff';

              x.insertCell(1);

              tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['NewConfirmed'];
              // tbval.rows[i].cells[1].style.background = '#ff6600';
              

              x.insertCell(2);

              tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
              // tbval.rows[i].cells[2].style.background = '#00e600';
              

              x.insertCell(3);

              tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalRecovered'];
              // tbval.rows[i].cells[3].style.background = '#0099ff';
              

              x.insertCell(4);

              tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['TotalDeaths'];
              // tbval.rows[i].cells[4].style.background = '#ff33cc';
              

              x.insertCell(5);

              tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
              // tbval.rows[i].cells[5].style.background = '#00b3b3';
              

              x.insertCell(6);

              tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
              // tbval.rows[i].cells[6].style.background = '#00cc99';
              
               // x.insertCell(7);

              // tbval.rows[i].cells[7].innerHTML = data['Countries'][i-1]['Date'];
              // tbval.rows[i].cells[7].style.background = '#7a4a91';
              

              
           }
           }

      );

  
}
</script>

<footer>
  <h5 style="text-transform: capitalize; font-weight: bold; text-align: center; background-color: #003333;color: #ffff">&#169 copyright </h5>

</footer>


<style >
  #dj{
    animation: rotation 25s infinite linear;

  }
  @keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
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



<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("tbval");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("fast");
  });
});
  

</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>






<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



 
</body>
</html>


      


<?php


include 'coronaapi.php';

if (isset($_POST['submit'])) {
  $Username = $_POST['Username'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];



  $insertquery = "  insert into  coronacases( Username,Email,Password) values('$Username','$Email',
  '$Password')";

  $query = mysqli_query($con,$insertquery);

  if ($query) {
    ?>
     <script >
      alert("connection successful");
     </script>
     <?php
        }else{
               ?>
               <script >
                alert("No connection");
               </script>
          <?php
        }

        }
       ?>





