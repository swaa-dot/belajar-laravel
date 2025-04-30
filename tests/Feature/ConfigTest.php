<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class ConfigTest extends TestCase
{
    public function test_config()
    {
      $firstname = config("contoh.name.first");
      $lastname = config("contoh.name.last");
      $email = config("contoh.email");
      $web = config("contoh.web");

      self::assertEquals("Syahwa", $firstname);
      self::assertEquals("Setyaji", $lastname);
      self::assertEquals("syahwawahyus@gmail.com", $email);
      self::assertEquals("https://www.wikipedia.com", $web);
    }
}
