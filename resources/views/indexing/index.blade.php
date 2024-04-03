@extends('layouts.app')

@section('title', 'Indexing Page')
    <br>
    <br>
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            @foreach($recordtypes as $recordtype)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <a href="{{ route('recordtype1.listpdf', $recordtype->filename) }}">
                            <img class="card-img-top" src="{{ asset('images/f.jpg') }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('recordtype1.listpdf', $recordtype->filename) }}" class="card-title">{{ $recordtype->filename }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
