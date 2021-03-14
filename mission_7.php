<?php $leftMenu = [
  ['link'=>'Домой', 'href'=>'index.php'],
  ['link'=>'О нас', 'href'=>'about.php'],
  ['link'=>'Контакты', 'href'=>'contact.php']
  ];?>
<li><a href='<?= $leftMenu[0]['href']?>'><?= $leftMenu[0]['link']?></a></li>
<li><a href='<?= $leftMenu[1]['href']?>'><?= $leftMenu[1]['link']?></a></li>
<li><a href='<?= $leftMenu[2]['href']?>'><?= $leftMenu[2]['link']?></a></li>