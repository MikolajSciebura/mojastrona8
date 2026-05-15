<?php

namespace App\Models;

use App\Core\Model;

class Product extends Model {
    protected $table = 'products';

    public function all() {
        if (!$this->db) {
            return [
                ['id' => 1, 'name' => 'MSTech Extreme Gaming R1', 'slug' => 'mstech-extreme-gaming-r1', 'price' => 8999.00, 'is_pc' => 1, 'image' => 'pc1.png', 'stock' => 5],
                ['id' => 2, 'name' => 'AMD Ryzen 7 7800X3D', 'slug' => 'amd-ryzen-7-7800x3d', 'price' => 1749.00, 'is_pc' => 0, 'image' => 'cpu1.png', 'stock' => 10],
                ['id' => 3, 'name' => 'NVIDIA RTX 4080 Super', 'slug' => 'nvidia-rtx-4080-super', 'price' => 5200.00, 'is_pc' => 0, 'image' => 'gpu1.png', 'stock' => 3],
            ];
        }
        return parent::all();
    }

    public function create($data) {
        if (!$this->db) return true;
        $sql = "INSERT INTO products (name, slug, price, category_id, stock, description, image, is_pc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $data['name'],
            $this->slugify($data['name']),
            $data['price'],
            $data['category_id'],
            $data['stock'],
            $data['description'],
            $data['image'] ?? 'placeholder.png',
            $data['is_pc'] ?? 0
        ]);
    }

    private function slugify($text) {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $text)));
    }

    public function getFeatured() {
        if (!$this->db) return $this->all();
        $stmt = $this->db->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 8");
        return $stmt->fetchAll();
    }

    public function getByCategory($slug) {
        if (!$this->db) {
            $all = $this->all();
            if ($slug == 'procesory') return [$all[1]];
            if ($slug == 'karty-graficzne') return [$all[2]];
            return $all;
        }
        $sql = "SELECT p.* FROM products p
                JOIN categories c ON p.category_id = c.id
                WHERE c.slug = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$slug]);
        return $stmt->fetchAll();
    }
}
