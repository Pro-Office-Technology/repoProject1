@extends('layouts.app')

@section('title', 'Record Type')

@section('content')

<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="font-size: 24px;">Record Type Form</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('recordtype1.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="filename">File Name</label>
                            <input type="text" class="form-control" id="filename" name="filename" placeholder="Enter File Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" onclick="openModal()">Choose Index Field to use</button>
                        </div>
                        <div class="modal" id="myModal">
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Choose Index Field To Use</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <!-- Add checkboxes for index fields -->
                                        @foreach($indexfield as $id => $name)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="indexfield[]" value="{{ $id }}" id="indexField{{ $id }}">
                                                <label class="form-check-label" for="indexField{{ $id }}">
                                                    {{ $name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>


                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {{-- <button type="button" class="btn btn-primary" onclick="saveSelection()">Save</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function openModal(recordId) {
                                // Show the modal
                                $('#myModal').modal('show');
                                // Optionally, you can perform additional actions when opening the modal
                                console.log('Modal opened for record ID: ' + recordId);
                            }
                        </script>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
