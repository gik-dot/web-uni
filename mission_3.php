<blockquote>
<?php 
  $day = strftime('%d');
  $mon = strftime('%m');
  $year = strftime('%Y');?>
  <?php echo "Сегодня $day число, $mon месяц, $year год.";?>
  <?= strftime('%Y')?>
</blockquote>