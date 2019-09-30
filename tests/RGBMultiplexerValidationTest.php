<?php

declare(strict_types=1);
include_once __DIR__ . '/stubs/Validator.php';
class RGBMultiplexerValidationTest extends TestCaseSymconValidation
{
    public function testValidateRGBMultiplexer(): void
    {
        $this->validateLibrary(__DIR__ . '/..');
    }
    public function testValidateRGBMultiplexerModule(): void
    {
        $this->validateModule(__DIR__ . '/../RGBMultiplexer');
    }
}