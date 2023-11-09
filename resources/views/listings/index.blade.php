@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
    
@if(count($listings) == 0)
<p>No listings found</p>
@endif
<div
class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
>
@foreach ($listings as $listing)
<x-listing-card :listing="$listing"/>
@endforeach
</div>
<div class="pt-5 px-4">
   {{$listings->links()}}
</div>
@endsection