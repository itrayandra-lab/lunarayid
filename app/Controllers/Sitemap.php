<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Sitemap extends Controller
{
    public function generate()
    {
        $pages = [
            ['loc' => base_url('/'), 'priority' => '1.0'],
            ['loc' => base_url('/about'), 'priority' => '0.8'],
            ['loc' => base_url('/services'), 'priority' => '0.8'],
            ['loc' => base_url('/contact'), 'priority' => '0.7'],
        ];

        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($pages as $page) {
            $xml .= '<url>';
            $xml .= '<loc>' . esc($page['loc']) . '</loc>';
            $xml .= '<priority>' . esc($page['priority']) . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';

        $file = WRITEPATH . '../public/sitemap.xml'; 
        file_put_contents($file, $xml);

        return "Sitemap berhasil dibuat di public/sitemap.xml";
    }
}
