<?php

/**
 * The application configuration file, used to setup globally used values throughout the application
 */
return array(

    /**
     * The name of the application, will be used in the main management areas of the application
     */
    'name' => 'Atiker Fabric',

    /**
     * The email address associated with support enquires on a technical basis
     */
    'support_email' => 'info@atiker.com',

    /**
     * The base path to put uploads into
     */
    'upload_base_path'=>'uploads/',

    /**
     * The URL key to access the main admin area
     */
    'access_url'=>'dashboard',

    /**
     * The menu items shown at the top and side of the application
     */
    'menu_items'=>array(
        'menu'=>array(
            'name' => 'Menu Items',
            'icon' => 'list',
            'top'  => true
        ),
        'posts'=>array(
            'name'=>'Posts',
            'icon'=>'th',
            'top'=>true
        ),
        'blocks'=>array(
            'name'=>'Content Blocks',
            'icon'=>'th-large',
            'top'=>true
        ),
        'galleries'=>array(
            'name'=>'Galleries',
            'icon'=>'star',
            'top'=>true
        ),
        'categories'=>array(
            'name'=>'Product Categories',
            'icon'=>'tasks',
            'top'=>true
        ),
        'products'=>array(
            'name'=>'Products',
            'icon'=>'barcode',
            'top'=>true
        ),
        'brands'=>array(
            'name'=>'Brands',
            'icon'=>'tower',
            'top'=>false
        ),
        'entities'=>array(
            'name'=>'Entities',
            'icon'=>'tower',
            'top'=>false
        ),
        'users'=>array(
            'name'=>'Users',
            'icon'=>'user',
            'top'=>false
        ),
        'settings'=>array(
            'name'=>'Settings',
            'icon'=>'cog',
            'top'=>false
        )
    )
);
