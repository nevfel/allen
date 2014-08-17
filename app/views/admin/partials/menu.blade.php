@if( isset($menuable) and $menuable )
    <div class="tab-pane" id="menu">
        <fieldset>
            <p>Menü Ayarları</p>
            <div class="form-group">
                 
                <div class="col-sm-12">
                   <select id="menus" name="menus[]" class="select2 form-control" multiple="true">
                    @foreach($tum_menu as $route=>$menu)
                    @foreach($menu as $slug=>$title)
                        @if(in_array($slug,$alt_menu_slugs))
                            <option selected="selected" value="{{ $route."|".$slug."|".$title }}">{{ $title }}</option>
                        @else
                            <option value="{{  $route."|".$slug."|".$title }}">{{ $title }}</option>
                        @endif
                    @endforeach
                    @endforeach
                    </select>
                </div>
            </div>
        </fieldset>
    </div>
@endif