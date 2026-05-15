<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Product;

class SEOController extends Controller {
    public function sitemap() {
        header("Content-Type: application/xml; charset=utf-8");

        $productModel = new Product();
        $products = $productModel->all();

        echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

        // Static Pages
        $pages = ['', '/sklep', '/konfigurator', '/serwis', '/blog', '/kontakt', '/o-nas'];
        foreach ($pages as $page) {
            echo '  <url>' . PHP_EOL;
            echo '    <loc>' . SITE_URL . $page . '</loc>' . PHP_EOL;
            echo '    <changefreq>weekly</changefreq>' . PHP_EOL;
            echo '  </url>' . PHP_EOL;
        }

        // Products
        foreach ($products as $product) {
            echo '  <url>' . PHP_EOL;
            echo '    <loc>' . SITE_URL . '/produkt/' . $product['slug'] . '</loc>' . PHP_EOL;
            echo '    <changefreq>monthly</changefreq>' . PHP_EOL;
            echo '  </url>' . PHP_EOL;
        }

        echo '</urlset>';
    }

    public function robots() {
        header("Content-Type: text/plain; charset=utf-8");

        echo "User-agent: *" . PHP_EOL;
        echo "Allow: /" . PHP_EOL;
        echo "Disallow: /admin/" . PHP_EOL;
        echo "Disallow: /panel/" . PHP_EOL;
        echo "Disallow: /koszyk/" . PHP_EOL;
        echo PHP_EOL;
        echo "Sitemap: " . SITE_URL . "/sitemap.xml" . PHP_EOL;
    }
}
