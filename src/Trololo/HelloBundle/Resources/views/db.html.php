<?php
$host = 'localhost';
$user = 'asd';
$pswd = '';
$db_name = 'noobtest';
try
{
    $db = new PDO("mysql:host={$host};dbname={$db_name}", $user, $pswd);
    $db->exec('SET CHARACTER SET utf8');
    echo "ok";
}
catch (PDOException $e) {
    print "PDO: " . $e->getMessage() . "<br/>";
    die();
}

$name = $_POST['name'];
$work = $_POST['work'];
$comment = $_POST['comment'];
$query = $db->prepare("INSERT INTO articles(`name`,`work`,`comment`) VALUES (?,?,?)");
$query->execute(array($name,$work,$comment));

?>