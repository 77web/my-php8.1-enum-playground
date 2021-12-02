<?php
declare(strict_types=1);

namespace Quartetcom\Php81Enums\Backed;

enum Language: string
{
    case PHP = 'php';
    case Java = 'java';
    case TypeScript = 'ts';
    case JavaScript = 'js';
}
