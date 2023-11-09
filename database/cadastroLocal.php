<?php

include("conexao.php");

$user_nomengc = $_POST['nomengc'];
$user_descricao = $_POST['descricao'];
$user_cep = $_POST['cep'];
$user_telefone = $_POST['telefone'];
$user_email = $_POST['email'];
$user_site = $_POST['site'];
$user_picture_input = $_FILES['pictureInput'];

// Verifica se o arquivo foi enviado
if(isset($_FILES['pictureInput'])){
    $ext = pathinfo($_FILES['pictureInput']['name'], PATHINFO_EXTENSION);
    $new_name = uniqid() . '.' . $ext;
    $destination = '../img/' . $new_name;

    // Move o arquivo para a pasta desejada
    if(move_uploaded_file($_FILES['pictureInput']['tmp_name'], $destination)){
        $sql = mysqli_prepare($conexao, "INSERT INTO novolocal (nomengc, descricao, cep, telefone, email, site, pictureInput) VALUES ('$user_nomengc', '$user_descricao', '$user_cep', '$user_telefone', '$user_email', '$user_site', '$destination')");
        $executar = mysqli_stmt_execute($sql);
        echo "Imagem carregada com sucesso e nome da imagem inserido no banco de dados.";
    } else {
        echo "Erro ao mover o arquivo.";
    }
} else {
    echo "Nenhum arquivo enviado";
}

?>