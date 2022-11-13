<?php

namespace Tests\Unit;

use App\Models\Ticket;
use Illuminate\Foundation\Testing\WithFaker;
use PHPUnit\Framework\TestCase;

class TicketTest extends TestCase
{

    use WithFaker;

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
