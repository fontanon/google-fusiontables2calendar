<?php
	require 'vendor/autoload.php';
	include('./config.php');

	$GFT_QUERY_URI = "https://www.googleapis.com/fusiontables/v1/query?sql=";

	$query_uri = $GFT_QUERY_URI."SELECT%20".rawurlencode($COL_NAMES)."%20FROM%20".$TABLE_ID."&key=".$API_KEY;
	$response = \Httpful\Request::get($query_uri)->send();

	$calendar = array(
		"name" => $CAL_NAME,
		"description" => $CAL_DESC,
		"timezone" => $CAL_TZ
	);

	$events = array();
	foreach ($response->body->rows as $row) {
		$dtstart = date_create_from_format($DATE_FORMAT, $row[2]);
		$dtend = date_create_from_format($DATE_FORMAT, $row[3]);

		$event = array(
			"uid" => uniqid(),
			"summary" => $string = trim(preg_replace('/\s\s+/', ' ', $row[0])),
			"description" => $string = trim(preg_replace('/\s\s+/', ' ', $row[1])),
			"dtstart" => $dtstart->format('YmdHis'),
			"dtend" => $dtend->format('YmdHis'),
			"location" => $string = trim(preg_replace('/\s\s+/', ' ', $row[4])),
			"url" => $row[5]
		);
		array_push($events, $event);
	}

	$template_loader = new Twig_Loader_Filesystem('./templates');
	$twig = new Twig_Environment($template_loader);
	$ics = $twig->render('calendar.ics', array('events' => $events, "calendar" => $calendar));

	if (isset($_GET['debug'])) 
	{
		echo "<pre>" . $ics . "</pre>";
		exit;
	} 
	else 
	{
		header('Content-type: text/calendar; charset=utf-8');
		header('Content-Disposition: inline; filename=gft_calendar.ics');
		echo $ics;
		exit;
	}
?>
