@extends('layouts.app')

@section('title', 'Record Type')

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
                    <form action="{{ route('register1.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="filename">File Name</label>
                            <input type="text" class="form-control" id="filename" name="filename" placeholder="Enter File Name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
