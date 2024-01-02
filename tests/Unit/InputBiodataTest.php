<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class InputBiodataTest extends TestCase
{
  /**
   * A basic unit test example.
   */


  public function test_split_data(): void
  {
    $data = "CUT MINI 28 BANDA ACEH";
    preg_match('/(.*?)(\d+)(.*)/', $data, $matches);
    [$text, $name, $age, $city] = $matches;
    $name = trim($name);
    $age = trim($age);
    $city = strtoupper($city);

    # handle city
    $city = trim(preg_replace('/THN|TH|TAHUN/', '', $city));

    $this->assertEquals('CUT MINI', $name);
    $this->assertEquals('28', $age);
    $this->assertEquals('BANDA ACEH', $city);
  }
}
