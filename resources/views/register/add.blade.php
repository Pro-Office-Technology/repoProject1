@extends('layouts.app')

@section('title', 'Record Tpe')

<br>
<br>
<div class="container">
    {{-- <form action="{{ isset($record) ? route('records.update', $record->id) : route('records.save') }}" method="post"> --}}
        @csrf
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
                        <div class="form-group">
                            <label for="file name">File Name</label>
                            <input type="text" class="form-control" id="filename" name="filename" placeholder="Enter File Name" value="{{ isset($record) ? $record->filename : '' }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="{{ isset($record) ? $record->description : '' }}">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
