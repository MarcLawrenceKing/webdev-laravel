@extends('layout.master')
@section('content')
<div class="container p-0 m-10">
  <div class="row pt-5">
    <div class="col-md-3">
      <!-- Content for the first column -->
      <div class="p-3 border" style="background-color:#eeeeee;">
        <form>
          <div class="mb-3 d-flex" style="gap: 5px; justify-content: end; align-items:center;">
            <label for="exampleInputEmail1" class="form-label mb-0"> Email:</label>
            <input type="email" class="form-control w-75" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3 d-flex" style="gap: 5px; justify-content: end; align-items:center;">
            <label for="exampleInputPassword1" class="form-label  mb-0">Password: </label>
            <input type="password" class="form-control w-75" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check d-flex" style="gap: 10px;  justify-content: end; align-items:center;">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Forgot password?</a>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-9">
      <!-- Content for the second column -->
      <div class="p-3 border">
        <div class="container">
          <div class="row flex-column" style="gap:50px;">
            <div class="col">
              <div>
                <h1 class="text-center fw-bold">Pricing</h1>
                <p class="text-center fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto tempore quis corporis officia at natus, vitae voluptates quae dignissimos accusantium laboriosam id. Iure suscipit tempora porro nemo, quam quibusdam? Doloribus?</p>
              </div>
            </div>
            <div class="row" style="display:flex; align-items:center; justify-content: center;">
              @foreach($guitars as $guitar)
              <div class="card" style="width: 18rem; display:flex; align-items:center;">
                <img src="{{$guitar['img']}}" class="card-img-top" alt="..." style="height: 150px; width: 285px;">
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold">{{$guitar['title']}}</h5>
                  <p class="card-text text-center">{{$guitar['body']}}</p>
                </div>
              </div>
              @endforeach
            </div>
            <div class="col">
              <h4 class="text-center mb-3 fw-bold">Compare Plans</h4>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col" class="text-center">Free</th>
                    <th scope="col" class="text-center">Pro</th>
                    <th scope="col" class="text-center">Enterprise</th>
                  </tr>
                </thead>
                @foreach ($plans as $plan)
                <tr>
                  <th scope="row">{{ $plan['type'] }}</th>
                  <!-- Free Column -->
                  <td class="text-center">
                    @if ($plan['free'])
                    <i class="bi bi-check-lg"></i>
                    @endif
                  </td>
                  <!-- Pro Column -->
                  <td class="text-center">
                    @if ($plan['pro'])
                    <i class="bi bi-check-lg"></i>
                    @endif
                  </td>
                  <!-- Enterprise Column -->
                  <td class="text-center">
                    @if ($plan['enterprise'])
                    <i class="bi bi-check-lg"></i>
                    @endif
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection