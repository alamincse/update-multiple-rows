#### 1. First create new table like "demo_product" for your database.

#### 2. Create columns like "id", "name", "pack_qty", "purchase_price", "sales_price", "uom" for "demo_product" table.

#### 3. Insert products into new "demo_product" table from sheet.

#### SQL Command: 

``php 
INSERT INTO `demo_product` (`id`, `name`, `pack_qty`, `purchase_price`, `sales_price`, `uom`)  VALUES 
(1, 'Adafil 10 Tablet', 4, 28.14, 35, 'Pcs'),
(2, 'Amdocal 5', 100, 4.0275, 5, 'Pcs'),
.....
(n, 'Aristocal D Tab', 60, 5.63, 7, 'Pcs');
``

#### 4.  Finally Run SQL command from index.php file.
