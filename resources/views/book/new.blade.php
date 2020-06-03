@extends('components.layout')
@section('title','new book')
@section('content')
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Add book</h2>

        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Add Book</h5>
            <div class="card-body">
                <form id="basicform" action="{{route("save-book")}}" method="POST" novalidate="" data-parsley-validate="">
                    @csrf
                    @method("POST")
                    <div class="form-group">
                        <label for="inputUserName">Title</label>
                        <input name="title" class="form-control @error("title") is-invalid  @enderror"  id="inputUserName" required="" type="text" placeholder="Enter title" autocomplete="off" data-parsley-trigger="change">
                        @error("title")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Authorid</label>
                        <input name="authorid" class="form-control @error("authorid") is-invalid  @enderror"  id="inputUserName" required="" type="number" placeholder="Enter author id" autocomplete="off" data-parsley-trigger="change">
                        @error("authorid")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">ISBN</label>
                        <input name="ISBN" class="form-control @error("ISBN") is-invalid  @enderror"  id="inputUserName" required="" type="text" placeholder="Enter ISBN" autocomplete="off" data-parsley-trigger="change">
                        @error("ISBN")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Pub_year</label>
                        <input name="pub_year" class="form-control @error("pub_year") is-invalid  @enderror"  id="inputUserName" required="" type="number" placeholder="Enter pub_year" autocomplete="off" data-parsley-trigger="change">
                        @error("pub_year")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inputUserName">Avaliable</label>
                        <select name="avaliable" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 pl-0">

                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button class="btn btn-space btn-primary" type="submit">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection

