<?php

return [
    'item' => [
        [
            'key' => 'dashboard',
            'name' => 'Dashboard',
            'route' => 'admin.dashboard.index',
            'sort' => 1,
            'icon-class' => 'dashboard-icon',
        ],
        [
            'key' => 'catalog',
            'name' => 'Catalog',
            'route' => 'admin.catalog.products.index',
            'sort' => 3,
            'icon-class' => 'catalog-icon',
        ],
        [
            'key' => 'catalog.products',
            'name' => 'Products',
            'route' => 'admin.catalog.products.index',
            'sort' => 1,
            'icon-class' => '',
        ],
        [
            'key' => 'catalog.categories',
            'name' => 'Categories',
            'route' => 'admin.catalog.categories.index',
            'sort' => 2,
            'icon-class' => '',
        ],
        [
            'key' => 'catalog.attributes',
            'name' => 'Attributes',
            'route' => 'admin.catalog.attributes.index',
            'sort' => 3,
            'icon-class' => '',
        ],
        [
            'key' => 'catalog.families',
            'name' => 'Families',
            'route' => 'admin.catalog.families.index',
            'sort' => 4,
            'icon-class' => '',
        ],
        [
            'key' => 'configuration',
            'name' => 'Configure',
            'route' => 'admin.account.edit',
            'sort' => 6,
            'icon-class' => 'configuration-icon',
        ],
        [
            'key' => 'configuration.account',
            'name' => 'My Account',
            'route' => 'admin.account.edit',
            'sort' => 1,
            'icon-class' => '',
        ],
        [
            'key' => 'settings',
            'name' => 'Settings',
            'route' => 'admin.countries.index',
            'sort' => 6,
            'icon-class' => 'settings-icon',
        ],
        [
            'key' => 'settings.countries',
            'name' => 'Countries',
            'route' => 'admin.countries.index',
            'sort' => 1,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.locales',
            'name' => 'Locales',
            'route' => 'admin.locales.index',
            'sort' => 2,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.currencies',
            'name' => 'Currencies',
            'route' => 'admin.currencies.index',
            'sort' => 3,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.exchange_rates',
            'name' => 'Exchange Rates',
            'route' => 'admin.exchange_rates.index',
            'sort' => 4,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.inventory_sources',
            'name' => 'Inventory Sources',
            'route' => 'admin.inventory_sources.index',
            'sort' => 5,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.channels',
            'name' => 'Channels',
            'route' => 'admin.channels.index',
            'sort' => 6,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.users',
            'name' => 'Users',
            'route' => 'admin.users.index',
            'sort' => 7,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.users.users',
            'name' => 'Users',
            'route' => 'admin.users.index',
            'sort' => 1,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.users.roles',
            'name' => 'Roles',
            'route' => 'admin.roles.index',
            'sort' => 2,
            'icon-class' => '',
        ],
        [
            'key' => 'settings.sliders',
            'name' => 'Create Sliders',
            'route' => 'admin.sliders.index',
            'sort' => 8,
            'icon-class' => '',
        ],
    ],
]
?>