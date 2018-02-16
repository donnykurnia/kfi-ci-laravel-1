<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Incoming;
use App\Outgoing;
use App\Stock;

class StockTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $product_name = 'Macbook';
        $incoming = Incoming::create(['product_name' => $product_name, 'qty' => 10]);
        $this->assertEquals(10, $incoming->qty);
    }
}
