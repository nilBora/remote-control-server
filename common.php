<?php
if (!session_id()) {
	session_start();
}
define('ROOT_DIR', __DIR__.'/');
define('COMMON_DIR', ROOT_DIR.'Common/');
define('BUNDLE_DIR', COMMON_DIR.'bundle/');
define('TEMPLATE_DIR', ROOT_DIR.'templates/');
define('CRONS_DIR', ROOT_DIR.'crons/');
define('CRON_SOCKET_TMP_DIR', CRONS_DIR.'socket_tmp/');
define('CORE_DIR', COMMON_DIR.'core/');

/* SOCKET CONFIG START */
define('SOCKET_SERVER_HOST', 'remote.control.server.local');
define('SOCKET_SERVER_PORT', '8000');
/* SOCKET CONFIG END */

require_once "config.php";

require_once CORE_DIR.'Dispatcher.php';
require_once COMMON_DIR.'Controller.php';
require_once CORE_DIR.'Route.php';
require_once COMMON_DIR.'Object.php';
require_once COMMON_DIR.'Core.php';
require_once CORE_DIR.'ValuesObject.php';

require_once BUNDLE_DIR.'ServerSocket/ServerSocket.php';

$db = new PDO(
    $GLOBALS['db'],
    $GLOBALS['user'],
    $GLOBALS['password']
);

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$res = $db->query('SET NAMES utf8');

$core = Core::getInstance();
$core->db = Object::factory($db);


