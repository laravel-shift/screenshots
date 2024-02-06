<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Shift;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\ShiftController
 */
class ShiftControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $shifts = Shift::factory()->count(3)->create();

        $response = $this->get(route('shift.index'));

        $response->assertOk();
        $response->assertViewIs('shift.index');
        $response->assertViewHas('shifts');
    }

    /**
     * @test
     */
    public function show_displays_view()
    {
        $shift = Shift::factory()->create();

        $response = $this->get(route('shift.show', $shift));

        $response->assertOk();
        $response->assertViewIs('shift.show');
        $response->assertViewHas('shift');
    }
}
