<?php
$dsn = "mysql:dbname=shows;host=info-titania";
$user = 'sebcandau';
$password = 'v2qgzwxH';
$pdo = new PDO($dsn, $user, $password);

$sql = "SELECT * FROM series WHERE title = :title";
$query = $pdo->prepare($sql);
if ($query->execute(['title' => 'Dexter'])) {
    foreach ($query as $row) {
        echo 'Nom : ' . $row['title']. ", année de début: " . $row['year_start'] . "\n";
    }
}

?>