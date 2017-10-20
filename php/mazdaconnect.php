<?php


//Setting up the DB Connection


try 

{

$mazdapdo = new PDO('mysql:host=localhost;dbname=mazdafueltracker', 'mazdauser', 'freaky73');


$mazdapdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$mazdapdo->exec('SET NAMES "utf8"');


}

catch (PDOException $e)

{

$mazdaoutput = 'Unable to connect to the database server: ' . 
$e->getMessage();

include 'mazdaoutput.html.php';

exit();

}

$mazdaoutput = 'Database connection established.';
include 'mazdaoutput.html.php';



//Selecting data from a table in the DB


try {
$sql = 'SELECT location FROM fuel';
$result = $mazdapdo->query($sql);
}


catch (PDOException $e)

{
$error = 'Error fetching fuels: ' . $e->getMessage();
include 'mazdaerror.html.php';
exit();
}

while ($row = $result ->fetch())
{


$mazda[] = $row['location'];

}

include 'fuel.html.php';


//Create a link to the fuletracker form that is activated by a "get" data request on the variable in the query string (link).

if(isset($_GET['addfuel'])) {
include 'fueltracker.html.php';
exit();
}

//Add location into database

if (isset($_POST['location'],
$_POST['fuel_type'],
$_POST['price_per_litre'],
$_POST['litres'],
$_POST['cost'],
$_POST['trip_ab_kms'],
$_POST['odometer']
))

try {

//Prepared statement with DB query (Secure method for POST)	

$sql = 'INSERT INTO fuel SET  
location = :location,
fuel_type = :fuel_type,
price_per_litre = :price_per_litre,
litres = :litres,
cost = :cost,
trip_ab_kms = :trip_ab_kms,
odometer = :odometer';

$s = $mazdapdo->prepare($sql);//Attach to the "S" variable the PDO object linked to the Prepared $sql query.
$s->bindValue(':location', $_POST['location']); //Bind the value POSTED to the joketext field.
$s->bindValue('fuel_type',$_POST['fuel_type']);//Bind the real value to the prepared statement
$s->bindValue('price_per_litre', $_POST['price_per_litre']);
$s->bindValue('litres', $_POST['litres']);
$s->bindValue('cost', $_POST['cost']);
$s->bindValue('trip_ab_kms', $_POST['trip_ab_kms']);
$s->bindValue('odometer', $_POST['odometer']);


$s->execute();//Execute the query with the value supplied
}

catch(PDOException $e) {
$error = 'Error adding your submission:' . $e -> getMessage();
include 'mazdaerror.html.php';
exit();
 }



?>






