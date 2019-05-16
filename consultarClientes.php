<?php
date_default_timezone_set( 'America/Argentina/Tucuman' );
include( "../conexiones/conectarCliente.php" );
$con = conectar();

$clienteId = $_POST['clienteId'];
$array=[];
//consultamos las deudas
$queryFallidas = "SELECT * FROM clientes";
$rFallidas = mysqli_query( $con, $queryFallidas )or die( mysqli_error() );

while($row_Fallidas = mysqli_fetch_object( $rFallidas )){
    
    array_push($array,$row_Fallidas); 
}

$row_Fallidas = mysqli_fetch_object( $rFallidas );

//print_r($row_Fallidas);
echo json_encode($array);
?>