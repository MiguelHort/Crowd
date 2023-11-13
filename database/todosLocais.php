<?php
include("../database/conexao.php");

// Aqui ele puxa pelo menor numero da coluna id_ngc
$sql = "SELECT nomengc FROM novolocal ORDER BY id_ngc ASC LIMIT 1";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  // Saída do primeiro item
  $row = $result->fetch_assoc();
  $nomengc1 = $row["nomengc"];
} else {
  $nomengc1 = "Sem resultados";
}

// Aqui ele puxa a primeira linha da coluna nomengc
$sql = "SELECT nomengc FROM novolocal LIMIT 1 OFFSET 1";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  // Saída do primeiro item
  $row = $result->fetch_assoc();
  $nomengc2 = $row["nomengc"];
} else {
  $nomengc2 = "Sem resultados";
}

$sql = "SELECT nomengc FROM novolocal LIMIT 1 OFFSET 2";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  // Saída do primeiro item
  $row = $result->fetch_assoc();
  $nomengc3 = $row["nomengc"];
} else {
  $nomengc3 = "Sem resultados";
}

$sql = "SELECT nomengc FROM novolocal LIMIT 1 OFFSET 3";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
  // Saída do primeiro item
  $row = $result->fetch_assoc();
  $nomengc4 = $row["nomengc"];
} else {
  $nomengc4 = "Sem resultados";
}

$conexao->close();

return ['nomengc1' => $nomengc1, 'nomengc2' => $nomengc2, 'nomengc3' => $nomengc3, 'nomengc4' => $nomengc4];

?>