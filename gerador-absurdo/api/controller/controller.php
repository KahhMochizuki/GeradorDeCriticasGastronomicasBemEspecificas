<?php
header('Content-Type: application/json; charset=utf-8');
require_once '../model/GerarModel.php';

$model = new GerarModel();
$parte = isset($_GET['parte']) ? $_GET['parte'] : null;

$resposta = [
    "gerador" => "Gerador de Críticas Gastronômicas Dramáticas",
    "modo" => "dinamico"
];

if ($parte === 'sujeito') {
    $resposta['sujeito'] = $model->getSujeitoAleatorio();
} elseif ($parte === 'descricao') {
    $resposta['descricao'] = $model->getDescricaoAleatoria();
} elseif ($parte === 'acaoTextura') {
    $resposta['acaoTextura'] = $model->getAcaoTexturaAleatoria();
} else {
    $partes = $model->gerarFraseCompleta();
    $resposta['sujeito'] = $partes['sujeito'];
    $resposta['descricao'] = $partes['descricao'];
    $resposta['acaoTextura'] = $partes['acaoTextura'];
}

echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
?>