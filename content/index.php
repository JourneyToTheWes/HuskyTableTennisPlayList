<?php
namespace httpl\html\content;
use derankus\html\template\StaticPage;

$body = <<<HTML
asdfasdf
HTML;

StaticPage::createContent()
	->with(StaticPage::FIELD_TITLE, "Home")
	->with(StaticPage::FIELD_BODY, $body)
	->render();
