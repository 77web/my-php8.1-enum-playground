<?php
declare(strict_types=1);

namespace Quartetcom\Php81Enums\Tests\Basic;

use PHPUnit\Framework\TestCase;
use Quartetcom\Php81Enums\Basic\Language;

class LanguageTest extends TestCase
{
    public function test()
    {
        var_dump(Language::PHP);
        var_dump(Language::PHP->name);
        var_dump(Language::PHP !== 'PHP');
        var_dump(Language::PHP instanceof Language);
        var_dump(Language::cases());
    }
}
