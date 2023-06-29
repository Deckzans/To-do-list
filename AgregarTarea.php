<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=pruebatecnica', 'root', '');
    // echo "Conexión Establecida...";
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}

if(isset($_POST['Agregar_Tarea'])){ 

    $tarea = ($_POST['tarea']);
    $sql='INSERT INTO tareas (tarea) value(?)';
    $sentencia = $conn->prepare($sql);
    $sentencia->execute([$tarea]);
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $completada = (isset($_POST['completada'])) ? 1 : 0;

    $sql="UPDATE tareas SET completada=? WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$completada,$id]);


}

if(isset($_GET['id'])){ 

    $id=$_GET['id'];
    $sql="DELETE FROM tareas WHERE id=?";
    $sentencia=$conn->prepare($sql);
    $sentencia->execute([$id]);
}

$sql = "SELECT * FROM tareas";
$registros=$conn->query($sql); 

// print_r($resultados)




?>