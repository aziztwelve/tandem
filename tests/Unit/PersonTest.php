<?php

namespace Tests\Unit;

use App\Models\Person;
use Tests\TestCase;

class PersonTest extends TestCase
{


    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $person = Person::find(1);
        $this->assertEquals(17, $person->age);
    }
}
