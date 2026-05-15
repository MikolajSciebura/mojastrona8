<?php

namespace App\Core;

abstract class Model {
    protected $db;
    protected $table;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function all() {
        if (!$this->db) return [];
        try {
            $stmt = $this->db->query("SELECT * FROM {$this->table}");
            return $stmt ? $stmt->fetchAll() : [];
        } catch (\PDOException $e) {
            error_log("DB Error in all(): " . $e->getMessage());
            return [];
        }
    }

    public function find($id) {
        if (!$this->db) return null;
        try {
            $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log("DB Error in find(): " . $e->getMessage());
            return null;
        }
    }

    public function findBySlug($slug) {
        if (!$this->db) return null;
        try {
            $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE slug = ?");
            $stmt->execute([$slug]);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log("DB Error in findBySlug(): " . $e->getMessage());
            return null;
        }
    }
}
