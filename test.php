<?php
$db_connect=pg_connect("host=localhost port=5432 dbname=postgres user=postgres");
var_dump($db_connect);

echo "123";