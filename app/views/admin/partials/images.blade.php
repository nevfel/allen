@if( isset($uploadable) and $uploadable )
    <div class="tab-pane" id="images">
        <fieldset>

            @if( !$item->uploads->isEmpty() )
                <div id="item-media" class="row">
                    @foreach($item->uploads as $upload)
                        <div upload-id="{{ $upload->id }}" class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <div class="image-container">
                                    <img src="{{ $upload->sizeImg( 200 , 150 , false ) }}" alt="">
                                </div>
                                <div class="caption">
                                    <label class="checkbox">
                                        <?php $checkedArray = Input::old('deleteImage', [] ); ?>
                                        {{ Form::checkbox('deleteImage['.$upload->id.']', $upload->id, in_array( $upload->id, $checkedArray ) ) }}
                                        Resim Sil
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </fieldset>
    </div>
@endif