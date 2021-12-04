<?php
declare(strict_types=1);

namespace Quartetcom\Php81Enums\Method;

enum Language
{
    case Java;
    case PHP;
    case TypeScript;
    case JavaScript;

    public static function getBackendLanguages(): array
    {
        return [
            self::Java,
            self::PHP,
        ];
    }

    public static function getFrontendLanguages(): array
    {
        return [
            self::TypeScript,
            self::JavaScript,
        ];
    }

    public function getTargetDomain(): string
    {
        return match($this) {
            self::PHP, self::Java => 'backend',
            self::JavaScript, self::TypeScript => 'frontend',
        };
    }
}
