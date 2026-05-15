<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Service;

class ServiceController extends Controller {
    public function status() {
        $repairId = $_GET['repair_id'] ?? '';
        if (empty($repairId)) {
            $this->redirect('/serwis');
        }

        $serviceModel = new Service();
        $repair = $serviceModel->findByRepairId($repairId);

        $this->view('shop/service_status', [
            'title' => 'Status Naprawy ' . e($repairId) . ' - MSTechPC',
            'repair' => $repair,
            'repairId' => $repairId
        ]);
    }
}
