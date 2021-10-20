<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
@extends('layouts.app')
@section('content')
    <form action="{{route('signup')}}" class="col-md-6" method="post">
        {{csrf_field()}}
        <div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group">
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
</div>
        <div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group ">
            <span>Email</span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group">
            <span>Phone</span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        </div>
        <div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group">
            <span>Username</span>
            <input type="text" name="username" value="{{old('username')}}"class="form-control">
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
</div>
<div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group">
            <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}"class="form-control">
            @error('password')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
</div>
<div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group">
            <span>Confirm Password</span>
            <input type="password" name="cpassword" value="{{old('cpassword')}}" class="form-control">
            @error('cpassword')
            <span class="text-danger">{{$message}}</span>
             @enderror
        </div>
</div>
<div class="d-flex justify-content-center align-items-center" style=""> 
        <div class="col-md-4 form-group">
            <span>Date of Birth</span>
            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
            @error('dob')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
</div>
</div>
<div class="d-flex justify-content-center align-items-center" style=""> 
        <input type="submit" class="btn btn-success" value="Signup" >
</div>
    </form>
@endsection