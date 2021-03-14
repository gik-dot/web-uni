<?php

$rows = 10; // количество строк
$cols = 10; // количество столбцов

$table = '<table border="2">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        if ($tr===1 or $td===1){
            $table .= '<th style="color:white; background-color:red;">'. $tr*$td .'</th>'; // вычислили первую строку или столбец
        }else{
            $table .= '<td>'. $tr*$td .'</td>'; // все ячейки, кроме ячеек из первого столбца и первой строки
        }
    }
    $table .= '</tr>';
}
$table .= '</table>';
echo $table; // сделали эхо всего 1 раз
?>