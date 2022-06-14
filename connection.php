<?php
//Conexão com o Banco de dados
function connection(){
   // $servername = getenv('Host');
    //$username = getenv('Username');
    //$password = getenv('Password');
    //$database = getenv('Database');
    $servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "derasq3ycsmz8542";
    $password = "y6xfzm8fs7nr34ro";
    $database = "ratuff2rowij3xi9";

try {
$conn =  new PDO("mysql:host=$servername;database=$database;charset=utf8", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;

} catch (PDOException $e) {
    echo "Conexão falhou! error: " . $e->getMessage();
}

}

?>
