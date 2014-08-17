<ul class="nav nav-tabs">
    <li><a href="#main" data-toggle="tab">Bilgiler</a></li>
    @if( isset($uploadable) and $uploadable )
        <li><a href="#images" data-toggle="tab">Resimler</a></li>
    @endif
    @if( isset($taggable) and $taggable )
        <li><a href="#tagging" data-toggle="tab">Etiketler</a></li>
    @endif
    @if( isset($menuable) and $menuable )
        <li><a href="#menu" data-toggle="tab">Alt Menüler</a></li>
    @endif
</ul>