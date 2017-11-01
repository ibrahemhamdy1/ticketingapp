<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">network Info</span>
            <div class="row">



                {{--======================name===================--}}
                <div class="input-field col s6">
                    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
                    <label class="active" for="name">Name</label>
                </div>


            </div>
        </div>
    </div>

    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
</div>

{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
