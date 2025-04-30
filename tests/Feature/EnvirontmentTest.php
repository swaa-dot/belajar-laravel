<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvirontmentTest extends TestCase
{
    public function test_example()
    {
        env("Youtube").var_dump(env("YT"));

        self::assertEquals("app", env("YT"));
    }

    public function test_example2()
    {
        $test = env("instagram", "IG");
        self::assertEquals("IG", $test);
    }
}
