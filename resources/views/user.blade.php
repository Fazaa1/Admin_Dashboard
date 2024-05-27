@extends('template.master')


@section('title-page', 'Form')
@section('Content')

<h2> Dashboard User</h2>
<form action="{{route ('login.logout')}}" method="POST">
@csrf
@method('POST')
<input type="submit" value="Logout">
</form>

@endsection