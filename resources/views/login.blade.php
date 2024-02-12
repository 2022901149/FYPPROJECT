@extends('layout')
@section('title','Login')
@section('content')
<div class="container">
  <div class="mt-5">
    @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
    @endif

    @if(session()->has('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
</div>


  <form action="{{route('login.post')}}" method="POST" class="custom-form border rounded p-4 shadow ms-auto me-auto mt-4" style="width: 500px">
    @csrf
    <div class="text-center mb-4">
      <img src="images/logo.png" alt="Logo" style="max-width: 200px; height: auto;">
    </div>
    <h1 class="heading">Login</h1>
    <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email">
        
      </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
    </div>
   
    <button type="submit" class="btn custom-submit-btn"  style="width:100%">Submit</button>
    <p>&nbsp;</p>
    <p>Don't have an account? <a href="registration">Register Now!</a></p>
  
  </form>
</div>
<style>
  body{
    background:#4C5933;
  }

  .custom-submit-btn {
        background-color: #A0AC60;
        /* Add any additional styling you want */
        color: #fff; /* Text color */
        border: none; /* Remove border if needed */
    }

    .custom-submit-btn:hover {
        background-color: #4C5933;
        color:#fff /* Change this to your desired hover color */
        /* Add any additional styling for the hover state */
    }

  .custom-form {
      background:  #EBE9BE; /* Set border color to your custom color */
      border-radius: 8px;
  }

  .custom-form input {
      margin-bottom: 10px;
  }
</style>

@endsection