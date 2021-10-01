@extends('students.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
<form action="{{ route('students.store') }}" method="POST">
    @csrf
  
<center><h1>Registration</h1></center>
<div class="input-group"><label for="email">Email</label><input type="email" name="email" id="email" placeholder="Enter your email" /></div>
<div class="input-group"><label for="password">Password</label><input type="password" name="password" id="password" Placeholder="Enter your password"/></div>
<div class="input-group"><label for="name">Name</label><input type="text" name="name" id="name" Placeholder="Enter your name"/></div>
<div class="input-group"><label for="address">Address</label><input type="text" name="address" id="address" Placeholder="Enter your address"/></div>
<div class="input-group"><center><button type="submit" name="register">Register</button></center></div>
<div class="input-group"><center><a href="index.php" name="login">Already have an account? Sign in here</a><center></div>
   
</form>
</div>
@endsection