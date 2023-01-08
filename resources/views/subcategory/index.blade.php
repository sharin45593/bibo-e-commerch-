@extends('dashboard.dashboard_master')
@section('page_title')
    List SubCategory
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                        List SubCategory
                    </div>
                    @if (session('success'))
                    <div class="alert alert-warning">
                        {{ session('success') }}
                    </div>
                    @endif
                    <table class="table table-striped table-inverse table-border">
                        <thead class="thead-inverse">
                            <tr class="text-center">
                                <th>SubCategory Name</th>


                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($category_ingroup as $category)
                                <tr class="text-center">
                                    <td colspan="5">
                                        <b>{{ App\Models\category::find($category->category_id )->category_name }}</b>

                                    </td>
                                </tr>
                                    @foreach ( App\Models\subcategory::where('category_id',$category->category_id)->get() as $subcategory )

                                    <tr>

                                       <td> {{ $subcategory->subcategory_name }} </td>

                                    </tr>
                                    @endforeach

                                @empty

                                @endforelse




                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection
