<?php
namespace httpl\html\content;
use common\template\ContentPageBuilder;
use httpl\html\HuskyTableTennisTemplate;

$body = <<<HTML
asdfasdf
HTML;


ContentPageBuilder::ofTemplate(HuskyTableTennisTemplate::getClass())
	->setField(HuskyTableTennisTemplate::FIELD_TITLE, "Home")
	->setField(HuskyTableTennisTemplate::FIELD_BODY, $body)
	->register();
