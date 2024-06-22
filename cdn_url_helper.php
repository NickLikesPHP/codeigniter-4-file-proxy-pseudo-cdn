<?php
// app/Helpers/cdn_url_helper.php
use CodeIgniter\CodeIgniter;

function cdn_url($path): string {
    return 'https://cdn.mydomain.com' . (str_starts_with($path, '/') ? $path : "/$path");
}
?>
