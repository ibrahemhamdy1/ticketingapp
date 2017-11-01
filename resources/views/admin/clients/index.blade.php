@extends('admin.main')
@section('content')

@section('header')
<link type="text/css" rel="stylesheet" 
    href="{{ asset('admin-assets/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}"/>

@endsection
<!-- start: page -->
  <a class="btn btn-default btn-rounded btn-sm" href="{{ url('controll/importExport')}}"><i class="material-icons">IMPORT</i></a>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large red"  href="{{ url('controll/clients/create')}}">
            <i class="btn btn-success" >add</i>
        </a>
    </div>


                        <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                                </div>
                        
                                <h2 class="panel-title">Basic</h2>
                            </header>
                            <div class="panel-body">
                                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                    <thead>
                                    <tr>
                                        <th data-field="id">ID</th>
                                        <th data-field="company">{{trans('main.Name')}}</th>
                                        <th data-field="company">Account Number</th>
                                        <th data-field="company">{{trans('main.Email')}}</th>
                                        @role(['admin'])
                                        <th data-field="progress">{{trans('main.Actions')}}</th>
                                        @endrole
                                    </tr>
                                    </thead>
                                    <tbody>
                                      @include('admin.clients.loop')

                                        
                                    </tbody>
                                </table>
                                   {!! $rows->render() !!}

                            </div>
                        </section>

@endsection

@section('script')



<script src="{{ asset('admin-assets/assets/vendor/select2/js/select2.js')}}"></script>

 <script src="{{ asset('admin-assets/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')}}"></script>
    
<script src="{{ asset('admin-assets/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')}}
"></script>
        
                <script src="{{ asset('admin-assets/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')}}
"></script>




<script src="{{ asset('admin-assets/assets/javascripts/tables/examples.datatables.default.js')}}"></script>

<script src="{{asset('admin-assets/assets/javascripts/tables/examples.datatables.row.with.details.js')}}"></script>
<script src="{{ asset('admin-assets/assets/javascripts/tables/examples.datatables.tabletools.js')}}"></script>
@endsection
