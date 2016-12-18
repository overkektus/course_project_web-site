<?php
	require_once "../lib/start.php";
	require_once "top.php";
	if (isAdmin()) { ?>
	<h1 id="global_stat">Общая статистика</h1>
	<?php require_once "data.php"; ?>
<?php
	} else require_once "auth.php";
	require_once "footer.php";
?>