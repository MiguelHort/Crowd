<?php

// código 1 //

// include("conexao.php");

// Recebe os valores
// $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
// $email = mysqli_real_escape_string($conexao, trim($_POST['email']));

// $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
// $cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
// $cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));

// $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
// $seguranca = password_hash($senha, PASSWORD_DEFAULT);

// Valida o email
// $sql = "select count(*) as total from usuarios where email = '$email'";
// $result = mysqli_query($conexao, $sql);
// $row = mysqli_fetch_assoc($result);

// Valida o usuario como já existente
// if($row['total'] == 1) {
// 	$_SESSION['usuario_existe'] = true;
// 	header('Location: index.html');
// 	exit;
// }

// Insere os valores no banco
// $sql = "INSERT INTO usuarios (nome,email,telefone,cidade,cep,senha) 
// VALUES ('$nome', '$email', '$telefone', '$cidade', '$cep', '$seguranca')";

// Executa se for verdadeiro
// if($conexao->query($sql) === TRUE) {
// 	$_SESSION['status_cadastro'] = true;
// 	$conexao->close();

// 	header('Location: index.html');
// }

// exit;


// incluido verificação de email e nome já cadastrados // - alterar valores sql

include("conexao.php");

// Recebe os valores
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$cidade = mysqli_real_escape_string($conexao, trim($_POST['cidade']));
$cep = mysqli_real_escape_string($conexao, trim($_POST['cep']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$seguranca = password_hash($senha, PASSWORD_DEFAULT);

// Valida o email
$sqlEmail = "SELECT COUNT(*) AS total FROM usuarios WHERE email = '$email'";
$resultEmail = mysqli_query($conexao, $sqlEmail);
$rowEmail = mysqli_fetch_assoc($resultEmail);

// Valida o usuário como já existente pelo email
if ($rowEmail['total'] == 1) {
    $_SESSION['usuario_existe_email'] = true;
}

// Valida o usuário como já existente pelo nome
$sqlNome = "SELECT COUNT(*) AS total FROM usuarios WHERE nome = '$nome'";
$resultNome = mysqli_query($conexao, $sqlNome);
$rowNome = mysqli_fetch_assoc($resultNome);

// Valida o usuário como já existente pelo nome
if ($rowNome['total'] == 1) {
    $_SESSION['usuario_existe_nome'] = true;
}

// Verifica se tanto o email quanto o nome já foram cadastrados
if ($_SESSION['usuario_existe_email'] && $_SESSION['usuario_existe_nome']) {
    $_SESSION['usuario_existe_email_nome'] = true;
    header('Location: index.html');
    exit;
}

// Se apenas o email existir
if ($_SESSION['usuario_existe_email']) {
    $_SESSION['mensagem_alerta'] = 'O e-mail já está em uso.';
    header('Location: index.html');
    exit;
}

// Se apenas o nome existir
if ($_SESSION['usuario_existe_nome']) {
    $_SESSION['mensagem_alerta'] = 'O nome já está em uso.';
    header('Location: index.html');
    exit;
}

// Insere os valores no banco
$sql = "INSERT INTO usuarios (nome,email,telefone,cidade,cep,senha) 
VALUES ('$nome', '$email', '$telefone', '$cidade', '$cep', '$seguranca')";

// Executa se for verdadeiro
if ($conexao->query($sql) === TRUE) {
    $_SESSION['status_cadastro'] = true;
    $conexao->close();
    header('Location: index.html');
}

exit;
?>
