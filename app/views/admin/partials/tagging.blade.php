@if( isset($taggable) and $taggable )
    <div class="tab-pane" id="tagging">
        <fieldset>
            <p>Etiketler nesneleri tanımlamak veya sınıflandırmak için kullanılabilir.</p>
            <div class="form-group">
                {{ Form::label( "tags" , 'Nesne Etiketleri' , array( 'class'=>'col-lg-2 control-label' ) ) }}
                
                <div class="col-lg-10">
                    {{ Form::text( "tags" , Input::old( "tags" , $item->tags_csv ) , array( 'class'=>'form-control' , 'placeholder'=>'Virgül ile ayrılmış etiketler' ) ) }}
                    <span class="help-block">Lütfen her etiketi virgül ile ayırarak yazınız.</span>
                </div>
            </div>
        </fieldset>
    </div>
@endif