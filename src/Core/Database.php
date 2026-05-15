<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private static $instance = null;
    private $connection;

    private function __construct() {
        try {
            if (!class_exists('PDO')) {
                throw new \Exception("PDO not installed");
            }
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";

            // Check for required PDO constants and provide defaults if missing (though they shouldn't be if PDO exists)
            $options = [];
            if (defined('PDO::ATTR_ERR_MODE')) {
                $options[\PDO::ATTR_ERR_MODE] = \PDO::ERR_MODE_EXCEPTION;
            }
            if (defined('PDO::ATTR_DEFAULT_FETCH_MODE')) {
                $options[\PDO::ATTR_DEFAULT_FETCH_MODE] = \PDO::FETCH_ASSOC;
            }
            if (defined('PDO::ATTR_EMULATE_PREPARES')) {
                $options[\PDO::ATTR_EMULATE_PREPARES] = false;
            }

            $this->connection = new \PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (\PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            $this->connection = null;
        } catch (\Exception $e) {
            error_log("General error during database init: " . $e->getMessage());
            $this->connection = null;
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connection;
    }
}
