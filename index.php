<?php 
$title = 'Наш сайт';
$header = "$welcome, Гость!";
$id = strtolower(strip_tags(trim($_GET['id']))); ?>

<?php include "data.inc.php" ?> 
<?php include "lib.inc.php" ?> 

<!DOCTYPE html>
<html>
	<head>
		<title><? = $title ?></title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
		<?php include "cookie.inc.php" ?> 
		<?php echo "Вы зашли к нам $visit_counter раз <br>";
      		echo "Последнее посещение: $last_visit ";?>
		<?php include "top.inc.php" ?> 
		</div>

		<div id="content"> 

		<h1><? = $header ?></h1>
			<?php switch($id)
			{
				case 'about': include 'about.php'; 
				break;
				case 'contact': include 'contact.php';
				break;
				case 'table_exp': include 'table_exp.php';
				break;

				case 'mission_1': include 'mission_1.php';
				break;
				case 'mission_2': include 'mission_2.php';
				break;
				case 'mission_3': include 'mission_3.php';
				break;
				case 'mission_4': include 'mission_4.php';
				break;
				case 'mission_5': include 'mission_5.php';
				break;
				case 'mission_6': include 'mission_6.php';
				break;
				case 'mission_7': include 'mission_7.php';
				break;
				case 'mission_8': include 'mission_8.php';
				break;
				case 'mission_9': include 'mission_9.php';
				break;
				case 'mission_10': include 'mission_10.php';
				break;
				default: include 'index.inc.php';
			}
			?>	
		</div>

		<div id="nav">
		<?php include "menu.inc.php" ?> 
		</div>

		<div id="footer">
		<?php include "bottom.inc.php" ?> 
		</div>

	</body>
</html>