<?php

use App\Models\Project;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('homepage loads successfully and displays projects', function () {
    $project = Project::factory()->create([
        'title' => 'My Awesome Front-end App',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('My Awesome Front-end App');
});

test('contact form can be submitted successfully via AJAX', function () {
    $data = [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'subject' => 'Website Inquiry',
        'message' => 'Hello, I want to build a website with you.',
    ];

    $response = $this->postJson(route('portfolio.contact'), $data);

    $response->assertStatus(200);
    $response->assertJson([
        'success' => true,
        'message' => 'Pesan Anda telah berhasil dikirim! Terima kasih.',
    ]);

    $this->assertDatabaseHas('contacts', [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'subject' => 'Website Inquiry',
        'message' => 'Hello, I want to build a website with you.',
    ]);
});

test('contact form validation fails for invalid input', function () {
    $data = [
        'name' => '',
        'email' => 'invalid-email',
        'message' => '',
    ];

    $response = $this->postJson(route('portfolio.contact'), $data);

    $response->assertStatus(422);
    $response->assertJsonValidationErrors(['name', 'email', 'message']);
});
