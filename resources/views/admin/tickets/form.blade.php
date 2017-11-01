

@inject('client','App\Client')

<?php

//$clientsss = $client->pluck('name', 'id');
$clientsss = $client->get();

 foreach ($clientsss as $client)    {
     $clients[$client->id]=$client->phone .'  |  '. $client->name;
//     $clients[$client->id]=$client->name .'|'. $client->name;
 }
//print_r($clients);die();
?>


<div class="row">
    <div class="loading-sub" style="display: none;">
        <div class="progress">
            <div class="indeterminate"></div>
        </div>
    </div>


    {{--=========================================--}}
    <div class="card">
        <div class="card-content">
            <span class="card-title">Ticket Info</span>
            <div class="row">



                <div class="input-field col s12">
                    {!!Form::text('title', null,array('class'=>'materialize-textarea ','id'=>'title'))!!}
                    <label class="active" for="title">title </label>
                    <label class="error">{{ $errors->first('title') }}</label>
                </div>


                <div class="input-field col s12">
                    {!!Form::textarea('body', null,array('class'=>'materialize-textarea ckeditor','id'=>'body'))!!}
                    <label class="active" for="body">body </label>
                    <label class="error">{{ $errors->first('body') }}</label>
                </div>


                {{--========department type===================--}}

                <?php
                $type = [
                        0 => 'sales',
                        1 => "supports",
                ];
                ?>

                <div class="input-field col s12">
                    {{  Form::select('type', $type, null, ['placeholder' => 'Department','class'=>'form-control ','id'=>'type',])}}

                    <label for="type">Department</label>
                </div>


                {{--=============================--}}

                <div class="input-field col s12">
                    {{  Form::select('client_id', $clients, null, ['placeholder' => 'client','class'=>'form-control ','id'=>'client_id',])}}

                    <label for="client_id">cient</label>
                </div>

                {{--==========================--}}


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
