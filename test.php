<?php
$db_connect=pg_connect("host=localhost port=5432 dbname=postgres user=postgres");
//var_dump($db_connect);
if ($db_connect) echo 'Successful connection';
echo "123";