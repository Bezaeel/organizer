@extends('layouts.app')

@section('content')

<p>{{$user->id}}</p>
<p>{{$user->name}}</p>
<p>{{$user->work}}</p>
<p>{{$user->phone}}</p>
<p>{{$user->twitter}}</p>

@endsection