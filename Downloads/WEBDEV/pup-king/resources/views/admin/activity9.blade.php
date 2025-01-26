@extends('layout.master')
@section('content')
<div class="container">
  <div class="row pt-5">
    <div class="col-md-5">
      <!-- Content for the first column -->
      <form>
        <div class="mb-3">
          <input placeholder="Enter Title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <input placeholder="Enter Description" type="text" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected hidden>Status</option>
            @foreach ($status as $status_)
            <option value="{{ $status_->id }}">{{ $status_->status }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected hidden>Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>
    </div>
    <div class="col-md-7">
      <!-- Content for the second column -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $blog)
          <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->status_id }}</td>
            <td>{{ $blog->category_id }}</td>
          </tr>
          @endforeach

        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
      </div>
    </div>
  </div>
</div>
@endsection