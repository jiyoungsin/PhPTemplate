@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach($users as $user)
                <p>{{$user->username}}</p>
            @endforeach 
        </div>
    </div>
</div>
@endsection

