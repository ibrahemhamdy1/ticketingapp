@inject('network','App\Network')

<?php

$networks = $network->pluck('name', 'id');


?>


@inject('packet','App\Packet')

<?php

$packets = $packet->pluck('name', 'id');


?>


<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
    <label class="active" for="name">Client Name</label>
</div>


<div class="input-field col s12">
    <i class="material-icons prefix">account_box</i>
    {!!Form::text('user_name', null,array('class'=>'validate','id'=>'user_name'))!!}
    <label class="active" for="user_name">User Name</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
    <label class="active" for="email">Client Email</label>
    <label class="error">{{ $errors->first('email') }}</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">perm_phone_msg</i>
    {!!Form::text('phone', null,array('class'=>'validate','id'=>'phone'))!!}
    <label class="active" for="name">Phone</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">stay_primary_portrait</i>
    {!!Form::text('mobile', null,array('class'=>'validate','id'=>'mobile'))!!}
    <label class="active" for="mobile">mobile</label>
</div>



<div class="input-field col s12">
    <i class="material-icons prefix">location_city</i>
    {!!Form::text('address', null,array('class'=>'validate','id'=>'address'))!!}
    <label class="active" for="address"> Address</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">https</i>
    {!!Form::text('account', null,array('class'=>'validate','id'=>'account'))!!}
    <label class="active" for="account"> UCID</label>
</div>
{{--<div class="input-field col s12">--}}
    {{--<i class="material-icons">edit</i>--}}
    {{--{!!Form::text('customer_id', null,array('class'=>'validate','id'=>'customer_id'))!!}--}}
    {{--<label class="active" for="customer_id">customerID</label>--}}
{{--</div>--}}

<div class="input-field col s12">
    <i class="material-icons prefix">date_range</i>
    {!!Form::text('start_date', null,array('class'=>'validate','id'=>'start_date'))!!}
    <label class="active" for="start_date">Sales Date</label>
    <label class="error">{{ $errors->first('start_date') }}</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">filter_list</i>
    {!!Form::text('order_status', null,array('class'=>'validate','id'=>'order_status'))!!}
    <label class="active" for="order_status">order status</label>
    <label class="error">{{ $errors->first('order_status') }}</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">edit</i>
    {!!Form::text('customer_id', null,array('class'=>'validate','id'=>'customer_id'))!!}
    <label class="active" for="customer_id">Customer ID</label>
        <label class="error">{{ $errors->first('customer_id') }}</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">settings_input_antenna</i>
    {{  Form::select('network_id', $networks, null, ['placeholder' => 'Select ISP','class'=>'form-control','id'=>'network_id',])}}
    <label for="network_id">ISP</label>
</div>

<div class="input-field col s12">
    <i class="material-icons prefix">group_work</i>
    {{  Form::select('packet_id', $packets, null, ['placeholder' => 'Select package','class'=>'form-control','id'=>'packet_id',])}}
    <label for="packet_id">package</label>
</div>


{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
