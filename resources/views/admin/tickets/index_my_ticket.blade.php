@extends('admin.main')
@section('content')
 <div class="fixed-action-btn">

     {{--@role(['admin','sales','salesManager'])--}}
    {{--<a class="btn-floating btn-large red"  href="{{ url('controll/tickets/create')}}">--}}
        {{--<i class="large material-icons" >add</i>--}}
    {{--</a>--}}
     {{--@endrole--}}
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
                    <th data-field="company">title</th>
                    <th data-field="company">status</th>
                    <th data-field="company">Department</th>

                    @role(['admin'])
                    <th data-field="progress">Action</th>
                    @endrole
                </tr>
            </thead>
            <tbody class="data">
                @include('admin.tickets.loop_my_ticket')
            </tbody>
        </table>
        {!! $rows->render() !!}
    </div>
</div>
@endsection