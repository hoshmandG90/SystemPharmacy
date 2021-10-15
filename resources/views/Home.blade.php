@extends('layouts.master')


@section('content')

Hi dear {{ auth()->user()->name }}
    
@endsection