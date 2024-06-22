<?php
$routes->group('', ['subdomain' => 'cdn', 'namespace' => 'App\Controllers\CDN'], static function ($routes){
    $routes->get('/(:any)', 'CdnController::cdn');
});
?>
