@extends('layouts.app')

@section('title', 'Record Type')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-12 text-center">
            <h5 style="font-size: 2em; font-weight: bold;">RECORD TYPE</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-right">
                        <a href="{{ route('recordtype1.add') }}" class="btn btn-success">Add Record</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="basic-key-table" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Record Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $recordtype)
                                    <tr>
                                        <td>{{ $recordtype['filename'] }}</td>
                                        <td>{{ $recordtype['description'] }}</td>
                                        <td>
                                            <a href="{{ route('recordtype1.edit', $recordtype->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('recordtype1.delete', $recordtype->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



 <!-- Required Js -->
 <script src="../assets/js/vendor-all.min.js"></script>
 <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 <script src="../assets/js/pcoded.min.js"></script>



<!-- datatable Js -->
<script src="../assets/plugins/data-tables/js/datatables.min.js"></script>
<script src="../assets/js/pages/data-key-custom.js"></script>


<div class="footer-fab">
 <div class="b-bg">
     <i class="fas fa-question"></i>
 </div>
 <div class="fab-hover">
     <ul class="list-unstyled">
         <li><a href="../doc/index-bc-package.html" target="_blank" data-text="UI Kit" class="btn btn-icon btn-rounded btn-info m-0"><i class="feather icon-layers"></i></a></li>
         <li><a href="../doc/index.html" target="_blank" data-text="Document" class="btn btn-icon btn-rounded btn-primary m-0"><i class="feather icon feather icon-book"></i></a></li>
         <li>
             <a href="#!" target="_blank" data-text="Buy now" class="btn btn-icon btn-rounded btn-success btn-envato m-0 p-0">
                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.16 512.16" style="enable-background:new 0 0 512.16 512.16;margin-right:5px;" xml:space="preserve"
                     width="18px" height="18px" class="">
                     <g>
                         <path d="M428.669,22.858l-3.029-6.101C419.692,5.442,407.467-1.126,394.749,0.16  c-75.456,0-249.344,116.608-265.451,302.763c-17.138-41.848-24.984-86.918-22.997-132.096c0.004-8.828-5.615-16.678-13.973-19.52  c-8.423-2.955-17.794-0.259-23.36,6.72c-31.163,40.288-47.907,89.867-47.552,140.8c0,102.741,73.429,213.333,234.667,213.333  c173.205,0,234.667-137.899,234.667-256C489.945,174.417,468.597,94.19,428.669,22.858z"
                             data-original="#4CAF50" class="active-path" data-old_color="#ffffff" fill="#ffffff"></path>
                     </g>
                 </svg>
             </a>
         </li>
     </ul>
 </div>
</div>
</body>
@endsection
