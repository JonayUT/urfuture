<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Inicio
Breadcrumbs::for('inicio', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('inicio'));
});

// Misión
Breadcrumbs::for('mision', function (BreadcrumbTrail $trail) {
    $trail->parent('nosotros');
    $trail->push('Misión', route('nosotros','mision'));
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

    //Jovenes Hechiceras

    Breadcrumbs::for('hechiceras', function (BreadcrumbTrail $trail) {
        $trail->parent('libros');
        $trail->push('Jovenes Hechiceras', route('hechiceras'));
    });

    //Tarot Guia Personal

    Breadcrumbs::for('tarot', function (BreadcrumbTrail $trail) {
        $trail->parent('libros');
        $trail->push('Tarot Guia Personal', route('tarot'));
    });

    //The eye in ur hand

    Breadcrumbs::for('eye', function (BreadcrumbTrail $trail) {
        $trail->parent('libros');
        $trail->push('The eye in ur hand', route('eye'));
    });

// Aromaticos

Breadcrumbs::for('aromaticos', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Aromaticos', route('aromaticos'));
});

    //Velas Pacificadoras
    Breadcrumbs::for('velas', function (BreadcrumbTrail $trail) {
        $trail->parent('aromaticos');
        $trail->push('Velas Pacificadoras', route('velas'));
    });

    //Perlas Aromaticas
    Breadcrumbs::for('perlas', function (BreadcrumbTrail $trail) {
        $trail->parent('aromaticos');
        $trail->push('Perlas Aromaticas', route('perlas'));
    });

// Otros

Breadcrumbs::for('otros', function (BreadcrumbTrail $trail) {
    $trail->parent('productos');
    $trail->push('Otros', route('otros'));
});

    // Agua de Afrodita
    Breadcrumbs::for('agua', function (BreadcrumbTrail $trail) {
        $trail->parent('otros');
        $trail->push('Agua de Afrodita', route('agua'));
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