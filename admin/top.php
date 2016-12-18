<!DOCTYPE html>
<html>
<head>
	<title>Admin-панель</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Admin-панель." />
	<meta name="keywords" content="admin панель, управление сайтом, управление лендингом" />
	<link type="text/css" rel="stylesheet" href="/styles/admin.css" />
	<link rel="stylesheet" type="text/css" href="/styles/fonts.css" />
	<script type="text/javascript" src="/js/inputmask.js"></script>
	<script type="text/javascript" src="/js/jquery.inputmask.js"></script>
	<script type="text/javascript" src="/js/functions.js"></script>
</head>
<body>
<?php if (isAdmin()) { ?>
	<div id="menu">
		<a class="a" href="/admin">Главная</a>
		<a class="a" href="/admin/orders.php">Заказы</a>
		<a class="a" href="/admin/statistics.php">Статистика</a>
		<div>
			<a id="logout" class="button" href="/admin?logout=1">Выход</a>
		</div>
	</div>
<?php } ?>