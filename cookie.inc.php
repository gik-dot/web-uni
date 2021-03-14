<?php $visit_counter = 0;
  if(isset($_COOKIE['visitCounter'])) 
  {
    $visit_counter = $_COOKIE['visitCounter'] ;
  }

  $visit_counter++;$last_visit = '';
  if(isset($_COOKIE['lastVisit']))
    $last_visit = date('d-m-Y H-i-s',$_COOKIE['lastVisit']);
        setcookie("visitCounter", $visit_counter);
        setcookie("lastVisit", time());
?>
