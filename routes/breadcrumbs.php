<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use App\Models\Productos;

// Inicio
Breadcrumbs::for('inicio', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('inicio'));
});

// Misión
Breadcrumbs::for('mision', function (BreadcrumbTrail $trail) {
    $trail->parent('nosotros');
    $trail->push('Misión', route('nosotros', 'mision'));
});

// Visión
Breadcrumbs::for('vision', function (BreadcrumbTrail $trail) {
    $trail->parent('nosotros');
    $trail->push('Visión', route('vision'));
});

// Valores
Breadcrumbs::for('valores', function (BreadcrumbTrail $trail) {
    $trail->parent('nosotros');
    $trail->push('Valores', route('valores'));
});

// Productos
Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Productos', route('productos'));
});

// Libros
Breadcrumbs::for('libros', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Libros', route('libros'));
});

// Aromaticos

Breadcrumbs::for('aromaticos', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Aromaticos', route('aromaticos'));
});


// Otros

Breadcrumbs::for('otros', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Otros', route('otros'));
});

// Contacto
Breadcrumbs::for('contacto', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Contacto', route('contacto'));
});

// Nosotros
Breadcrumbs::for('nosotros', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Nosotros', route('nosotros'));
});

// Perfil
Breadcrumbs::for('perfil', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Perfil', route('perfil'));
});

// Testimonios
Breadcrumbs::for('testimonios', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Testimonios', route('testimonios'));
});

// Descubre
Breadcrumbs::for('descubre', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Descubre', route('descubre'));
});

// Compras
Breadcrumbs::for('compras', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Compras', route('compras'));
});

// Mapa de Sitio
Breadcrumbs::for('menu', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Mapa del Sitio', route('menu'));
});

// Breadcrumb para un producto específico
Breadcrumbs::for('producto', function (BreadcrumbTrail $trail, Productos $producto) {
    $trail->parent('productos');
    $trail->push($producto->Nombre, route('productos.show', $producto->_id));
});