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
        '/saveUser',
        '/updateUser',
        '/deleteUser/{nickname}',
        '/getUser/{nickname}',
        '/saveProduct',
        '/updateProduct',
        '/updateProductImg',
        '/saveFactura',
        '/saveDetalle',
        '/totalVentas',
        '/updProductCant',
        '/getFacturaUser/{nickname}',
        '/saveContacto',
        '/getAllContacto'
    ];
}
