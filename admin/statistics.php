<?php
	require_once "../lib/start.php";
	require_once "top.php";
	if (isAdmin()) { ?>
	<h1>Статистика</h1>
	<div class="form" id="statistics">
		<form name="statistics" action="statistics.php" method="post">
			<div>
				<label>От:</label> <input class="inputtext" type="text" name="from" value="<?php if (isset($request["from"]))  { ?><?=$request["from"]?><?php } else { ?><?=date(FORMAT_DATE, time() - 30 * 86400)?><?php } ?>" />
			</div>
			<div>
				<label>До:</label> <input class="inputtext" type="text" name="to" value="<?php if (isset($request["to"]))  { ?><?=$request["to"]?><?php } else { ?><?=date(FORMAT_DATE)?><?php } ?>" />
			</div>
			<div>
				<label>UTM-Source:</label> <input class="inputtext" type="text" name="utm_source" value="<?php if (isset($request["utm_source"])) { ?><?=$request["utm_source"]?><?php } ?>" />
			</div>
			<div>
				<label>UTM-Campaign:</label> <input class="inputtext" type="text" name="utm_campaign" value="<?php if (isset($request["utm_campaign"])) { ?><?=$request["utm_campaign"]?><?php } ?>" />
			</div>
			<div>
				<label>UTM-Content:</label> <input class="inputtext" type="text" name="utm_content" value="<?php if (isset($request["utm_content"])) { ?><?=$request["utm_content"]?><?php } ?>" />
			</div>
			<div>
				<label>UTM-Term:</label> <input class="inputtext" type="text" name="utm_term" value="<?php if (isset($request["utm_term"])) { ?><?=$request["utm_term"]?><?php } ?>" />
			</div>
			<div>
				<label>Split:</label> <input class="inputtext" type="text" name="split" value="<?php if (isset($request["split"])) { ?><?=$request["split"]?><?php } ?>" />
			</div>
			<div>
				<input class="checkbox" id="checkbox-4" type="radio" name="log" value="AND" <?php if (isset($request["log"]) && $request["log"] == "AND") { ?>checked="checked"<?php } ?> />
				<label class="checklabel" for="checkbox-4">И</label>
			</div>
			<div>
				<input class="checkbox" id="checkbox-5" type="radio" name="log" value="OR" <?php if (isset($request["log"]) && $request["log"] == "OR") { ?>checked="checked"<?php } ?> />
				<label class="checklabel" for="checkbox-5">ИЛИ</label>
			</div>
			<div>
				<input type="submit" name="statistics" value="Вывести" />
			</div>
		</form>
	</div>
	
<?php require_once "data.php"; }
	else require_once "auth.php";
	require_once "footer.php";
?>