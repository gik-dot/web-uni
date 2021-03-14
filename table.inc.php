<?php
    function drawTable($cols, $rows, $color)
    {
        $tr=1;

        echo "<table id='red' border='0'>" ;

        while($tr<=$rows){
          echo "<tr>" ; 
          $td=1;

          while ($td<=$cols){
            echo "<td>".$tr*$td."</td>";
            $td++; 
          }
          echo "</tr>";
          $tr++ ;
        }
        echo "<style> tr:nth-child(1){ background-color:$color; } </style>";
        echo "<style> td:nth-child(1){ background-color:$color; } </style>";
        echo "</table>" ; 
    } 
?>