<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio home page with projects.
     */
    public function index(): View
    {
        $projects = Project::latest()->get();

        return view('beranda', compact('projects'));
    }

    /**
     * Store a contact message from the form submission.
     */
    public function storeContact(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Contact::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Pesan Anda telah berhasil dikirim! Terima kasih.',
        ]);
    }
}
