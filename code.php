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
</blockquote><!--Не уверен, что правильно-->

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
