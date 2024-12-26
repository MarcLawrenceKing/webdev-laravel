@extends('layout.master')
@section('content')
<div class="container">

  <div class="row pt-5">
    <div class="col-md-6">
      <!-- Content for the first column -->
      <div class="p-3 border" style="background-color:#eeeeee

;">
        <form>
          <div class="mb-3 d-flex" style="gap: 10px; justify-content: center; align-items:center;">
            <label for="exampleInputEmail1" class="form-label mb-0">Email: </label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3 d-flex" style="gap: 10px;">
            <label for="exampleInputPassword1" class="form-label  mb-0">Password: </label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check d-flex" style="gap: 10px;  justify-content: center; align-items:center;">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Forgot password?</a>
          </div>

        </form>
      </div>
    </div>
    <div class="col-md-6">
      <!-- Content for the second column -->
      <div class="p-3 border">Column 2</div>
    </div>
  </div>

</div>
@endsection