<?php 

require_once 'App/init.php';

use App\Produk\Users as ProdukUsers;
use App\Services\Users as ServiceUsers;

new ProdukUsers();
echo "<br>";
new ServiceUsers;

?>