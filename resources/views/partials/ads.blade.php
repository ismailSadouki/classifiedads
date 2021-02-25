
@extends('layouts.app')

<?php $title=$ads->first(); ?>

@section('title', $title? $title->category->name :"لا توجد إعلانات ضمن هذا القسم")

@section('content')

<p><h3 class="mb-5">{{empty($title)?"لا توجد إعلانات مضافة في هذا القسم":$title->category->name}}</h3></p>

    @include('partials.ads')

@endsection
