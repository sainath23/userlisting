@extends('layouts.app')

@section('title', 'Contact Us')

@section('contact-active', 'active')

@section('content')
<h1 style="text-align:center;">Contact Us</h1>
<div class="container col-xs-8" style="margin-top:20px;">
    {!! Form::open(['action' => 'FeedbacksController@store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
        <fieldset>
            <legend>Please fill below form details:</legend>
            <div class="form-group">
                {!! Html::decode(Form::label('firstname', 'First Name<span style="color: #ff0000">*</span>', ['class' => 'col-lg-4 control-label'])) !!}
                <div class="col-lg-8">
                    {{ Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Enter your first name', 'required' => 'required']) }}
                </div>
            </div>
            <div class="form-group">
                {!! Html::decode(Form::label('lastname', 'Last Name<span style="color: #ff0000">*</span>', ['class' => 'col-lg-4 control-label'])) !!}
                <div class="col-lg-8">
                    {{ Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Enter your last name', 'required' => 'required']) }}                    </div>
            </div>
            <div class="form-group">
                {!! Html::decode(Form::label('email', 'Email<span style="color: #ff0000">*</span>', ['class' => 'col-lg-4 control-label'])) !!}
                <div class="col-lg-8">
                    {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email address', 'required' => 'required']) }}
                </div>
            </div>
            <div class="form-group">
                {!! Html::decode(Form::label('phonenumber', 'Phone Number<span style="color: #ff0000">*</span>', ['class' => 'col-lg-4 control-label'])) !!}
                <div class="col-lg-8">
                    {{ Form::text('phonenumber', '', ['class' => 'form-control', 'placeholder' => 'Enter your phone number', 'required' => 'required']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-lg-offset-4">
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                    {{ Form::reset('Clear', ['class' => 'btn btn-default']) }}
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
    @if(count($errors) > 0)
        <script>alert('{{ $errors->all()[0] }}');</script>
        <!--@foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
        @endforeach-->
    @endif
    @if(session('success'))
    <div class="alert alert-success">
                {{ session('success') }}
            </div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">
                {{ session('error') }}
            </div>
    @endif
</div>
@endsection