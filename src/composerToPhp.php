#!/usr/bin/env php
<?php
$read_file = file_get_contents('~/../composer_test.json');

print_r(json_decode($read_file, true));
?>