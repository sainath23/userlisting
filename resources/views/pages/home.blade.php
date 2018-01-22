@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <div class="jumbotron">
        <h1 style="text-align:center;">Welcome User</h1>
        <p>This is a simple user listing application. Kindly submit your entry by clicking on Contact Us button. To view the existing responses, kindly click on View Responses button.</p>
        <p>
            <div class="row">
                <div class="col-md">
                    <div class="text-center">
                        <a href="{{ url('/contact') }}" class="btn btn-primary">Contact Us</a>
                        <a href="{{ url('/responses/list') }}" class="btn btn-primary">View Responses</a>
                    </div>
                </div>
            </div>
        </p>
    </div>
@endsection