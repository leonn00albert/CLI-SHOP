<?php
require_once __DIR__ . "/vendor/autoload.php";
use UI\Nav;

$nav = new Nav;
$nav->clearConsole();
$nav->displayMenu();

// Read user input and handle it
while ($choice = trim(fgets(STDIN))) {
    $nav->handleInput($choice);
}
