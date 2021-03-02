@extends('layouts.admin')
@section('content')
    <h2>{{ $category->title }}</h2>
    <div>{!! $category->description !!}</div>
@endsection