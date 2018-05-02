<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-04-24 13:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `paid_by` = 'CC'
AND `sma_payments`.`created_by` = '1'' at line 6 - Invalid query: SELECT COUNT(sma_payments.id) as total_cc_slips, SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid
FROM `sma_payments`
LEFT JOIN `sma_sales` ON `sma_sales`.`id`=`sma_payments`.`sale_id`
WHERE `type` = 'received'
AND `sma_payments`.`date` >
AND `paid_by` = 'CC'
AND `sma_payments`.`created_by` = '1'
ERROR - 2018-04-24 13:18:46 --> Query error: Unknown column 'amount' in 'field list' - Invalid query: SELECT SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS returned
FROM `sma_returns`
WHERE `date` > '2018-03-13 13:05:33'
AND `sma_returns`.`created_by` = '1'
ERROR - 2018-04-24 13:27:33 --> Query error: Unknown column 'sma_payments.date' in 'where clause' - Invalid query: SELECT SUM( COALESCE( grand_total, 0 ) ) AS total
FROM `sma_returns`
WHERE `sma_payments`.`date` > '2018-04-24 00:00:00'
ERROR - 2018-04-24 13:52:18 --> Could not find the language line "refund"
ERROR - 2018-04-24 13:53:08 --> Could not find the language line "refund"
ERROR - 2018-04-24 14:41:02 --> Severity: Warning --> Invalid argument supplied for foreach() /Users/Saleem/Desktop/Projects/ci/sma/app/models/admin/Sales_model.php 287
ERROR - 2018-04-24 14:56:14 --> Severity: Notice --> Undefined property: stdClass::$product_name /Users/Saleem/Desktop/Projects/ci/sma/app/models/Site.php 667
ERROR - 2018-04-24 14:57:45 --> Severity: Notice --> Undefined property: stdClass::$product_name /Users/Saleem/Desktop/Projects/ci/sma/app/models/Site.php 667
