@extends('admin.main')
@section('content')

@section('header')
<link type="text/css" rel="stylesheet" 
    href="{{ asset('admin-assets/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')}}"/>

@endsection
<!-- start: page -->
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
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th class="hidden-xs">Engine version</th>
                                            <th class="hidden-xs">CSS grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Trident</td>
                                            <td>Internet
                                                Explorer 4.0
                                            </td>
                                            <td>Win 95+</td>
                                            <td class="center hidden-xs">4</td>
                                            <td class="center hidden-xs">X</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
