<?php
declare(strict_types=1);

namespace Quartetcom\Php81Enums\Tests\Method;

use PHPUnit\Framework\TestCase;
use Quartetcom\Php81Enums\Method\Language;

class LanguageTest extends TestCase
{
    public function testStaticMethods()
    {
        $this->assertCount(2, Language::getBackendLanguages());
        $this->assertCount(2, Language::getFrontendLanguages());
    }
}
