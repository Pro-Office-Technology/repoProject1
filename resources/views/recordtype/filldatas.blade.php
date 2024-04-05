@extends('layouts.app')

@section('title', 'Fill Data')
<br>
<br>
@section('content')
<br>
<br>
<br>
<br>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Selected PDF from {{ $filename }} Folder</h1>
                @if(isset($pdf))
                    <iframe src="{{ asset('storage/input/' . $filename . '/' . $pdf) }}" style="width:100%; height:600px;"></iframe>
                @else
                    <p>No PDF selected</p>
                @endif
            </div>
            <div class="col-md-6">
                <h1>Fill Data {{ $filename }}</h1>
                <form>

                    @csrf
                    @foreach ($indexfields as $indexfield)
                        <div class="form-group">
                            <label for="{{ $indexfield->name }}">{{ $indexfield->name }}</label>
                            <input type="{{ $indexfield->type }}" id="{{ $indexfield->name }}" name="{{ $indexfield->name }}" class="form-control" placeholder="Enter {{ $indexfield->name }}">
                        </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            </div>
        </div>
    </div>
@endsection

      
