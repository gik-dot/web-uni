<!DOCTYPE html>
<html>
	<head>
		<title>Контакты</title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<span class="slogan">Знания - сила</span>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>Обратная связь</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<h3>Адрес</h3>
			<p></p>
			<h3>Задайте вопрос</h3>
			<form action='' method='post'>
				<label>Тема письма: </label><br />
				<input name='subject' type='text' size="50"/><br />
				<label>Содержание: </label><br />
				<textarea name='body' cols="50" rows="10"></textarea><br /><br />
				<input type='submit' value='Отправить' />
			</form>	
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<h2>Навигация по сайту</h2>
			<!-- Меню -->
			<ul>
				<li><a href='index.php'>Домой</a></li>
				<li><a href='about.php'>О нас</a></li>
				<li><a href='contact.php'>Контакты</a></li>
			</ul>
			<!-- Меню -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Веб-мастер, 2017
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>