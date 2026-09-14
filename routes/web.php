<?php

use Illuminate\Support\Facades\Route;

Route::get('/profile-image', function () {
    $possiblePaths = [
        public_path('images/profil_cv.jpg'),
        public_path('images/profile_cv.jpg'),
        public_path('images/profile.jpg'),
        base_path('images/profil_cv.jpg'),
        base_path('images/profile_cv.jpg'),
        base_path('images/profile.jpg'),
        'c:/xampp/htdocs/portofolio_NR/public/images/profil_cv.jpg',
        'c:/xampp/htdocs/portofolio_NR/images/profil_cv.jpg',
    ];

    foreach ($possiblePaths as $path) {
        if (file_exists($path) && filesize($path) > 0) {
            $content = file_get_contents($path);
            return response($content, 200, [
                'Content-Type' => 'image/jpeg',
                'Content-Length' => strlen($content),
                'Cache-Control' => 'no-cache, must-revalidate',
            ]);
        }
    }
    abort(404);
})->name('profile.image');

Route::get('/', function () {
    $possiblePaths = [
        public_path('images/profil_cv.jpg'),
        public_path('images/profile_cv.jpg'),
        public_path('images/profile.jpg'),
        base_path('images/profil_cv.jpg'),
        base_path('images/profile_cv.jpg'),
        base_path('images/profile.jpg'),
        'c:/xampp/htdocs/portofolio_NR/public/images/profil_cv.jpg',
        'c:/xampp/htdocs/portofolio_NR/images/profil_cv.jpg',
    ];

    $profileImg = '';
    foreach ($possiblePaths as $path) {
        if (file_exists($path) && filesize($path) > 0) {
            $profileImg = 'data:image/jpeg;base64,' . base64_encode(file_get_contents($path));
            break;
        }
    }

    if (empty($profileImg)) {
        $profileImg = asset('images/profil_cv.jpg');
    }

    return view('welcome', compact('profileImg'));
});
