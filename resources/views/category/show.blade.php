@extends('dashboard.dashboard_master')
@section('page_title')
    Single show Category
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-2">
                    <div class="card-header">
                        Single Category show
                    </div>

                    <table class="table table-striped table-border table-inverse">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Category Id</th>
                                <th>Category Name</th>
                                <th>Created At</th>

                            </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td>{{ $category->id}}</td>
                                    <td>{{ $category->category_name}}</td>
                                    <td>{{ $category->created_at->diffforhumans()}}</td>
                                </tr>

                            </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


@endsection

