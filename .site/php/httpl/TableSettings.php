<?php
namespace httpl;


class TableSettings {
	const DESCRIPTION = "description";
	const RULES = "rules";

	const TOURNAMENT = "Tournament";
	const PRACTICE = "Practice";
	const GAMES = "Games";

	public static $list = array(
			"Tournament" => array(
					self::DESCRIPTION => "Set style full games",
					self::RULES => "Games to 11. Best 3 out of 5 games. Switch every 2 serves."),
			"Partner Practice" => array(
					self::DESCRIPTION => "Practice with a partner.",
					self::RULES => "30 minute time limit."),
			"Game - King of the Court" => array(
					self::DESCRIPTION => "Practice with a partner.",
					self::RULES => "30 minute time limit."),
	);
}
