<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles1.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <title>Advanced</title>
</head>
<body>
    
<div class="container-fluid">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">PREWORK DAY 2<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        </ul>
    </div>
    </nav><!--END NAV-->
    
    <!--BROWSERABFRAGE-->
    
    
    <?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer" ;
}
else if( preg_match( "/Netscape/i", "$viewer"  ) )
{
$browser = "Netscape";
}
elseif(preg_match('/Chrome/i' , "$viewer"))
{
$browser = 'Google Chrome'; 
}
else  if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla" ;
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'Apple Safari';
}
$platform = "An unidentified OS!";
if( preg_match( "/Windows/i", "$viewer" ) )
{
$platform = "Windows!";
}
else if ( preg_match( "/Linux/i", "$viewer"  ) )
{
$platform = "Linux!";
}
else if  ( preg_match( "/Mac/i", "$viewer" ) )
{
$platform = "Mac!";
}
echo("You are using $browser on $platform");
?>
<!--ENDE BROWSERABFRAGE-->
    
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
    
  <!--FORMS-->  
    
<div class="parallax_section2 parallax_image">
  <div class="row">
    <div class="card border-dark">
              <form action="preworkday2.php" method ="POST">
                    Name: <input type="text"  name="name" />
                    Age: <input type ="text" name="age" />
                <input  type="submit" name="submit"  />
              </form>
        <?php
        if( isset($_POST['submit']))
        {
        if( $_POST["name" ] || $_POST["age"] )
        {
        echo "Welcome ". $_POST[ 'name']. "<br />";
        echo "You are " . $_POST['age']. " years old.";
        }
        }
        ?>
    </div><!--END CARD P3-->
    
    <!--CREATE FUNCTIONS-->
    <div class="card border-dark">
      <?php
      function writeMessage()
      {
      echo  "Hello World";
      };
      writeMessage();
      ?>
    </div><!--END CREATE FUNCTIONS-->
    
    
    <!--FUNCTIONS WITH PARAMETERS-->
    <div class="card border-dark">
      <?php
      function addFunction($num1, $num2)
      {
      $sum = $num1 + $num2;
      echo  "Sum of the two numbers is : $sum";
      }
      addFunction(10, 20);
      ?>
    </div>
    
    <!--FUNCTIONS RETURNING VALUE-->
    <div class="card border-dark">
      <?php
      function add1Function($num1, $num2)
      {
      $sum = $num1 + $num2;
      return  $sum;
      }
      $return_value = add1Function(10, 20);
      echo  "Returned value from the function : $return_value";
      ?>
    </div>
    
    <!--CREATING DATABASE AND TABLE-->
    <!--<div class="card border-dark">
      
      <?php
$servername = "localhost";
$username = "root"; 
$password = "" ; 
$dbname = "my_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE $dbname";
if  (mysqli_query($conn, $sql)) {
   echo "Database $dbname created successfully! \n";
} else {
   echo "Error creating database $dbname: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
      
      <?php
$servername = "localhost";
$username = "root";
$password = "" ; 
$dbname = "my_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error() . "\n");
}
// sql to create table
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)" ;
if (mysqli_query($conn, $sql)) {
   echo "Table Users created successfully"  . "\n";
} else {
   echo  "Error creating table: " . mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>
    </div><!--END CREATING DATABASE AND TABLE-->
    
    <!--INSERT DATA-->
    <!--<div class="card border-dark">
      
      
<?php
$servername = "localhost";
$username = "root";
$password = "" ; 
$dbname = "my_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error() . "\n");
}
/* sql to create table, here as a structure reference
$sql = "CREATE TABLE Users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(20) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
*/ 
$sql = "INSERT INTO Users (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@doe.com')";
if (mysqli_query($conn, $sql)) {
    echo "New record created.\n";
} else {
   echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);
?>
    
    </div><!--END INSERT DATA-->
    <!--CREATING HTML INPUT FORM-->
    <div class="card border-dark">
    </div><!--END CREATING HTML INPUT FORM-->
    
    <div class="card border-dark">
    </div>
    
    <div class="card border-dark">
    </div>
    
  </div><!--END ROW-->
</div><!--END PARALLAX 2-->

  <!--END FORMS-->
  
  
<div class="parallax_section1 parallax_image">
</div><!--END PARALLAX-->


    <!--THE GET METHOD-->
    
    
 


  
    

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <!--<a class="navbar-brand" href="#">Andreas Pirkner</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">PREWORK DAY 2</a><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Follows</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="mailto:andreas.pirkner@gmx.net" >Andreas Pirkner 2020</a>
        </li> 
        </ul>
    </div>
    </nav><!--END FOOTER-->
    
    
</div><!--END CONTAINER-->
 

    <script type="application/x-javascript" src="scripts/script.js"><![CDATA[
   //]]>
   </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
</body>
</html>