<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Home > Private Sector Hub
Breadcrumbs::for('private-sector-hub', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Private Sector Hub', route('private-sector-hub'));
});
