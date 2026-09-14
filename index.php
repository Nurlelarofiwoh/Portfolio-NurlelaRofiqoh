<?php
// Direct entry point for XAMPP / Apache / Local Server
// Loads resources/views/welcome.blade.php

$viewPath = __DIR__ . '/resources/views/welcome.blade.php';

if (file_exists($viewPath)) {
    // Read and render the Blade template HTML
    $content = file_get_contents($viewPath);
    
    // Evaluate basic blade date tags if any (e.g. {{ date('Y') }})
    $content = str_replace("{{ date('Y') }}", date('Y'), $content);
    
    echo $content;
} else {
    echo "File welcome.blade.php tidak ditemukan di resources/views/";
}
