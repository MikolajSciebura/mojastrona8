CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    full_name VARCHAR(100),
    avatar VARCHAR(255) DEFAULT 'default_avatar.png',
    role TEXT CHECK( role IN ('user', 'admin', 'technician') ) DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS categories (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    category_id INTEGER,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL UNIQUE,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255),
    stock INTEGER DEFAULT 0,
    is_pc BOOLEAN DEFAULT 0,
    is_featured BOOLEAN DEFAULT 0,
    specifications TEXT,
    fps_data TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE IF NOT EXISTS orders (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    user_id INTEGER,
    total_amount DECIMAL(10, 2) NOT NULL,
    status TEXT CHECK( status IN ('pending', 'paid', 'processing', 'shipped', 'delivered', 'cancelled') ) DEFAULT 'pending',
    shipping_address TEXT,
    payment_method VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS order_items (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    order_id INTEGER,
    product_id INTEGER,
    quantity INTEGER NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE IF NOT EXISTS pc_components (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    type VARCHAR(50) NOT NULL,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    wattage INTEGER DEFAULT 0,
    compatibility_data TEXT
);

CREATE TABLE IF NOT EXISTS repairs (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    repair_id VARCHAR(20) UNIQUE NOT NULL,
    customer_name VARCHAR(100) NOT NULL,
    customer_email VARCHAR(100),
    device VARCHAR(255) NOT NULL,
    description TEXT,
    status TEXT DEFAULT 'Nowe zgłoszenie',
    estimated_cost DECIMAL(10, 2) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Seed Data
INSERT INTO categories (name, slug) VALUES ('Komputery Gamingowe', 'komputery-gamingowe');
INSERT INTO categories (name, slug) VALUES ('Stacje Robocze', 'stacje-robocze');
INSERT INTO categories (name, slug) VALUES ('Procesory', 'procesory');
INSERT INTO categories (name, slug) VALUES ('Karty Graficzne', 'karty-graficzne');

INSERT INTO products (category_id, name, slug, description, price, image, stock, is_pc, is_featured)
VALUES (1, 'MSTech Extreme Gaming R1', 'mstech-extreme-gaming-r1', 'Potężna bestia do 4K.', 12999.00, 'pc1.png', 5, 1, 1);

INSERT INTO products (category_id, name, slug, description, price, image, stock, is_pc)
VALUES (1, 'MSTech Storm', 'ms-tech-storm', 'Idealny do 1440p.', 5499.00, 'pc2.png', 10, 1);

INSERT INTO pc_components (type, name, price, wattage) VALUES ('cpu', 'Intel Core i9-14900K', 2899.00, 125);
INSERT INTO pc_components (type, name, price, wattage) VALUES ('cpu', 'AMD Ryzen 7 7800X3D', 1899.00, 120);
INSERT INTO pc_components (type, name, price, wattage) VALUES ('gpu', 'NVIDIA RTX 4090 24GB', 8999.00, 450);
INSERT INTO pc_components (type, name, price, wattage) VALUES ('gpu', 'NVIDIA RTX 4070 Super', 2999.00, 220);
INSERT INTO pc_components (type, name, price, wattage) VALUES ('mobo', 'ASUS ROG MAXIMUS Z790', 2499.00, 50);
INSERT INTO pc_components (type, name, price, wattage) VALUES ('mobo', 'MSI B650 GAMING PLUS', 899.00, 40);

INSERT INTO users (username, password, email, role) VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin@mstechpc.pl', 'admin'); -- password is 'password'
