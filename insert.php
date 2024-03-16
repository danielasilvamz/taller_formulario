<?php
include 'dbcon.php';

//Atrapar las variables desde index.php
$name=$_POST["name"];
$email=$_POST["email"];
$city=$_POST["city"];
$queja=$_POST["queja"];

//Verificar si el usuario ha presentado alguna queja previa
$consultarCliente = "select email from clientes where email = '$email'";
$resultadoExisteCliente = mysqli_query($con1,$consultarCliente);

//mysqli_num_rows -> cuenta el numero de filas devueltas por la consulta SQL
if (mysqli_num_rows($resultadoExisteCliente) == 0) {
    //Insertar valores atrapados a la base de datos 
    $insertsql = "insert into clientes(nombre,email,ciudad,queja) values('$name','$email','$city','$queja')";
    //Ejecutar inserción 
    $res = mysqli_query($con1,$insertsql);

    //Si $res es verdadero (insercion de datos exitosa)
    if($res) 
    {
        echo '<script>alert("Queja ingresada satisfactoriamente");</script>';
        mysqli_close($con1);
        echo '<script>window.location.href = "index.php";</script>';
    }
    else
        echo "Error al ingresar su queja";
}
else {
    echo '<script>alert("Lo siento, usted ya ha enviado una queja con antelación");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}


?>