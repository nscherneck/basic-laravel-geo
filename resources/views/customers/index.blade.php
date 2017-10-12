@extends('layouts.app')

@section('content')

<h3>Customers: {{ $customers->count() }}</h3>
<hr>
@foreach($customers as $customer)
    <h4>
        <a href="{{ $customer->path() }}">
            {{ $customer->name }}
        </a>
    </h4>
    <ul>
        @foreach($customer->sites as $site)
            <li><strong>{{ $site->name }}</strong> ({{ $site->latitude }}, {{ $site->longitude }})</li>
        @endforeach
    </ul>
@endforeach

@stop
