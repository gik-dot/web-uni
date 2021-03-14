<?php $visit_counter = 0;
if(isset($_COOKIE['visitCounter'])) 
{
  $visit_counter = $_COOKIE['visitCounter'];
  }
    $visit_counter ++;
    $last_visit = '';

    if(isset($_COOKIE['lastVisit'])) 
          $last_visit=date('d-m-Y H-i-s',$_COOKIE['lastVisit']);
              setcookie("visitCounter", $visit_counter);
              setcookie("lastVisit", time());
  ?>

  <html >
    <head>
      <title>Последнийвизит</title>
      <meta charset=”utf-8”>
    </head>
  <body>
    <h1>Счетчик посещений</h1>
        <?php echo "Вы зашли к нам $visit_counter раз <br>";
              echo "Последнее посещение: $last_visit ";?>
  </body>

  </html>