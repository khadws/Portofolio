<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'SaaS Analytics Dashboard',
            'description' => 'Sebuah dashboard analitik SaaS interaktif dengan visualisasi data real-time, grafik interaktif, dan kustomisasi widget menggunakan Chart.js.',
            'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS', 'Chart.js'],
            'image_url' => null,
            'demo_url' => 'https://saas-dashboard-demo.test',
            'github_url' => 'https://github.com/khaidirud/saas-dashboard',
        ]);

        \App\Models\Project::create([
            'title' => 'Fashion Commerce Storefront',
            'description' => 'Halaman katalog e-commerce modern dengan fitur filter kategori instan, pencarian cepat, sorting produk, serta keranjang belanja interaktif.',
            'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS', 'Alpine.js'],
            'image_url' => null,
            'demo_url' => 'https://fashion-commerce-demo.test',
            'github_url' => 'https://github.com/khaidirud/fashion-commerce',
        ]);

        \App\Models\Project::create([
            'title' => 'CollabTask - Kanban Board',
            'description' => 'Aplikasi manajemen tugas bergaya Kanban Board yang mendukung fitur drag-and-drop, manajemen anggota tim, dan notifikasi aktivitas.',
            'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS', 'SortableJS'],
            'image_url' => null,
            'demo_url' => 'https://collabtask-demo.test',
            'github_url' => 'https://github.com/khaidirud/collabtask-board',
        ]);
    }
}
