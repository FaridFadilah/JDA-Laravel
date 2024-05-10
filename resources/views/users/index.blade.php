@extends("layouts.app")

@section("title")
    User Index
@endsection

@section("content")
    @foreach ($users as $user)
        <a href="{{ route("users.detail", $user["id"]) }}">{{ $user["nama"] }}</a>
    @endforeach
@endsection