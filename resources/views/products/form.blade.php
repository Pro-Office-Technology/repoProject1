@extends('layouts.app')

@section('title', 'Index Field')

<br>
<br>
<div class="container">
    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.save') }}" method="post">
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
                        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 24px;">Index Field Form</h6>
                    </div>
    <div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter index field name" value="{{ isset($product) ? $product->name : '' }}">
    </div>
    <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="type">
            <option value="String" {{ isset($product) && $product->type == 'String' ? 'selected' : '' }}>String</option>
            <option value="Date" {{ isset($product) && $product->type == 'Date' ? 'selected' : '' }}>Date</option>
            <option value="Float" {{ isset($product) && $product->type == 'Float' ? 'selected' : '' }}>Float</option>
        </select>
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

