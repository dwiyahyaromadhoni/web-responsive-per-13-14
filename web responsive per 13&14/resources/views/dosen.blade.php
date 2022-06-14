@extends('layouts.app')

@section('title', 'Dosen')

@section('content')
    <h1>Dosen</h1>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Position</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dosens as $key => $dosen)
                <tr>
                    <th scope="row">{{ $dosens->firstItem() + $key}}</th>
                    <td>{{ $dosen->name }}</td>
                    <td>{{ $dosen->gender }}</td>
                    <td>{{ $dosen->position }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $dosens->links() }}
@endsection
