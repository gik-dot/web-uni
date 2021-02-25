 <!--Задание №1-->
<blockquote>
  <?php echo strftime('Сегодня%d-%m-%Y');?>
</blockquote>

<!--Задание №2-->
<blockquote>  
<?php setlocale(LC_ALL, "russian");
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
  <?php echo 'COPYRIGHT'?>
</blockquote><!--Не уверен, что правильно-->

<!--Задание №5-->
<!--Честно, без понятия ¯\_(ツ)_/¯-->
