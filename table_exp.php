	<?php include "table.inc.php" ?>	
	<div>

				<form action='' method="POST">

				<p>количество столбцов : <input type="number" name="cols" /></p> 
				<p>количество строк : <input type="number" name="rows" /></p> 
				<p>цвет : <input type="color" name="color" /></p>
				<p><input type="submit" value="ok boomer"></p>
				
		</form>

				<?php
				if (!empty($_POST['cols']) && !empty($_POST['rows']) && !empty($_POST['color']))
  				drawTable ($cols=$_POST['cols'], $rows=$_POST['rows'], $color=$_POST['color']);	
				?>

	</div>