@extends('layouts.app')

@section('content')

<h4>{{ $customer->name }}</h4>
<ul>
    @foreach($customer->sites as $site)
        <li><strong>{{ $site->name }}</strong> ({{ $site->latitude }}, {{ $site->longitude }})</li>
    @endforeach
</ul>

@stop
