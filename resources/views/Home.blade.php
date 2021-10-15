@extends('layouts.master')

@section('title','Home')
@section('content')

Hi dear {{ auth()->user()->name }}
    
@endsection