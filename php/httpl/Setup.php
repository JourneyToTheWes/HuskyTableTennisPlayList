<?php
namespace httpl;
require_once PHP_ROOT . "/common/Autoload.php";
use common\Autoload;
use common\session\Session;
Autoload::setup(PHP_ROOT, false);
Session::setup("httpl");
