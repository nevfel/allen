<?php

// The Posts Bindings
App::bind('Atiker\LaravelBootstrap\Posts\PostsInterface', function(){
    return new Atiker\LaravelBootstrap\Posts\PostsRepository( new Atiker\LaravelBootstrap\Posts\Posts );
});

// The Users Bindings
App::bind('Atiker\LaravelBootstrap\Accounts\UserInterface', function(){
    return new Atiker\LaravelBootstrap\Accounts\UserRepository( new Atiker\LaravelBootstrap\Accounts\User );
});

// The Settings Bindings
App::bind('Atiker\LaravelBootstrap\Settings\SettingsInterface', function(){
    return new Atiker\LaravelBootstrap\Settings\SettingsRepository( new Atiker\LaravelBootstrap\Settings\Settings );
});

// The Blocks Bindings
App::bind('Atiker\LaravelBootstrap\Blocks\BlocksInterface', function(){
    return new Atiker\LaravelBootstrap\Blocks\BlocksRepository( new Atiker\LaravelBootstrap\Blocks\Blocks );
});

// The Tags Bindings
App::bind('Atiker\LaravelBootstrap\Tags\TagsInterface', function(){
    return new Atiker\LaravelBootstrap\Tags\TagsRepository( new Atiker\LaravelBootstrap\Tags\Tags );
});

// The Uploads Bindings
App::bind('Atiker\LaravelBootstrap\Uploads\UploadsInterface', function(){
    return new Atiker\LaravelBootstrap\Uploads\UploadsRepository( new Atiker\LaravelBootstrap\Uploads\Uploads );
});

// The Galleries Bindings
App::bind('Atiker\LaravelBootstrap\Galleries\GalleriesInterface', function(){
    return new Atiker\LaravelBootstrap\Galleries\GalleriesRepository( new Atiker\LaravelBootstrap\Galleries\Galleries );
});
// The Kategori Bindings
App::bind('Atiker\LaravelBootstrap\Categories\CategoryInterface', function(){
    return new Atiker\LaravelBootstrap\Categories\CategoryRepository( new Atiker\LaravelBootstrap\Categories\Category );
});
// The Menu Bindings
App::bind('Atiker\LaravelBootstrap\Menu\MenuInterface', function(){
    return new Atiker\LaravelBootstrap\Menu\MenuRepository( new Atiker\LaravelBootstrap\Menu\Menus );
});
// The Products Bindings
App::bind('Atiker\LaravelBootstrap\Product\ProductInterface', function(){
    return new Atiker\LaravelBootstrap\Product\ProductRepository(new Atiker\LaravelBootstrap\Product\Product);
});
// The Brands Bindings
App::bind('Atiker\LaravelBootstrap\Brands\BrandsInterface', function(){
    return new Atiker\LaravelBootstrap\Brands\BrandsRepository( new Atiker\LaravelBootstrap\Brands\Brands );
});
// The Entities Bindings
App::bind('Atiker\LaravelBootstrap\Entity\EntityInterface', function(){
    return new Atiker\LaravelBootstrap\Entity\EntityRepository( new Atiker\LaravelBootstrap\Entity\Entity );
});
