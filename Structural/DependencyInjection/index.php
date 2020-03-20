<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>minimarket</title>
    <meta name="description" content="Описание сайта длиной до 200 символов" />
    <meta name="keywords" content="ключевые слова для поисковика">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <!--    <link href="http://ideasburner.com/css/main.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

</head>

<?php
require 'DatabaseConfiguration.php';
require 'DatabaseConnection.php';
#require 'Tests/DependencyInjectionTest.php';

//$cnf = array("HH1", 50, "User1", "123467");
$cnf1 = "HH1";
$cnf2 = 50;
$cnf3 = "SER";
$cnf4 = "Secret";
$dbsConf1 = new \DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration($cnf1, $cnf2, $cnf3, $cnf4);
$gh = $dbsConf1 -> getHost();
$gp = $dbsConf1 -> getPort();
$gu = $dbsConf1 -> getUsername();
$gps = $dbsConf1 -> getPassword();

echo "<br>";
echo "<br>";
echo $gh, "     ", $gp;
echo "<br>";
echo "<br>";
echo $gu, "    ", $gps;
echo "<br>";
$dbsCnf = new \DesignPatterns\Structural\DependencyInjection\DatabaseConnection($dbsConf1);
$gdns = ($dbsCnf -> getDsn());

    echo "<br>";
$dddd = ($dbsCnf -> getDsn());
print $dddd;
?>