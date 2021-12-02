<?php
declare(strict_types=1);

namespace Quartetcom\Php81Enums\Tests\Basic;

use PHPUnit\Framework\TestCase;
use Quartetcom\Php81Enums\Basic\Language;

class LanguageTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('PHP', Language::PHP->name);
        try {
            $v = Language::PHP->value;
        } catch (\Throwable $e) {
            $this->assertTrue(str_contains($e->getMessage(), 'Undefined property'));
        }
        $this->assertTrue(Language::PHP !== 'PHP');
        $this->assertTrue(Language::PHP instanceof Language);
        $cases = Language::cases();
        $this->assertCount(4, $cases);
        $this->assertSame($cases[1], Language::PHP);
    }
}
