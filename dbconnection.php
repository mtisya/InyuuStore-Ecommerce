<?php
$pdo = new PDO('mysql:dbname=instore; host=mysql', 'instore', 'mutisya', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];