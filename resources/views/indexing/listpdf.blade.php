@extends('layouts.app')

@section('title', 'List PDF Files')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1>PDF Files for {{ $folderName }}</h1>
        <ul>
            @foreach ($pdfFiles as $pdfFile)
                <li>
                    <a href="{{ route('indexing.open.pdf', ['filename' => $folderName, 'pdf' => $pdfFile]) }}">{{ $pdfFile }}</a>
                </li>
            @endforeach
        </ul>
    </div>


