<?php
$popupMeta = array (
    'moduleMain' => 'n2804_purchases',
    'varName' => 'n2804_purchases',
    'orderBy' => 'n2804_purchases.name',
    'whereClauses' => array (
  'name' => 'n2804_purchases.name',
),
    'searchInputs' => array (
  0 => 'n2804_purchases_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'QUANTITY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_QUANTITY',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
