@extends('admin.main')
@section('content')
 <div class="fixed-action-btn">
    <a class="btn-floating btn-large red"  href="{{ url('controll/networks/create')}}">
        <i class="large material-icons" >add</i>
    </a>
</div>
<div class="card invoices-card">
    <div class="card-content">
        <div class="card-options">
            {!! Form::open(['method' => 'get', 'class' => 'searchForm']) !!}
            <input type="text" name="value"  value="{{request()->input('value')}}" class="expand-search searchInput " placeholder="Search" autocomplete="off" >
            {!! Form::close() !!}
        </div>
        <span class="card-title">Pages</span>
        <table class="responsive-table bordered">
            <thead>
                <tr>
                    <th data-field="id">ID</th>
                    <th data-field="company">Name</th>

                    <th data-field="progress">Action</th>
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.networks.loop')
            </tbody>
        </table>
        {!! $rows->render() !!}
    </div>
</div>
@endsection