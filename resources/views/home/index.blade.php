@extends('layouts.app')

@section('content')

    <div class="fff">
        home page {{ $user->photo->mime_type }}
    </div>

@endsection
