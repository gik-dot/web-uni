 <!--Задание №1-->
 <blockquote>
  <?php echo strftime('Сегодня %d-%m-%Y');?>
</blockquote>

<!--Задание №2-->
<blockquote>  
<?php 
  $day = strftime('%d');
  $mon = strftime('%B');
  $year = strftime('%Y');?>
</blockquote>

<blockquote>
  <?php echo 'Сегодня ', $day, ' число, ', $mon, ' месяц, ', $year, ' год.';?>
  <?= strftime('%Y')?>
</blockquote>

<!--Задание №3-->
<blockquote>
  <?php echo "Сегодня $day число, $mon месяц, $year год.";?>
  <?= strftime('%Y')?>
</blockquote>

<!--Задание №4-->
<blockquote>
  <?php define('COPYRIGHT', 'Веб-мастер');?>
  <?php echo COPYRIGHT?>
</blockquote>

<!--Задание №5-->
<blockquote>
  <?php 
  $hour = (int)strftime('%H');
  $welcome = '';
  if ($hour < 6) $welcome = 'Добрый ночи';
  elseif (($hour >= 6) && ($hour <= 12)) $welcome = 'Доброе утро';
  elseif (($hour > 12) && ($hour <= 18)) $welcome = 'Добрый день';
  elseif (($hour > 18) && ($hour <= 24)) $welcome = 'Доброй ночи';
  echo $welcome?>
</blockquote>

<!--Задание №6-->
<blockquote>
<?php
$leftMenu = ['home'=>'index.php','about'=>'about.php','contacts'=>'contact.php'];?>
<li><a href='<?= $leftMenu['home']?>'>Домой</a></li>
</blockquote>

<!--Задание №7-->
<<>
<?php $leftMenu = [
  ['link'=>'Домой', 'href'=>'index.php'],
  ['link'=>'О нас', 'href'=>'about.php'],
  ['link'=>'Контакты', 'href'=>'contact.php']
  ];?>
<li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a></li>
<li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a></li>
<li><a href='<?= $leftMenu[2]['href']?>'><?= $leftMenu[2]['link']?></a></li>
</>

<!--Задание №8-->
<blockquote>
<?php
    for ($i = 1; $i <= 50; $i++)
    {
      if($i % 2 != 0){ echo $i . "<br />";}
    }
?>
</blockquote>

<!--Задание №9-->
<blockquote>
<?php
$num = 0;
while ($var = substr('Hello', $num, 1)){
    echo $var . '<br>';
    $num++;
}
?>
</blockquote>

<!--Задание №10-->
<blockquote>
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
</blockquote>

<!--Задание №11-->
<blockquote>
<?php $leftMenu = [
  ['link'=>'Таблица', 'href'=>'table.php']
  ];?>
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<?php
					foreach ($leftMenu as $item) { // $item - внутренний массив
						echo "<ul>";
							echo "<li>";
								echo "<a href='{$item['href']}'> {$item['link']} </a>"; 
							echo "</li>";
						echo "</ul>";
					}
?>
</blockquote>

<!--Задание №12-->
<blockquote>
<?php
    function drawTable ($cols, $rows, $color){
      echo "<table border='2' bgcolor = '$color'>";
      for ($tr=1; $tr<=$rows; $tr++){ 
          echo '<tr>';
          for ($td=1; $td<=$cols; $td++){ 
              echo '<td>'. $tr*$td .'</td>';
          }
          echo '</tr>';
      }
      echo '</table>';
      }
?>
<?php
  drawTable (10, 10, 'gray');
?>
</blockquote>