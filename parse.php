<?php
require_once 'vendor/autoload.php';

use MarkdownParser\Parser;

if (php_sapi_name() === "cli") {
    if (!isset($argv[1])) {
        error("The first argument needs to be a file");
    }

    $file = $argv[1];

    try {
        outputToConsole(Parser::parseFile($file));
    } catch (InvalidArgumentException $exception) {
        error($exception->getMessage());
    }

    exit;
} else {
    $text = $_REQUEST['text'];

    echo Parser::parse($text);

    exit;
}

function outputToConsole($text)
{
    echo "\n$text\n";
}

function error($msg)
{
    outputToConsole($msg);
    exit;
}
