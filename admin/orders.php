<?php
	require_once "../lib/start.php";
	require_once "top.php";
	if (isAdmin()) { $orders = getOrders();
	if (isset($request["func"]) && $request["func"] == "edit") {
		$fd = getOrder($request["id"]);
	}
	else $fd = $request; ?>
	<h1><?php if (isset($fd["date_order"])) { ?>Редактировать<?php } else { ?>Добавить<?php } ?> заказ</h1>
<div id="form_order" class="form">
	<form name="form_order" action="orders.php<?php if (isset($fd["date_order"])) { ?>?func=edit&amp;id=<?=$fd["id"]?><?php } ?>" method="post">
		<div>
			<label>Цена:</label>
			<input class="inputtext" type="text" name="price" value="<?php if (isset($fd["price"]) && $fd["price"]) { ?><?=$fd["price"]?><?php } ?>" />
		</div>
		<div>
			<label>Телефон:</label>
			<input class="inputtext" type="text" name="phone" value="<?php if (isset($fd["phone"]) && $fd["phone"]) { ?><?=$fd["phone"]?><?php } ?>" />
		</div>
		<div class="check">
			<input class="checkbox" id="checkbox-1" type="checkbox" name="confirm" <?php if (isset($fd["confirm"]) || isset($fd["date_confirm"])) { ?>checked="checked"<?php }  ?> />
			<label for="checkbox-1">Подтверждён</label>
		</div>
		<div class="check">
			<input class="checkbox" id="checkbox-2" type="checkbox" name="pay" <?php if (isset($fd["pay"]) || isset($fd["date_pay"])) { ?>checked="checked"<?php }  ?> />
			<label for="checkbox-2">Оплачен</label>
		</div>
		<div class="check">
			<input class="checkbox" id="checkbox-3" type="checkbox" name="cancel" <?php if (isset($fd["cancel"]) || isset($fd["date_cancel"])) { ?>checked="checked"<?php }  ?> />
			<label for="checkbox-3">Аннулирован</label>
		</div>
		<div id="button">
			<input type="hidden" name="id" value="<?php if (isset($fd["id"])) { ?><?=$fd["id"]?><?php } ?>" />
			<input type="submit" name="<?php if (isset($fd["date_order"])) { ?>edit<?php } else { ?>add<?php } ?>" value="<?php if (isset($fd["date_order"])) { ?>Редактировать<?php } else { ?>Добавить<?php } ?>" />
		</div>
	</form>
</div>
<h1>Заказы</h1>
<?php if ($message) { ?><p class="message"><?=$message?></p><?php } ?>
<table>
	<tr>
		<td>ID</td>
		<td>Цена</td>
		<td>Телефон</td>
		<td>Дата заказа</td>
		<td>Дата подтверждения</td>
		<td>Дата оплаты</td>
		<td>Дата аннулирования</td>
		<td>Функции</td>
	</tr>
	<?php foreach ($orders as $order) { ?>
		<tr>
			<td><?=$order["id"]?></td>
			<td><?php if (is_numeric($order["price"])) { ?><?=$order["price"]?> рублей<?php } else { ?>Нет<?php } ?></td>
			<td><?=$order["phone"]?></td>
			<td><?php if ($order["date_order"]) { ?><?=date(FORMAT_DATE, $order["date_order"])?><?php } else { ?>Нет<?php } ?></td>
			<td><?php if ($order["date_confirm"]) { ?><?=date(FORMAT_DATE, $order["date_confirm"])?><?php } else { ?>Нет<?php } ?></td>
			<td><?php if ($order["date_pay"]) { ?><?=date(FORMAT_DATE, $order["date_pay"])?><?php } else { ?>Нет<?php } ?></td>
			<td><?php if ($order["date_cancel"]) { ?><?=date(FORMAT_DATE, $order["date_cancel"])?><?php } else { ?>Нет<?php } ?></td>
			<td>
				<a id="edit" href="/admin/orders.php?func=edit&amp;id=<?=$order["id"]?>">Редактировать</a>
				<br />
				<a id="delete" href="/admin/orders.php?func=delete&amp;id=<?=$order["id"]?>">Удалить</a>
			</td>
		</tr>
	<?php } ?>
</table>
<?php } else require_once "auth.php"; ?>
<?php
	require_once "footer.php";
?>