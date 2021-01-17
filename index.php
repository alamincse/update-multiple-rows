<?php

UPDATE products SET name = (SELECT name
    FROM demo_product
    WHERE products.id = demo_product.id),
         
 pack_qty = (SELECT pack_qty
    FROM demo_product
    WHERE products.id = demo_product.id),
         
 purchase_price = (SELECT purchase_price
    FROM demo_product
    WHERE products.id = demo_product.id),
         
 sales_price = (SELECT sales_price
    FROM demo_product
    WHERE products.id = demo_product.id),
 uom = (SELECT uom
    FROM demo_product
    WHERE products.id = demo_product.id)
WHERE id IN (SELECT id FROM demo_product)