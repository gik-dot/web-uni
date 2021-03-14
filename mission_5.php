<?php 
  $hour = (int)strftime('%H');
  $welcome = '';
  if ($hour < 6) $welcome = 'Добрый ночи';
  elseif (($hour >= 6) && ($hour <= 12)) $welcome = 'Доброе утро';
  elseif (($hour > 12) && ($hour <= 18)) $welcome = 'Добрый день';
  elseif (($hour > 18) && ($hour <= 24)) $welcome = 'Доброй ночи';
  echo $welcome?>