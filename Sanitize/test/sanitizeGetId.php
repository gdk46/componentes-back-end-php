<?php
use Sanitize\Sanitize;

// side effect: loads a file Saniteze var
require "../src/Sanitize.php";

$clear = new Sanitize();


$returnSaniteze         = $clear->sanitizeGetId($_GET['id']);
$returnSanitezeDebugger = $clear->sanitizeGetId($_GET['id'], True);


echo "value: {$returnSaniteze}, Debugger: ({$returnSanitezeDebugger})";