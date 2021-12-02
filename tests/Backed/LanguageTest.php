<?php
declare(strict_types=1);

namespace Quartetcom\Php81Enums\Tests\Backed;

use PHPUnit\Framework\TestCase;
use Quartetcom\Php81Enums\Backed\Language;

class LanguageTest extends TestCase
{
    public function test()
    {
        $this->assertEquals('PHP', Language::PHP->name);
        $this->assertEquals('php', Language::PHP->value);
        $this->assertTrue(Language::PHP !== 'PHP');
        $this->assertTrue(Language::PHP instanceof Language);
        $cases = Language::cases();
        $this->assertCount(4, $cases);
        $this->assertSame($cases[1], Language::PHP);
        $this->assertSame(Language::PHP, Language::from('php'));
    }
}
