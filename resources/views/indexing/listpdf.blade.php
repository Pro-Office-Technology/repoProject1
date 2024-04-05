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
        <table class="table">
            <thead>
                <tr>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pdfFiles as $pdfFile)
                    <tr>
                        <td>{{ $pdfFile }}</td>
                        <td>
                            {{-- <form action="{{ route('indexing.showpdf', ['filename' => $folderName, 'pdf' => $pdfFile]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">View Pdf</button>
                            </form> --}}
                            <form action="{{ route('recordtype1.filldata', ['filename' => $folderName]) }}" method="GET">
                                @csrf
                                <button class="btn btn-primary">Key in Data</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endsection
