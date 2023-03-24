<?php
// Connect to the database
$host = 'PolarDB-sg-dza32vzc9000iv.us.west-2-amazonaws.com';
$dbname = 'ecommerce_db';
$user = 'kaamal';
$pass = 'kaamalvn2311*';

try {
  $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}

// Retrieve data from the database
$sth = $dbh->prepare("SELECT * FROM your-table-name");
$sth->execute();
$result = $sth->fetchAll();

// Display data on the HTML page
foreach ($result as $row) {
  echo "<p>" . $row['column-name'] . "</p>";
}
?>
