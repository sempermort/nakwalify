<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'http://127.0.0.1:8000/addcontentpost', //has no Crsf
        'http://127.0.0.1:8000/addvideosajax', //has no Crsf
        'http://127.0.0.1:8000/addpdfsajax'
    ];
}
