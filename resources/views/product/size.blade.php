@extends('dashboard.dashboard_master')

@section('page_title')
    Add Size
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Add Size
                    </div>
                    <div class="card-body">
                    <form action="{{ route('product.size.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                     <div class="form-group">
                       <label>Size name</label>
                       <input type="text"  class="form-control" name="size_name" >
                     </div>
                     {{-- <label>Color Code</label>
                     <input type="color" name="color_code" > --}}

                   </div>
                   <br>
                     <div class="form-group">
                        <button type="sunmit" class="btn btn-rounded btn-info"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add Size</button>

                      </div>
                    </form>
                </div>

                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            view Color
                        </div>
                        <div class="card-body">
                      <table class="table table-borderd">
                          <thead>
                              <tr>
                                  <th>Color Name</th>
                                  <th>Action</th>

                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($sizes as $size)

                              <tr>
                                  <td>{{$size->size_name}}</td>
                                  <td>
                                    <a href="{{ route('size.delete',$size->id) }}" class="btn btn-danger waves-effect waves-light">DELETE</a>

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


@endsection
