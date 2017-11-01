@inject('category','App\Category')

<?php

$categories = $category->pluck('name', 'id');


?>


<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Packet Info</span>
            <div class="row">



                {{--======================name===================--}}
                <div class="input-field col s6">
                    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
                    <label class="active" for="name">Name</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('price', null,array('class'=>'validate','id'=>'price'))!!}
                    <label class="active" for="price">price</label>
                </div>

                <div class="input-field col s6">
                    {!!Form::text('type', null,array('class'=>'validate','id'=>'type'))!!}
                    <label class="active" for="type">type</label>
                </div>




                <?php
                $has = [
                        0 => 'sale',
                        1 => "no sale",
                ];
                ?>

                <div class="input-field col s6">
                    {{  Form::select('sale', $has, null, ['placeholder' => 'sale','class'=>'form-control','id'=>'sale',])}}

                    <label for="sale">sale</label>
                </div>
{{--=======================================cat_id======================--}}

                <div class="input-field col s6">
                    {{  Form::select('cat_id', $categories, null, ['placeholder' => 'category','class'=>'form-control','id'=>'cat_id',])}}

                    <label for="cat_id">category</label>
                </div>


                <?php
                $limit = [
                        0 => 'limited',
                        1 => "un limited",
                ];
                ?>

                <div class="input-field col s6">
                    {{  Form::select('limited', $limit, null, ['placeholder' => 'type','class'=>'form-control','id'=>'limited',])}}

                    <label for="limited">Type</label>
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
