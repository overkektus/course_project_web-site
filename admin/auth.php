<div class="form" id="auth">
	<h1>Вход в Admin-панель</h1>
	<?php if ($message) { ?><p class="message"><?=$message?></p><?php } ?>
	<form name="auth" action="index.php" method="post">
		<div>
			<label>Логин:</label> <input class="inputtext" type="text" name="login" />
		</div>
		<div>
			<label>Пароль:</label> <input class="inputtext" type="password" name="password" />
		</div>
		<div>
			<input class="button" type="submit" name="auth" value="Войти" />
		</div>
	</form>
</div>