@extends('layouts.app')

@section('content')
    @include('messages')
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection
