@extends('layout')

@section('content')
@include('partials._header')

{{-- <example-component></example-component>
<example-component></example-component>
<example-component></example-component> --}}


<div class="px-5 pt-12 w-full h-full">
    @foreach($jobs as $job)
        <x-card :job="$job"></x-card>
    @endforeach
</div>

@endsection
