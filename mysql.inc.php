<?php

// Identifiants de connexion à la bdd

$host = "localhost";
$user = "adeterminer";
$password = "choisirunmdp";
$base = "nomdelabase";
$table = "bmf_suivi_2017"; // bmf_suivi_2017
if ($table == "bmf_test") echo "BMF_TEST -- BMF_TEST -- BMF_TEST";

$link = mysqli_connect($host, $user, $password, $base);

if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}