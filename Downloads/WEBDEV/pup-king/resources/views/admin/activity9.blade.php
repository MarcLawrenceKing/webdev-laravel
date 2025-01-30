@extends('layout.master')
@section('content')
<div class="container">
  <div class="row pt-5">
    <div class="col-md-5">
      <!-- Content for the first column -->
      <form method='POST' action="{{route('activity9.create')}}" id="createBlogForm">
        @csrf
        <div class="mb-3">
          <input name="title" placeholder="Enter Title" type="text" class="form-control">
        </div>
        <div class="mb-3">
          <input name="description" placeholder="Enter Description" type="text" class="form-control">
        </div>

        <div class="mb-3">
          <select name="status_id" class="form-select" aria-label="Default select example">
            <option selected hidden>Status</option>
            @foreach ($status as $status_)
            <option value="{{ $status_->id }}">{{ $status_->status }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <select name="category_id" id="category" class="form-select" aria-label="Default select example">
            <option selected hidden>Category</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        <div class="toast-container position-fixed bottom-0 end-0 p-3">
          <div id="liveToast" class="toast text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
              <div class="toast-body">
                Success Input!!
              </div>
              <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        </div>

      </form>
    </div>
    <div class="col-md-7">
      <!-- Content for the second column -->
      <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Category</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $blog)
          <tr>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->stats->status?? 'N/A' }}</td>
            <td>{{ $blog->category->name?? 'N/A' }}</td>
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

<script type="module">
  $(document).ready(function() {
    console.log("jQuery is working!");
  });
  const form = '#createBlogForm';
  $(function() {
    createBlog()
  });

  function createBlog() {
    $(form).on('submit', function(event) {
      event.preventDefault(); //prevents page refresh

      $.ajax({
        url: `{{route('activity9.create')}}`,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,

        success: function(response) {
          $('#liveToast').removeClass('d-none').fadeIn(100);
          setTimeout(() => {
            $('#liveToast').fadeOut(1000);
          }, 5000);

          populateData(response);
          resetField();
        },
        error: function(response) {
          console.log(response.responseJSON.message)
        },
      })
    });
  }

  function populateData(response) {
    var row = '<tr>';
    row += '<td>' + response.title + '</td>';
    row += '<td>' + response.description + '</td>';
    row += '<td>' + response.stats.status + '</td>';
    row += '<td>' + response.category.name + '</td>';
    row += '</tr>';

    $("table").find('tbody').prepend(row);
  }

  function resetField() {
    $(form).find("input[type=text], textarea").val("");
    $(form).find('option[selected').prop('selected', true)
  }
</script>
@endsection