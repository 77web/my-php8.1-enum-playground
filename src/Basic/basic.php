<?php

use Quartetcom\Php81Enums\Basic\Language;

require __DIR__.'/../../vendor/autoload.php';

var_dump(Language::PHP);
var_dump(Language::PHP->name);
var_dump(Language::PHP !== 'PHP');
var_dump(Language::PHP instanceof Language);
var_dump(Language::cases());
