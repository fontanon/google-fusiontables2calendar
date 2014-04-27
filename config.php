<?php 

	// ::auth config::
	// Google Public API Access Key. Don't forget to activate Google API for fusion tables
	// Get one and configure access and perms at https://console.developers.google.com
	$API_KEY="add yours";

	// ::fusion tables config::
	// The Fusion Tables ID (find it at fusion tables URL: the docid param)
	$TABLE_ID="add yours";

	// Name of columns to retrieve from the fusion table, separated by ','.
	// Below ones are mandatory for building the calendar, and its position sensitive.
	$COL_NAMES="summary,description,start,end,location,url";

	// Date format in the fusion table. Examples: d/M/Y, Y-M-d H:i:s, YMdTHisZ ...
	$DATE_FORMAT="add yours";

	// ::calendar config::
	// Name of your calendar
	$CAL_NAME="add yours";

	// Description of your calendar
	$CAL_DESC="add yours";

	// Timezone of your calendar. Examples: US/Pacific, Europe/Madrid
	$CAL_TZ="add yours";
?>
