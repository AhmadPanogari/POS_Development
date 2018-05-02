<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-19 10:22:04 --> Severity: Notice --> Undefined property: stdClass::$slug /Users/Saleem/Desktop/Projects/ci/sma/themes/default/shop/views/header.php 226
ERROR - 2018-04-19 10:22:04 --> Severity: Notice --> Undefined property: stdClass::$name /Users/Saleem/Desktop/Projects/ci/sma/themes/default/shop/views/header.php 226
ERROR - 2018-04-19 10:38:24 --> Query error: Unknown column 'sma_b.id' in 'on clause' - Invalid query: SELECT `b`.*, COUNT(p.brand) as product_count
FROM `sma_brands` `b`
JOIN `sma_products` `p` ON `p`.`brand`=`sma_b`.`id`
GROUP BY `p`.`brand`
ERROR - 2018-04-19 10:38:24 --> Query error: Unknown column 'sma_b.id' in 'on clause' - Invalid query: SELECT `b`.*, COUNT(p.brand) as product_count
FROM `sma_brands` `b`
JOIN `sma_products` `p` ON `p`.`brand`=`sma_b`.`id`
GROUP BY `p`.`brand`
ERROR - 2018-04-19 10:39:24 --> Query error: Unknown column 'sma_products.brand' in 'on clause' - Invalid query: SELECT `sma_brands`.*, COUNT(p.brand) as product_count
FROM `sma_brands`
JOIN `sma_products` `p` ON `sma_products`.`brand`=`sma_brands`.`id`
GROUP BY `sma_products`.`brand`
ERROR - 2018-04-19 10:39:24 --> Query error: Unknown column 'sma_products.brand' in 'on clause' - Invalid query: SELECT `sma_brands`.*, COUNT(p.brand) as product_count
FROM `sma_brands`
JOIN `sma_products` `p` ON `sma_products`.`brand`=`sma_brands`.`id`
GROUP BY `sma_products`.`brand`
ERROR - 2018-04-19 10:39:45 --> Query error: Unknown column 'p.brand' in 'field list' - Invalid query: SELECT `sma_brands`.*, COUNT(p.brand) as product_count
FROM `sma_brands`
JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
GROUP BY `sma_products`.`brand`
ERROR - 2018-04-19 10:39:46 --> Query error: Unknown column 'p.brand' in 'field list' - Invalid query: SELECT `sma_brands`.*, COUNT(p.brand) as product_count
FROM `sma_brands`
JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
GROUP BY `sma_products`.`brand`
ERROR - 2018-04-19 10:41:28 --> Query error: Unknown column 'sma_products.brands' in 'group statement' - Invalid query: SELECT `sma_brands`.*, count(brand) product_count
FROM `sma_brands`
JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
GROUP BY `sma_products`.`brands`
ERROR - 2018-04-19 10:41:28 --> Query error: Unknown column 'sma_products.brands' in 'group statement' - Invalid query: SELECT `sma_brands`.*, count(brand) product_count
FROM `sma_brands`
JOIN `sma_products` ON `sma_products`.`brand`=`sma_brands`.`id`
GROUP BY `sma_products`.`brands`
ERROR - 2018-04-19 10:48:50 --> Severity: error --> Exception: syntax error, unexpected 'products' (T_STRING), expecting ',' or ')' /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 99
ERROR - 2018-04-19 10:48:50 --> Severity: error --> Exception: syntax error, unexpected 'products' (T_STRING), expecting ',' or ')' /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 99
ERROR - 2018-04-19 10:49:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`' at line 3 - Invalid query: SELECT `sma_brands`.*, count(p.brand) product_count
FROM `sma_brands`
LEFT JOIN (select count(brand) brand, category_id from sma_products.products group_by brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`
ERROR - 2018-04-19 10:49:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`' at line 3 - Invalid query: SELECT `sma_brands`.*, count(p.brand) product_count
FROM `sma_brands`
LEFT JOIN (select count(brand) brand, category_id from sma_products.products group_by brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`
ERROR - 2018-04-19 10:49:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`' at line 3 - Invalid query: SELECT `sma_brands`.*, `p`.`brand` as `product_count`
FROM `sma_brands`
LEFT JOIN (select count(brand) as brand, category_id from sma_products.products group_by brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`
ERROR - 2018-04-19 10:49:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`' at line 3 - Invalid query: SELECT `sma_brands`.*, `p`.`brand` as `product_count`
FROM `sma_brands`
LEFT JOIN (select count(brand) as brand, category_id from sma_products.products group_by brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brand`
ERROR - 2018-04-19 10:56:47 --> Query error: Unknown column 'p.brands' in 'group statement' - Invalid query: SELECT `sma_brands`.*, `p`.`used` as `product_count`
FROM `sma_brands`
LEFT JOIN (select count(id) as used, brand from sma_products group by brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brands`
ERROR - 2018-04-19 10:56:47 --> Query error: Unknown column 'p.brands' in 'group statement' - Invalid query: SELECT `sma_brands`.*, `p`.`used` as `product_count`
FROM `sma_brands`
LEFT JOIN (select count(id) as used, brand from sma_products group by brand) p ON `p`.`brand`=`sma_brands`.`id`
GROUP BY `p`.`brands`
ERROR - 2018-04-19 11:00:24 --> Query error: Unknown column 'brands.id' in 'where clause' - Invalid query: SELECT `sma_brands`.*, (
            SELECT  count(*)
            FROM    sma_products
            WHERE   sma_products.brand = brands.id
        ) AS product_count
FROM `sma_brands`
ERROR - 2018-04-19 11:00:24 --> Query error: Unknown column 'brands.id' in 'where clause' - Invalid query: SELECT `sma_brands`.*, (
            SELECT  count(*)
            FROM    sma_products
            WHERE   sma_products.brand = brands.id
        ) AS product_count
FROM `sma_brands`
ERROR - 2018-04-19 11:20:19 --> Severity: Warning --> Creating default object from empty value /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 8
ERROR - 2018-04-19 11:20:20 --> Severity: Notice --> Undefined variable: shop_settings /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:20:20 --> Severity: Notice --> Trying to get property 'hide0' of non-object /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:20:21 --> Severity: Warning --> Creating default object from empty value /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 8
ERROR - 2018-04-19 11:20:21 --> Severity: Notice --> Undefined variable: shop_settings /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:20:21 --> Severity: Notice --> Trying to get property 'hide0' of non-object /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:21:18 --> Severity: Notice --> Undefined property: Main::$shop_settings /Users/Saleem/Desktop/Projects/ci/sma/system/core/Model.php 73
ERROR - 2018-04-19 11:21:18 --> Severity: Notice --> Indirect modification of overloaded property Shop_model::$shop_settings has no effect /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 8
ERROR - 2018-04-19 11:21:18 --> Severity: Warning --> Creating default object from empty value /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 8
ERROR - 2018-04-19 11:21:18 --> Severity: Notice --> Undefined property: stdClass::$hide0 /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:21:19 --> Severity: Notice --> Undefined property: Main::$shop_settings /Users/Saleem/Desktop/Projects/ci/sma/system/core/Model.php 73
ERROR - 2018-04-19 11:21:19 --> Severity: Notice --> Indirect modification of overloaded property Shop_model::$shop_settings has no effect /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 8
ERROR - 2018-04-19 11:21:19 --> Severity: Warning --> Creating default object from empty value /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 8
ERROR - 2018-04-19 11:21:19 --> Severity: Notice --> Undefined property: stdClass::$hide0 /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:22:24 --> Query error: Unknown column 'product_count' in 'where clause' - Invalid query: SELECT sma_brands.*, (SELECT count(*) FROM sma_products WHERE sma_products.brand = sma_brands.id) AS product_count
FROM `sma_brands`
WHERE `product_count` > 0
ERROR - 2018-04-19 11:22:25 --> Query error: Unknown column 'product_count' in 'where clause' - Invalid query: SELECT sma_brands.*, (SELECT count(*) FROM sma_products WHERE sma_products.brand = sma_brands.id) AS product_count
FROM `sma_brands`
WHERE `product_count` > 0
ERROR - 2018-04-19 11:23:01 --> Severity: error --> Exception: syntax error, unexpected 'products' (T_STRING), expecting ',' or ')' /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:23:02 --> Severity: error --> Exception: syntax error, unexpected 'products' (T_STRING), expecting ',' or ')' /Users/Saleem/Desktop/Projects/ci/sma/app/models/shop/Shop_model.php 100
ERROR - 2018-04-19 11:23:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 3 - Invalid query: SELECT sma_brands.*, (SELECT count(*) FROM sma_products WHERE sma_products.brand = sma_brands.id) AS product_count
FROM `sma_brands`
WHERE (SELECT count(*) FROM sma_products WHERE sma_products.brand = `sma_brands`.`id`) 0
ERROR - 2018-04-19 11:23:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '0' at line 3 - Invalid query: SELECT sma_brands.*, (SELECT count(*) FROM sma_products WHERE sma_products.brand = sma_brands.id) AS product_count
FROM `sma_brands`
WHERE (SELECT count(*) FROM sma_products WHERE sma_products.brand = `sma_brands`.`id`) 0
ERROR - 2018-04-19 11:34:10 --> Could not find the language line "hide0"
ERROR - 2018-04-19 11:35:41 --> Could not find the language line "hide0"
ERROR - 2018-04-19 13:49:28 --> Severity: Warning --> Invalid argument supplied for foreach() /Users/Saleem/Desktop/Projects/ci/sma/app/controllers/admin/Calendar.php 52
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "shop"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "sales_x_delivered"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "manual_payments"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "add_adjustment"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "stock_counts"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "count_stock"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "returns"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "list_returns"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "add_return"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "list_printers"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "add_printer"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "price_groups"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "units"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "brands"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "best_sellers"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "adjustments_report"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "brands_report"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "tax_report"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "front_end"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "shop_settings"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "slider_settings"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "api_keys"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "list_pages"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "add_page"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "sms_settings"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "send_sms"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "sms_log"
ERROR - 2018-04-19 13:54:30 --> Could not find the language line "download"
ERROR - 2018-04-19 13:54:30 --> Severity: Warning --> Invalid argument supplied for foreach() /Users/Saleem/Desktop/Projects/ci/sma/app/controllers/admin/Calendar.php 52
ERROR - 2018-04-19 14:06:33 --> Severity: Warning --> Invalid argument supplied for foreach() /Users/Saleem/Desktop/Projects/ci/sma/app/controllers/admin/Calendar.php 52
