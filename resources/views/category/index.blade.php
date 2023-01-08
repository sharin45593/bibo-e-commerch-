@extends('dashboard.dashboard_master')
@section('page_title')
    List Category
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                        List Category
                    </div>
                    @if (session('success'))
                    <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table table-striped table-inverse table-border">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Category Name</th>
                                <th>photo</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                <tr>
                                    <td>{{$category->category_name }}</td>
                                    <td>
                            <img class="w-50" src="{{ asset('uploads/category_photo') }}/{{ $category->category_photo}}" alt="not found">

                                    </td>
                                    <td> <a class="btn btn-success" href="{{ route('category.show',$category->id ) }}">show details</a></td>
                                    {{-- <td> <a class="btn btn-info" href="{{ route('category.edit',$category->id ) }}">Edit</a></td> --}}
                                   <td> <form action="{{ route('category.destroy',$category->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-warning" type="submit">Soft Delete</button>
                                    </form>
                                   </td>
                                   <td> <form action="{{ route('category.harddelete',$category->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Hard Delete</button>
                                </form>
                               </td>



                                </tr>
                                @empty

                                @endforelse

                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
