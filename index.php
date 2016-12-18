<?php
	require_once "lib/start.php";

	if (!isset($_SESSION["camp_id"]) || !$_SESSION["camp_id"]) {
		$data = array();
		$data["ip"] = ip2long($_SERVER["REMOTE_ADDR"]);
		$data["utm_source"] = isset($request["utm_source"])? $request["utm_source"] : null;
		$data["utm_campaign"] = isset($request["utm_campaign"])? $request["utm_campaign"] : null;
		$data["utm_content"] = isset($request["utm_content"])? $request["utm_content"] : null;
		$data["utm_term"] = isset($request["utm_term"])? $request["utm_term"] : null;
		$camp_id = getCampID($data);
		if (!$camp_id) {
			$data["ref"] = isset($_SERVER["HTTP_REFERER"])? $_SERVER["HTTP_REFERER"] : null;
			$data["date"] = time();
			$camp_id = addCamp($data);
		}
		$_SESSION["camp_id"] = $camp_id;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Создание лендингов на заказ</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Заказ на создание лендинга." />
	<meta name="keywords" content="заказ лендинга, создание лендинга" />
	<meta name="viewport" content="width-device-width, initial-scale-1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="/styles/main.css" />
	<link rel="stylesheet" type="text/css" href="/styles/fonts.css" />
	<link rel="stylesheet" type="text/css" href="/styles/slider.css" />
	<link rel="stylesheet" type="text/css" href="/fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="/js/inputmask.js"></script>
	<script type="text/javascript" src="/js/jquery.inputmask.js"></script>
	<script type="text/javascript" src="/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/js/functions.js"></script>
	<script type="text/javascript" src="/js/jquery.lwtCountdown-1.0.js"></script>
	<script type="text/javascript" src="/js/misc.js"></script>
	<script type="text/javascript" src="/js/slowscroll.js"></script>
	<script type="text/javascript" src="/js/menu.js"></script>
	<script type="text/javascript" src="/js/slider.js"></script>
</head>
<body>
	<div class="container">
		<div id="header">
			<img src="/images/bellanding.png" alt="bellanding">
			<div class="phones">
				<div class="number">
					<p>+375 33 525-36-25</p>
					<img src="/images/mts.png" alt="мтс">
				</div>
				<div class="number">
					<p>+375 33 525-36-25</p>
					<img src="/images/velcom.png" alt="велком">
				</div>
			</div>
			<div class="email">
				<p>info<span>@</span>bellanding.by</p>
			</div>
		</div>
		<div class="both"></div>
		<div id="top_nav">
			<a href="javascript://0" onclick="slowScroll('#slider-wrap')">Услуги</a>
			<a href="javascript://0" onclick="slowScroll('#icon-wrap')">Нащи преимущевства</a>
			<a href="javascript://0" onclick="slowScroll('#how_work')">Порядок работы</a>
			<a href="javascript://0" onclick="slowScroll('#portfolio')">Наши работы и цены</a>
			<a href="javascript://0" onclick="slowScroll('#guarantee')">Гарантия</a>
			<a class="order go">Оформить заявку</a>
		</div>
		<div id="main">
			<h1>Landing Page <span>под ключ</span></h1>
			<h2>без предоплаты и с гарантией результата</h2>
			<p><a class="go">заказать звонок</a></p>
			<div id="stock">
				<h3>Акция!</h3>
				<p>
					Оставте заявку сейчас и получите </br>
					месяц поддержки в подарок
				</p>
				<div id="countdown_dashboard">
					<p class="stock_title">
						До конца акции осталось
					</p>
					<div class="dash days_dash">
						<span class="dash_title">дни</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
					<div class="dash hours_dash">
						<span class="dash_title">часы</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
					<div class="dash minutes_dash">
						<span class="dash_title">минуты</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
					<div class="dash seconds_dash">
						<span class="dash_title">секунды</span>
						<div class="digit">0</div>
						<div class="digit">0</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="main-wrap">
		<div id="slider-wrap">
			<div id="slider">
				<div class="slide"><img src="images/slider_icon/edit.jpg"/></div>
				<div class="slide"><img src="images/slider_icon/mobile.jpg"/></div>
				<div class="slide"><img src="images/slider_icon/verstka.jpg"/></div>
			</div>
		</div>
		<div id="icon-wrap">
			<div class="icon-row">
				<h4>Наши преимущества</h4>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/campaign_timing.png" alt="Сроки разработки до 14 дней!" /></p>
					<p>
						Сроки разработки<br>
						до 14 дней
					</p>
				</div>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/case.png" alt="Делаем все под ключ" /></p>
					<p>Делаем все под ключ</p>
				</div>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/1.png" alt="Работа без предоплаты" /></p>
					<p>Работа без предоплаты</p>
				</div>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/seo.png" alt="Бесплатное создание рекламной кампании" /></p>
					<p>
						Бесплатное создание<br>
			 			рекламной кампании
			 		</p>
				</div>
			</div>
			<div class="both"></div>
			<div class="icon-row">
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/split.png" alt="Проводим SPLIT-тестирование" /></p>
					<p>
						Проводим<br/>
						SPLIT-тестирование
					</p>
				</div>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/clean_code.png" alt="Высокое качество работ" /></p>
					<p>Высокое качество работ</p>
				</div>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/care.png" alt="Забота о каждом клиенте" /></p>
					<p>Забота о каждом клиенте</p>
				</div>
				<div class="icon-cell">
					<p class="pimg"><img src="images/icon/adaptive.png" alt="Адаптивный код" /></p>
					<p>Адаптивный код</p>
				</div>
			</div>
		</div>
		<div class="both"></div>
		<div id="how_work">
			<h4>Порядок работы</h4>
			<div class="step">
				<div class="img">
					<img src="/images/step1.png" alt="Шаг 1"/>
				</div>
				<div class="text">
					<h5><span>1.</span> Согласуйте</h5>
						<h6>план проекта</h6>
					<p>
						Вы оставляете заявку на сайте. Мы созваниваемся с Вами
						и консультируем Вас, опираясь на специфику Вашего бизнеса.
						Выслушываем Ваши предложения и пожелания. Готовим прототип
						на их основе, в который Вы можете вносить коррективы.
					</p>
					<a class="go" alt="заказать звонок">заказать звонок</a>
				</div>
			</div>
			<div class="both"></div>
			<div class="step second">
				<div class="text">
					<h5><span>2.</span> Одобрите работу</h5>
					<p>
						Делаем полностью лендинг, в который Вы также можете вносить коррективы. Размещаем его в интернете. Настраиваем рекламные компании. Так же, по Вашему желанию, устанавливаем дополнительный системы для увеличение конверсии (смс оповещение, онлайн-консультат, сервис обратного звонка)
					</p>
				</div>
				<div class="img">
					<img src="/images/step2.png" alt="Шаг 2"/>
				</div>
			</div>
			<div class="both"></div>
			<div class="step">
				<div class="img">
					<img src="/images/step3.png" alt="Шаг 3"/>
				</div>
				<div class="text">
					<h5><span>3.</span> Получайте прибыль</h5>
					<p>
						Запускаем рекламу и получаем Вам первых клиентов. Вы оплачиваете стоимость лендинга, а мы присылаем все исходники, даём доступ к уже работающей рекламной кампании и к первым клиентам.
					</p>
					<a class="go" alt="заказать звонок">заказать звонок</a>
				</div>
			</div>
			<div class="both"></div>
		</div>
		<div id="portfolio">
			<h4>Примеры	наших работ</h4>
			<div class="table">
				<div class="row">
					<div class="cell">
						<div class="site">
							<a href="images/works/site_1.png">
								<img src="images/works/site_1_s.png" alt="" />
								<div class="title"></div>
							</a>
						</div>
						<div class="table">
							<div class="row">
								<div class="cell">Общая стоимость:</div>
								<div class="cell">300 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Цена заявки:</div>
								<div class="cell">6 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Заявок в неделю:</div>
								<div class="cell">20</div>
							</div>
							<div class="row">
								<div class="cell">Срок разработки:</div>
								<div class="cell">10 дней</div>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="site">
							<a href="images/works/site_2.png">
								<img src="images/works/site_2_s.png" alt="" />
							</a>
						</div>
						<div class="table">
							<div class="row">
								<div class="cell">Общая стоимость:</div>
								<div class="cell">350 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Цена заявки:</div>
								<div class="cell">5 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Заявок в неделю:</div>
								<div class="cell">32</div>
							</div>
							<div class="row">
								<div class="cell">Срок разработки:</div>
								<div class="cell">8 дней</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<div class="site">
							<a href="images/works/site_3.png">
								<img src="images/works/site_3_s.png" alt="" />
							</a>
						</div>
						<div class="table">
							<div class="row">
								<div class="cell">Общая стоимость:</div>
								<div class="cell">280 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Цена заявки:</div>
								<div class="cell">9 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Заявок в неделю:</div>
								<div class="cell">10</div>
							</div>
							<div class="row">
								<div class="cell">Срок разработки:</div>
								<div class="cell">5 дней</div>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="site">
							<a href="images/works/site_4.png">
								<img src="images/works/site_4_s.png" alt="" />
							</a>
						</div>
						<div class="table">
							<div class="row">
								<div class="cell">Общая стоимость:</div>
								<div class="cell">390 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Цена заявки:</div>
								<div class="cell">12 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Заявок в неделю:</div>
								<div class="cell">20</div>
							</div>
							<div class="row">
								<div class="cell">Срок разработки:</div>
								<div class="cell">11 дней</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="cell">
						<div class="site">
							<a href="images/works/site_5.png">
								<img src="images/works/site_5_s.png" alt="" />
							</a>
						</div>
						<div class="table">
							<div class="row">
								<div class="cell">Общая стоимость:</div>
								<div class="cell">280 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Цена заявки:</div>
								<div class="cell">9 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Заявок в неделю:</div>
								<div class="cell">10</div>
							</div>
							<div class="row">
								<div class="cell">Срок разработки:</div>
								<div class="cell">5 дней</div>
							</div>
						</div>
					</div>
					<div class="cell">
						<div class="site">
							<a href="images/works/site_6.png">
								<img src="images/works/site_6_s.png" alt="" />
							</a>
						</div>
						<div class="table">
							<div class="row">
								<div class="cell">Общая стоимость:</div>
								<div class="cell">390 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Цена заявки:</div>
								<div class="cell">12 рублей</div>
							</div>
							<div class="row">
								<div class="cell">Заявок в неделю:</div>
								<div class="cell">20</div>
							</div>
							<div class="row">
								<div class="cell">Срок разработки:</div>
								<div class="cell">11 дней</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="consultation">
			<h4>Консультация<br>
				Ведущего маркетолога
			</h4>
			<div class="text">
				<h5>
					Получите рекомендации по увеличению<br>
					продаж
				</h5>
				<h5>
					Как привлечь новых клиентов и сохранить<br>
					старых
				</h5>
				<h5>
					А также, как быстро окупится сайт и начнет<br>
					приносить чистую прибыль
				</h5>
				<a class="go" alt="получить консультацию">Получить консультацию</a>
			</div>
			<div class="img">
				<img src="images/consultation.png" alt="консультация" />
			</div>
		</div>
		<div id="guarantee">
			<h4>Гарантия</h4>
			<div class="img">
				<img src="/images/garanty.png" alt="Гарантия">
			</div>
			<div class="text">
				<p>
					Мы гарантируем наивысшее качество своей работы. Но подобные гарантии дают все. Поэтому мы делаем очень просто: не требуем никакой предоплаты, не требуем даже денег на рекламный бюджет. Мы просто всё делаем, а потом показываем результат в виде эффективного лендинга, анализа проведённых SPLIT-тестов, полностью настроенной и оптимизированной рекламной кампании и реальных клиентов. По этой причине мы боимся не получить оплату, поскольку Вам самим будет невыгодно отказаться от всего этого. Однако, если Вам не понравится, то Вы сможете отказаться от лендинга и не платить за него.
					<br><br>
					Согласитесь, что это очень выгодное предложение для Вас, так как Вы не рискуете ни копейкой.
				</p>
			</div>
		</div>
	</div>
		<div id="footer">
			<h4>
				Если у вас<br>
				ОСТАЛИСЬ ВОПРОСЫ<br>
				<span>
					Звоните прямо сейчас или закажите бесплатную консультацию
				</span><br>
			</h4>
			<a class="go" alt="заказать">заказть</a>
			<h4>
				+375 33 525-36-25 mts
				<br>
				+375 33 525-36-25 velcom
			</h4>
		</div>
	</div>
	<div id="modal_form">
      <span id="modal_close"><img src="/images/close_icon.png" alt="закрыть"></span>
      <h5>мы вам перезвоним<br>
      	через несколько минут
      </h5>
      <form name="order" action="#" method="post">
      	<div>
      		<input type="text" name="phone" placeholder="Телефон">
      	</div>
      	<div>
      		<input type="submit" name="order" value="Отправить">
      	</div>
      </form>
	</div>
	<div id="overlay"></div>
	<?php if ($message) { ?>
		<script type="text/javascript">
			alert("<?=$message?>");
		</script>
	<?php } ?>
</body>
</html>