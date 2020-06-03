@extends('components.layout')
@section('title','list book')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">List Book</h2>

        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <form action="{{route("search")}}" method="POST">
                <div class="form-group">
                    @csrf
                    @method("POST")

                    <label for="inputUserName">Title</label>
                    <input name="name_title" class="form-control "  id="inputUserName" required="" type="text" placeholder="Enter title by search" autocomplete="off" data-parsley-trigger="change">

                </div>
                <button class="btn btn-space btn-primary" type="submit">Sear Title</button>
            </form>


        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">List Book </h5>
                {{--                <p>This example shows DataTables and the RowGroup extension being used with Bootstrap 4 providing the styling.</p>--}}
            </div>
            <div class="card-header">
                <a href="{{route("new-book")}}"class="float-right btn btn-outline-primary">+</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="dataTables_wrapper dt-bootstrap4" id="example2_wrapper">
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered dataTable" id="example2" role="grid" aria-describedby="example2_info" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 50px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">STT</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 50px;" aria-label="Name: activate to sort column ascending" rowspan="1" colspan="1">BookId</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 309px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Title</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">authorid</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">ISBN</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">pub_year</th>
                                        <th tabindex="0" class="sorting" aria-controls="example2" style="width: 74px;" aria-label="Age: activate to sort column ascending" rowspan="1" colspan="1">avaliable</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($book as $value)
                                        <tr class="even" role="row">
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$value->__get("bookid")}}</td>
                                            <td>{{$value->__get('title')}}</td>

                                            <td>{{$value->__get('authorid')}}</td>
                                            <td>{{$value->__get('ISBN')}}</td>
                                            <td>{{$value->__get('pub_year')}}</td>
                                            <td>{{$value->__get('avaliable')}}</td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries
                                </div>
                            </div><div class="col-sm-12 col-md-7">
                                {!! $book->links() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
