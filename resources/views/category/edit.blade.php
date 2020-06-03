@extends('components.layout')
@section('title','new category')
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
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Basic Form</h5>
            <div class="card-body">
                <form id="basicform" action="{{url("admin/update-category/{$category->__get("id")}")}}" method="POST" novalidate="" data-parsley-validate="">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <label for="inputUserName">Category Name</label>
                        <input name="category_name" value="{{$category->__get("category_name")}}" class="form-control @error("category_name") is-invalid  @enderror"  id="inputUserName" required="" type="text" placeholder="Enter category name" autocomplete="off" data-parsley-trigger="change">
                        @error("category_name")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <label class="be-checkbox custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember me</span>
                            </label>
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
