<?php

//Convert Month ('m') for Month ('Março')'
$Month = date('m');
switch ($Month) {
    case '01': $MonthName = 'Janeiro'; break;
    case '02': $MonthName = 'Fevereiro'; break;
    case '03': $MonthName = 'Março'; break;
    case '04': $MonthName = 'Abril'; break;
    case '05': $MonthName = 'Maio'; break;
    case '06': $MonthName = 'Junho'; break;
    case '07': $MonthName = 'Julho'; break;
    case '08': $MonthName = 'Agosto'; break;
    case '09': $MonthName = 'Setembro'; break;
    case '10': $MonthName = 'Outubro'; break;
    case '11': $MonthName = 'Novembro'; break;
    case '12': $MonthName = 'Dezembro'; break;
    default: $MonthName = 'Mês inválido';
}