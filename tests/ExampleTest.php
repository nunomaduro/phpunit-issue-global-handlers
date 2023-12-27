<?php

declare(strict_types=1);

namespace Tests;

use Throwable;
use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    // App Test Code:

    public function setUp(): void
    {
        $this->bootMyApp();
    }

    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function test_that_false_is_false(): void
    {
        $this->assertFalse(false);
    }

    // Vendor code:

    private static $booted = false;

    private function bootMyApp(): void
    {
        if (self::$booted === false) {
            // boot my app just once...

            set_exception_handler(static function (Throwable $throwable) : void {
                // Do app level stuff, send to exception apps, etc...
            });

            self::$booted = true;
        }
    }
}
