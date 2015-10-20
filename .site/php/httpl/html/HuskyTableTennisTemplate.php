<?php
namespace httpl\html;
use common\template\TemplateInterface;

require_once $_SERVER['DOCUMENT_ROOT'] . '/.site/php/httpl/Setup.php';

/**
 * Class HuskyTableTennisTemplate
 * Defines the Fru1tMe template.
 */
class HuskyTableTennisTemplate implements TemplateInterface {
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getFields() {
		return [self::FIELD_BODY, self::FIELD_TITLE];
	}

	public static function getClass() {
		return 'httpl\html\HuskyTableTennisTemplate';
	}

	public static function getRenderContents($fields) {
		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Husky Table Tennis</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600'
		  rel='stylesheet'
		  type='text/css'>
	<link href="/.site/styles/compiled/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
	{$fields[self::FIELD_BODY]}
</body>
</html>
HTML;
	}
}
