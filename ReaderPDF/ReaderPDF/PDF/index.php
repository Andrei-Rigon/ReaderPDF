<?php
session_start();
//Carrega o Composer
include './vendor/autoload.php';

// Instanciar para ler o PDF
$parser = new \Smalot\PdfParser\Parser();

// Chamar o Metodo para ler o arquivo
$pdf = $parser->parseFile('documents/extrato.pdf'); 

//Inclui em $Text o texto do PDF
$_SESSION['text'] = $pdf->getText();
$Text = $pdf->getText();


//Pega o texto e Insere em 
$WageText = $Text; 

if (preg_match('/CR\.FL\.PAG\.DEB\.EMP\s*([\d.,]+)/',$WageText, $match)) {
    $Wage = $match[1]; // O valor do saldo será "1.188,53"
    $_SESSION['Wage'] = $Wage;
} else {
    $_SESSION['InformativeSalary'] = 'Salario não encontado';
}

//Pega o Texto e Insere em Period
$PeriodText = $Text;
$Filtro = '/(\d{2}\/d{2}\/d{4})\s*-\s*(\d{2}\/\d{2}\/\d{4})/';

if (preg_match($Filtro,$PeriodText,$matches)){
    $DataInicial = $matches[1];
    $DataFinal   = $matches[2];

    $_SESSION['DataInicial'] = $DataInicial;
    $_SESSION['DataFinal'] = $DataFinal;
} else {
    $_SESSION['InformativeData'] = 'Date not found ';
}

echo$DataFinal;
echo($DataInicial);











// Escreve o Texto
//echo nl2br($Text);

