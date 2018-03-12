
<<<<<<< HEAD
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Dwiddder</h1> 
  <p>Where in the world is Dr. Evil? </p> 
  </div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>This is where Dr. Evil has been spotted!</h2><br>
          </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
  </div>
</div>

<div id="about" class="container-fluid">
  <div class="row">
	  <div class="col-sm-3"></div>
  <div class="col-sm-6">
	<table class="table table-striped">
    <thead>
      <tr>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
/*------MySQL COnnection---------------*/
$server = 'localhost';
$user = 'root';
$pass = 'goodyear123!@#';
$dbname = 'List';
$con = new mysqli($server, $user, $pass, $dbname);
mysql_select_db($dbname);
/*------------------------------------*/
$query = "SELECT * FROM LOCATIONS";
          $result = $con->query($query);
          if($result->num_rows > 0)
          {
            while($row = $result->fetch_assoc())
            {
              $Nick_Name = $row["Nick_Name"];
              $Locations = $row["Locations"];
              $Time_Date = $row["Time_Date"];
              $img = $row["Picture_Name"];
	      $picture = "";
	      if($img == 1)
		{
        	$picture = "glyphicon glyphicon-tree-conifer";
		}
	      elseif($img == 2){
        	$picture = "glyphicon glyphicon-cd";
		}
	      elseif($img ==3){
        	$picture = "glyphicon glyphicon-knight";
		}	
	      else{
        	$picture = "glyphicon glyphicon-apple";
	        }
            	echo "<tr>";
		echo "<td><span class=\"". $picture .  "\"></span></td>";
		echo "<td>". $Nick_Name . " reported </td>";
		echo "<td>". $Time_Date."</td>";
		echo "</tr>";
		echo "<tr>";
		   echo "<td></td>";
		echo "<td>".$Locations."</td>";
		echo "</tr>";

		}
          }
          $conn->close();

	    
?>
</tbody>
	  </table>
</div>
<div class="col-sm-6"></div>
</div>
</div>

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" title="Visit w3schools">www.w3schools.com</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 200, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 300) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
=======
>>>>>>> master
