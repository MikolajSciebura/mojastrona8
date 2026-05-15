<?php

namespace App\Models;

use App\Core\Model;

class Order extends Model {
    protected $table = 'orders';

    public function createOrder($userId, $items, $total, $data) {
        if (!$this->db) return rand(100, 999);

        $this->db->beginTransaction();
        try {
            $sql = "INSERT INTO orders (user_id, total_amount, payment_method, shipping_address) VALUES (?, ?, ?, ?)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$userId, $total, $data['payment'], $data['address']]);
            $orderId = $this->db->lastInsertId();

            foreach ($items as $item) {
                $sqlItem = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
                $stmtItem = $this->db->prepare($sqlItem);
                $stmtItem->execute([$orderId, is_numeric($item['id']) ? $item['id'] : null, $item['quantity'], $item['price']]);
            }

            $this->db->commit();
            return $orderId;
        } catch (\Exception $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
}
