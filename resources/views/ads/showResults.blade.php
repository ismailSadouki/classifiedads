@extends('layouts.app')

@section('title', __('titles.srch_title'))

@section('content')
<p><h3 class="mb-5">نتائج البحث:</h3></p>

    @include('partials.ads')

@endsection