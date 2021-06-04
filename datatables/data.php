<?php

// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => '',
    'db'   => 'kuliah_datatables',
    'host' => 'localhost'
);

$table = 'tma';
 
// Table's primary key
$primaryKey = 'id_tma';
 
$columns = array(
    array( 'db' => 'id_tma', 'dt' => 0 ),
    array( 'db' => 'nilai',   'dt' => 1 ),
    array( 'db' => 'waktu',     'dt' => 2 ),
);
  
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);