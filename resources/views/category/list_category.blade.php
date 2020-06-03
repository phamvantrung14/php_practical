@extends('components.layout')
@section('title','Category Listing')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">List Category</h2>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Dashboard</a></li>
                        <li class="breadcrumb-item"><a class="breadcrumb-link" href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">List Category </h5>
{{--                <p>This example shows DataTables and the RowGroup extension being used with Bootstrap 4 providing the styling.</p>--}}
            </div>
            <div class="card-header">
                <a href="{{url('admin/new-category')}}"class="float-right btn btn-outline-primary">+</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="dataTables_wrapper dt-bootstrap4" id="example2_wrapper">
                        <div class="row">
{{--                            <div class="col-sm-12 col-md-6">--}}
{{--                                <div class="dataTables_length" id="example2_length">--}}
{{--                                    <label>Show <select name="example2_length" class="custom-select custom-select-sm form-control form-control-sm" aria-controls="example2">--}}
{{--                                            <option value="10">10</option>--}}
{{--                                            <option value="25">25</option>--}}
{{--                                            <option value="50">50</option>--}}
{{--                                            <option value="100">100</option>--}}
{{--                                        </select> entries</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-sm-12 col-md-6">--}}
{{--                                <div class="dataTables_filter" id="example2_filter">--}}
{{--                                    <label>Search:<input class="form-control form-control-sm" aria-controls="example2" type="search" placeholder=""></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered dataTable" id="example2" role="grid" aria-describedby="example2_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 201px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">STT</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 309px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Name</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Created at</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Updated at</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">Tác vụ</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($cate as $value)
                                    <tr class="even" role="row">
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$value->__get('category_name')}}</td>

                                        <td>{{$value->__get('created_at')}}</td>
                                        <td>{{$value->updated_at}}</td>
                                        <td >
                                            <a href="{{url("admin/edit-category/{$value->__get("id")}")}}" class=" btn btn-rounded btn-primary">Edit</a>
{{--                                            <a href="{{url("admin/delete-category/{$value->__get("id")}")}}" class="btn btn-rounded btn-danger">Delete</a>--}}
                                            <form action="{{url("admin/delete-category/{$value->__get("id")}")}}" method="post">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" onclick="return confirm('Are you sure');" class=" btn btn btn-rounded btn-danger">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>

{{--                                    <tr>--}}
{{--                                        <th rowspan="1" colspan="1">Name</th>--}}
{{--                                        <th rowspan="1" colspan="1">Position</th>--}}
{{--                                        <th rowspan="1" colspan="1">Age</th>--}}
{{--                                    </tr>--}}




                                    </tfoot>
                                </table>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries
                                </div>
                            </div><div class="col-sm-12 col-md-7">
                                {!! $cate->links() !!}

                                {{--                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">--}}
{{--                                    <ul class="pagination"><--}}
{{--                                        li class="paginate_button page-item previous disabled" id="example2_previous">--}}
{{--                                        <a tabindex="0" class="page-link" aria-controls="example2" href="#" data-dt-idx="0">Previous</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="paginate_button page-item active"><a tabindex="0" class="page-link" aria-controls="example2" href="#" data-dt-idx="1">1</a>--}}
{{--                                        </li><li class="paginate_button page-item "><a tabindex="0" class="page-link" aria-controls="example2" href="#" data-dt-idx="2">2</a>--}}
{{--                                        </li><li class="paginate_button page-item "><a tabindex="0" class="page-link" aria-controls="example2" href="#" data-dt-idx="3">3</a>--}}
{{--                                        </li><li class="paginate_button page-item next" id="example2_next"><a tabindex="0" class="page-link" aria-controls="example2" href="#" data-dt-idx="4">Next</a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
