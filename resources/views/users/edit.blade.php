@extends('layouts.default')
@section('page-title', 'Editar Usuário')

@section('content')
    @session('status')
        <div class="alert alert-success">
            {{ $value }}
        </div>
    @endsession
    @include('users.parts.basic-datails')
    <br>
    @include('users.parts.profile')
@endsection
