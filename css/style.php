<!-- <style>
	
	

    .logo img{
    animation: ok 3s linear infinite;
    background-color: white;

  }

  @keyframes ok{
    0% { transform: rotate(0); }
    100% { transform: rotate(0); }

    .ok{
    	text-align: center;
    }
  }
  </style>
   -->



  

     

 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>

  </section><br><br>
  <section class="container"><div class="table-responsive">
      <?php
$data = file_get_contents('https://corona.lmao.ninja/v2/countries');
$coronadata = json_decode($data, true);
echo "<pre>";
print_r($coronadata)



?>
     <table id="tbval" class=" table table-bordered table-striped text-center container-fluid">
       <tr>
         <th>Country</th>
         <th>NewConfirmed</th>
         <th>TotalConfirmed</th>
         <th>TotalRecovered</th>
         <th>TotalDeaths</th>
        <th>NewDeaths</th>
        </tr>
        <tr> 
          <td><?php echo $coronadata[1]['country']; ?>
          
            
                  
      </td> 

        </tr> 

      </table>
      






            
 

