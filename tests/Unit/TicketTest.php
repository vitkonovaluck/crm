<?php

namespace Tests\Unit;

use App\Models\Ticket;
use PHPUnit\Framework\TestCase;

class TicketTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function getTestData()
    {
        return [
            [0, true],
            [1, false],
        ];
    }

    /**
     * @dataProvider getTestData
     */
    public function testIsNew($status, $expectedResult)
    {
        $ticket = Ticket::factory()->create([
            'status' => $status,
        ]);

        $this->assertEquals($expectedResult, $ticket->isNew());
    }
}
