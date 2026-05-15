-- MSTechPC Database Schema

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    avatar VARCHAR(255) DEFAULT 'default_avatar.png',
    role ENUM('user', 'admin', 'technician') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE,
    description TEXT,
    parent_id INT DEFAULT NULL,
    FOREIGN KEY (parent_id) REFERENCES categories(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    stock INT DEFAULT 0,
    image VARCHAR(255),
    specifications JSON,
    is_pc BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE IF NOT EXISTS pc_configurations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    name VARCHAR(255),
    cpu_id INT,
    gpu_id INT,
    ram_id INT,
    mobo_id INT,
    psu_id INT,
    case_id INT,
    storage_id INT,
    total_price DECIMAL(10, 2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (cpu_id) REFERENCES products(id),
    FOREIGN KEY (gpu_id) REFERENCES products(id),
    FOREIGN KEY (ram_id) REFERENCES products(id),
    FOREIGN KEY (mobo_id) REFERENCES products(id),
    FOREIGN KEY (psu_id) REFERENCES products(id),
    FOREIGN KEY (case_id) REFERENCES products(id),
    FOREIGN KEY (storage_id) REFERENCES products(id)
);

CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    total_amount DECIMAL(10, 2) NOT NULL,
    status ENUM('pending', 'paid', 'processing', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
    payment_method VARCHAR(50),
    shipping_address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    author_id INT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    content LONGTEXT NOT NULL,
    excerpt TEXT,
    featured_image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Seed Data
INSERT INTO categories (name, slug) VALUES
('Laptopy', 'laptopy'),
('Komputery Gamingowe', 'komputery-gamingowe'),
('Procesory', 'procesory'),
('Karty Graficzne', 'karty-graficzne'),
('Płyty Główne', 'plyty-glowne'),
('Zasilacze', 'zasilacze'),
('Obudowy', 'obudowy'),
('Pamięci RAM', 'pamieci-ram'),
('Dyski SSD', 'dyski-ssd');

INSERT INTO products (category_id, name, slug, description, price, stock, is_pc) VALUES
(2, 'MSTech Extreme Gaming R1', 'mstech-extreme-gaming-r1', 'Potężny komputer do gier z RTX 4080', 8999.00, 5, TRUE),
(3, 'AMD Ryzen 7 7800X3D', 'amd-ryzen-7-7800x3d', 'Najlepszy procesor do gier', 1749.00, 10, FALSE),
(4, 'NVIDIA GeForce RTX 4070 Ti Super', 'nvidia-rtx-4070-ti-super', 'Wydajna karta graficzna', 3899.00, 8, FALSE);

-- Default Admin Account (Email: admin@mstechpc.pl, Password: admin123)
INSERT INTO users (username, email, password, full_name, role) VALUES
('admin', 'admin@mstechpc.pl', '$2y$10$ahyXo1ul/T9wdT9T9UrTx.GOsOTCF6dgxWYfbkAM4bMZsWpECmv46', 'Administrator Główny', 'admin');
