<?php

namespace App\Models;

use App\Core\Model;

class Service extends Model {
    protected $table = 'repairs';

    public function findByRepairId($repairId) {
        if (!$this->db) {
            // Mock data for demo
            if ($repairId === 'RE7782') {
                return [
                    'repair_id' => 'RE7782',
                    'customer_name' => 'Jan Kowalski',
                    'device' => 'Laptop MSI Katana B12V',
                    'status' => 'W trakcie naprawy',
                    'description' => 'Wymiana pasty termoprzewodzącej i czyszczenie układu chłodzenia.',
                    'estimated_cost' => 250.00,
                    'created_at' => '2024-05-15 10:00:00'
                ];
            }
            return null;
        }

        try {
            $stmt = $this->db->prepare("SELECT * FROM repairs WHERE repair_id = ?");
            $stmt->execute([$repairId]);
            return $stmt->fetch();
        } catch (\PDOException $e) {
            error_log("DB Error in findByRepairId: " . $e->getMessage());
            return null;
        }
    }
}
