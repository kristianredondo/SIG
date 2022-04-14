<?php

use Illuminate\Support\Facecades\route;
use public\http\webcontroller;



route::get('/map', [webcontroller::class, 'map'])->name('map');
