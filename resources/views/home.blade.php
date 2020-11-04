@extends('layouts.app')

<body>
    <table border="1">
        <tr>
            <th>Nama  :</th>
            <th>Roles :</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->usr_name}}</td>
            <td>{{$user->name}}</td>
            
            
        </tr>
        @endforeach
    </table>
</body>
<!--@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
