<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Database\Factories\UserFactory;

class BookTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    public function search()
    {
        $response = $this->actingAs($this->user)->get(route('books.search', ["keyword" => "テスト"]));
        $response->assertStatus(200);
        $response->assertViewIs("テスト");
    }
}
