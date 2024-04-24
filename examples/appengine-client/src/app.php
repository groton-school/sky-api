<?php

define('PUBLIC_PATH', __DIR__ . '/../public');
define('WORKFLOW_PATH', __DIR__);

$endpoint = @parse_url($_SERVER['REQUEST_URI'])['path'];
if (is_file(PUBLIC_PATH . $endpoint)) {
    require PUBLIC_PATH . $endpoint;
} elseif (is_readable(WORKFLOW_PATH . $endpoint . '.php')) {
    require WORKFLOW_PATH . $endpoint . '.php';
} elseif (is_file(PUBLIC_PATH . $endpoint . '/index.php')) {
    require PUBLIC_PATH . $endpoint . '/index.html';
} else {
    require __DIR__ . '/404.php';
}
