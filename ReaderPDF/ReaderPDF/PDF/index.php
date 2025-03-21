<?php
session_start();
//Carrega o Composer
include './vendor/autoload.php';

// Instanciar para ler o PDF
$parser = new \Smalot\PdfParser\Parser();

// Chamar o Metodo para ler o arquivo
$pdf = $parser->parseFile('documents/extrato.pdf'); 

//Inclui em $Text o texto do PDF
$text = $pdf->getText();

// Escreve o Texto
echo nl2br($text);

//$cabecalho = 'Mes';

//Array
//$dados = [
//  [    
//        'id' => '1',
//        'mes' => date('m'),
//   ],
//   [    
//        'id' => '2',
//       'mes' => date('m'),
//],
//];

//Abrir o arquivo
//$ArquivoCSV = fopen('file.csv', 'w');

//Escrevendo o cabeçalho
//fputcsv($ArquivoCSV, $cabecalho, ';');

// Foreach

//foreach ($dados as $mensal){
//    fputcsv($ArquivoCSV, $mensal, ';');
//}

// Fechar arquivo
//fclose($ArquivoCSV);
