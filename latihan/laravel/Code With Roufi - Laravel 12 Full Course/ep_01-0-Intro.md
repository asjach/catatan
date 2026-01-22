# Episode 1: Intro

# Episode 2: Local Environtment Setup
- Install PHP, Composer, Laravel Installer, MySQL, Node, dan NPM, Code Editor
- Ekstensi VSCode: 
    - laravel (official laravel)
    - PHP Intelephense


# Episode 3: Step-by-Step Laravel Installation
- configurasi php.ini
    - aktifkan extension=zip
- terminal (path project): `composer create-project laravel/laravel nama_project`
- buku projectails di code editor
- menjalankan web server bawaan: `php artisan serve`

# Episode 4: Understanding MVC
menjelaskan konsep mvc

# Episode 5: Penjelasan Route
route ada di folder routes/web.php

# Episode 6: Route Grouping & Naming
melakukan organisasi route
- Route::prefix('nama grup')->grup(callback{});

# Episode 7: Route Parameter & Fallback
- untuk melihat seluruh route: `php artisan route:list`

# Episode 8: Intro to Blade
blade = templating engine
cara bikin view
- bisa langsung create di folder
- melalui terminal: `php artisan make:view nama_view`

# Episode 9: Passing Data from route to view
terdapat 3 cara:
1. menggunakan with
2. menggunakan fungsi compact
3. menggunakan array

