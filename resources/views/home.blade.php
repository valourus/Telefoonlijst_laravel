@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                Collega's
            </div>
            <div class="card-block">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($colleagues as $colleague)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $colleague->name }}</td>
                        <td>{{ $colleague->email }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
