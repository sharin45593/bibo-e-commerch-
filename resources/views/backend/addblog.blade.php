@extends('dashboard.dashboard_master')
@section('page_title')
     Add Blog
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card p-2">
                <div class="card-header">
                Uploaded New Blog
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
                <div class="card-body">

                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
                    <label>Upload blog cover photo</label>
                     <input type="file"  class="form-control" name="blog_photo" >
                     <small class="text-info"> Please upload a photo with width 700px height 520px</small>

                </div>
                <div class="form-group">
                    <label>Blog title</label>
                    <input type="text" class="form-control" name="blog_title">
                 </div>
                 <div class="form-group">

                     <label>Blog description</label>
                     <textarea id="blog_description" class="form-control" name="blog_description" rows="4" ></textarea>
                 </div>
                 <div class="form-group">
                     <button class="btn btn-success">Add Blog</button>
                </div>

               </form>
            </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card p-2">
            <div class="card-header">
               Blog list
            </div>
            <div class="card-body">

                <table class="table table-bordered ">
                    <thead class="thead-inverse">
                        <tr>
                            <th>SL.No</th>
                            <th>Blog image</th>
                            <th>Blog title</th>
                            <th>created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $key=>$blog )

                            <tr>
                                <td>{{ $key+1 }}</td>
                               <td>
                                <img class="w-25" src="{{ asset('uploads/blog_photo') }}/{{ $blog->blog_photo}}" alt="not found">
                             </td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ \carbon\carbon::now()->format('jS  F Y ') }}</td>
                                <td>
                                    <a href="{{ route('blog.delete',$blog->id) }}" class="btn btn-danger waves-effect waves-light">DELETE</a>

                                 </td>


                            </tr>
                            @endforeach


                        </tbody>
                </table>
        </div>
    </div>
  </div>
   </div>




</div>
</div>
@endsection
@section('footer_scripts')
<script>
   $(document).ready(function() {
    $('#blog_description').summernote();

    });

</script>
@endsection
