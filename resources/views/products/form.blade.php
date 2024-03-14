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
                                <option value="" disabled selected>Please select type</option>
                                <option value="String" {{ isset($product) && $product->type == 'String' ? 'selected' : '' }}>String</option>
                                <option value="Date" {{ isset($product) && $product->type == 'Date' ? 'selected' : '' }}>Date</option>
                                <option value="Float" {{ isset($product) && $product->type == 'Float' ? 'selected' : '' }}>Float</option>
                            </select>
                        </div>
                        <div class="form-group" id="lengthField" style="display: none;">
                            <label for="length">Length (Maximum 255)</label>
                            <input type="text" class="form-control" id="length" name="length" placeholder="Enter length">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var typeSelect = document.getElementById('type');
        var lengthField = document.getElementById('lengthField');

        typeSelect.addEventListener('change', function () {
            if (this.value === 'String') {
                lengthField.style.display = 'block';
            } else {
                lengthField.style.display = 'none';
            }
        });


        if (typeSelect.value === 'String') {
            lengthField.style.display = 'block';
        }
    });
</script>
