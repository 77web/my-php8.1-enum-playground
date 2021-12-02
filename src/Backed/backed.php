<?php

declare(strict_types=1);

use Quartetcom\Php81Enums\Backed\Language;

require __DIR__.'/../../vendor/autoload.php';

var_dump(Language::PHP);
var_dump(Language::PHP->name);
var_dump(Language::PHP->value);
var_dump(Language::PHP !== 'php');
var_dump(Language::PHP->value === 'php');
var_dump(Language::PHP instanceof Language);
var_dump(Language::from('php'));
var_dump(Language::cases());
