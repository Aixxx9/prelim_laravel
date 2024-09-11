<?php

namespace App\Http\Controllers;

abstract class Controller
{
    <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
?>
}
