<?php

use Fhsinchy\Inspire\Controllers;
use Illuminate\Support\Facades\Route;
use Isurupkg\Inspire\Controllers\InspirationController;

Route::get('inspire', InspirationController::class);