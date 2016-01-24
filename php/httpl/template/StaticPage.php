<?php
namespace derankus\html\template;
require_once PHP_ROOT . '/httpl/Setup.php';
use common\template\component\TemplateField;
use common\template\Content;
/**
 * CSGO Derank template
 */
class StaticPage extends Content {
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";

	public static function getTemplateRenderContents(array $fields): string {
		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table Tennis {$fields[self::FIELD_TITLE]}</title>
	<meta charset="UTF-8" />
	<!--<link rel="shortcut icon" href="https://s3.amazonaws.com/ks_web/fru1t.me/favicon.ico" />-->
	<!--<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:400,600'>-->
	<!--<link rel="stylesheet" href="/styles/cache/raleway.css" />-->
	<link rel="stylesheet" href="/styles/global.css" />
</head>
<body>
	{$fields[self::FIELD_BODY]}
</body>
</html>
HTML;
	}

	public static function getTemplateFields_Internal(): array {
		return [
				TemplateField::newBuilder()->called(self::FIELD_BODY)->asRequired()->build(),
				TemplateField::newBuilder()->called(self::FIELD_TITLE)->asRequired()->build()
		];
	}
}
