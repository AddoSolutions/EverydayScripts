<?php

chdir(__DIR__);

$trelloToken = explode(":", file_get_contents("trellotoken.txt"));

$config = array(
	'standup'=>array(

		// This is the URL from which the script will load your standup template (see the example)
		// ex: https://gist.githubusercontent.com/AddoSolutions/b01df1c73d09711a3b41/raw/standup.txt
		'templateURL'=>"",

		// Your Trello API Key.  Visit: https://developers.trello.com/
		// ex:  15800xxxxxxxxxxxxxxxxxxxxxxxxxxx
		'key'=>'',

		// Your Trello API Secred (for above key)
		// ex:     9710fxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		'secret'=>'',

		// The oAuth Token that you will be generated when you request access to the script.  This is autogenerated 
		// if you use the installation method from the README
		// ex:    f3fxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		'token'=>$trelloToken[0],

		// The subsequent oAuth secret from the authorization above.  This is autogenerated 
		// if you use the installation method from the README
		// ex:      ba1xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		'osecret'=>$trelloToken[1],

		// Optional: If you don't want it to crawl every single one of your boards, you can put regex in
		// here to preg_match the titles of the boards.  If the value exists below, it only will crawl
		// the matching boards defined here.  The example crawls anything with "MyPraize" or "Lightspeed" in the title
		// ex: /MyPraize|Lightspeed/
		'boardmatch'=>""
	),
	'schedule'=>array(

		// The Webhook ID generated by the Slack Integration center
		// ex:             xoxx-21xxxxxxxx-xxxxxxxxxx-xxxxxxxxxx-xxxxxx
		'slackWebhookId'=>'',

		// The ID of the slack channel to which you want to post
		// ex:           C02SAA89B
		'slackChannel'=>''
	)
);