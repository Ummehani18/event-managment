<html>
  <head>
    <title>Contact/eternity</title>
    <link rel="stylesheet" type="text/css" href="stylephp.css">
  </head>
  <body>
    <div id="container">
     <div class="message">
      <p>Your wedding journey begins here!<br>
        We've received your inquiry and will be in touch to discuss your special day.</p>
     </div>
    </div>
  </body>
</html>
<?php
$host="localhost";
$dbname="projectcon";
$username="root";
$password="";
try{
   $pdo=new
   PDO("mysql:host=$host;dbname=$dbname",$username,$password);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
     $Name=$_POST["Name"];
     $Number=$_POST["Number"];
     $Month=$_POST["Month"];
     $Location=$_POST["Location"];
     $sql="INSERT INTO
     contact(Name,Number,Month,Location)VALUE(:Name,:Number,:Month,:Location)";
     $stmt=$pdo->prepare($sql);
     $stmt->execute(['Name'=>$Name,'Number'=>$Number,'Month'=>$Month,'Location'=>$Location]);
     echo "";  
    }
}catch(PDOException $e)
{
  echo "error".$e->getMessage();
}
?>