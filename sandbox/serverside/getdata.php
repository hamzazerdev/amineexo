<?php
$dbDetails= array(
'host'=>'localhost',
'user'=>'root',
'password'=>'',
'db'=>'dbcommande'

);
$table='commandes';
$primaryKey='Client';
$columns = array( 
    array( 'db' => 'Client', 'dt' => 0 ), 
    array( 'db' => 'Telephone',  'dt' => 1 ), 
    array( 'db' => 'Etat Commande',      'dt' => 2 ), 
    array( 'db' => 'Wilaya',     'dt' => 3 ), 
    array( 'db' => 'Montant Commande',    'dt' => 4 ), 
    array( 'db' => 'Date Commande',    'dt' => 5 ), 
    array( 'db' => 'Produit',    'dt' => 6 ), 
    array( 'db' => 'Qte',    'dt' => 7 ), 
    array( 'db' => 'Adresse',    'dt' => 8 ), 
    array( 'db' => 'Total a payer',    'dt' => 9 ), 
   
   
); 
 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);