<?php

require_once __DIR__ . '/vendor/autoload.php';

// Файл не включается напрямую
// Он загрузится автоматически благодаря автозагрузке
use Hexlet\Php\Runner;
//use Runner\run;

print_r(Runner\run());
