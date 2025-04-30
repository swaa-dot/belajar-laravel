<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AppEnvirontmentTest extends TestCase
{
    public function aetest()
    {
       $name="wawa";
       
       self::assertEquals("wawa", $name);
    }
}
