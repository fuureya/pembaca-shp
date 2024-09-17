<?php

use App\Http\Controllers\ShpReader;
use Illuminate\Support\Facades\Route;

Route::get('/', [ShpReader::class, "Pembaca"]);
