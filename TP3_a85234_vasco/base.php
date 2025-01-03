<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "n!d6#!8";
$dbname = "file_upload"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


    if (file_exists($target_file)) {
        echo "Desculpe, o ficheiro já existe.";
        $uploadOk = 0;
    }

    if ($_FILES["file"]["size"] > 500000000) {
        echo "Desculpe, o seu ficheiro é demasiado grande.";
        $uploadOk = 0;
    }


    // if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "txt") {
    //     echo "Desculpe, apenas ficheiros JPG, JPEG, PNG, txt & GIF são permitidos.";
    //     $uploadOk = 0;
    // }


    if ($uploadOk == 0) {
        echo "<script>alert('Desculpe, o seu ficheiro não foi carregado.');</script>";
    } else {

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            //echo "<script>alert('O ficheiro " . basename($_FILES["file"]["name"]) . " foi carregado.');</script>";
            echo "<script>alert('O ficheiro " . basename($_FILES["file"]["name"]) . " foi carregado.');</script>";

            $fileName = basename($_FILES["file"]["name"]);
            $filePath = $target_file;
            $sql = "INSERT INTO files (name, path) VALUES ('$fileName', '$filePath')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Registo criado com sucesso');</script>";
            } else {
                echo "<script>alert('Erro: " . $sql . "\\n" . $conn->error . "');</script>";
            }
        } else {
            echo "<script>alert('Desculpe, houve um erro ao carregar o seu ficheiro.');</script>";
        }
    }

}

$conn->close();
?>