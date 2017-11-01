@inject('role','App\Role')

<?php
$roles = $role->pluck('display_name', 'id');
$role2 = auth()->user()->roles()->first()->name;

?>


<div class="input-field col s12">
    <i class="material-icons prefix">email</i>
    {!!Form::email('email', null,array('class'=>'validate','id'=>'email'))!!}
    <label class="active" for="email">User Email</label>
    <label class="error">{{ $errors->first('email') }}</label>
</div>


<div class="input-field col s12">
    <i class="material-icons prefix">account_circle</i>
    {!!Form::text('name', null,array('class'=>'validate','id'=>'name'))!!}
    <label class="active" for="name">User </label>
</div>

{{--========================itlian=============--}}
@if($role2=="admin")
    <div class="input-field col s12">
        {{  Form::select('role[]', $roles, null, ['placeholder' => 'Role','class'=>'form-control',])}}

        <label for="role_id">Role</label>
    </div>

@elseif($role2=="salesManager")
    <input type="hidden" name="role[]" value="2">
@elseif($role2=="supportManager")

    <input type="hidden" name="role[]" value="4">
@endif



{{--========================french=============--}}


<div class="input-field col s12">
    <i class="material-icons prefix">lock</i>

    {!!Form::password('password', null,array('class'=>'validate','id'=>'password'))!!}
    <label class="active" for="password">Password</label>
    <label class="error">{{ $errors->first('password') }}</label>
</div>
<div class="input-field col s12">
    <i class="material-icons prefix">lock</i>
    {!!Form::password('password_confirmation', null,array('class'=>'validate','id'=>'password_confirmation'))!!}
    <label class="active" for="password_confirmation">Password Confirmation</label>
    <label class="error">{{ $errors->first('password_confirmation') }}</label>
</div>


{!! Form::submit($submitButton, array('class'=>'btn btn-primary text-center','id' => 'submit')) !!}
