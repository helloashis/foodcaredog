@extends('layouts.admin-layout')
@section('title', 'Admin Create Post')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Post</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Create Post</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form action="{{ route('save.post') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            Create new post
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="title">Post Title</label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter the title here..">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="title">Category</label>
                                        <select name="category" class="form-control" id="">
                                            <option selected>Select One</option>
                                            <option value="Best food for french bulldog">Best food for french bulldog</option>
                                            <option value="Best puppy food for french bulldog">Best puppy food for french bulldog</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content">Content</label>
                                        <textarea rows="10"  name="content" class="textarea" placeholder=""
                                  style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                                </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="content">Status</label>
                                        <div class="row">
                                            <div class="col-sm-4">

                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio1" name="status" value="1" checked>
                                                    <label for="customRadio1" class="custom-control-label">Published</label>
                                                  </div>
                                            </div>
                                            <div class="col-sm-4">

                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" type="radio" id="customRadio2" name="status" value="0">
                                            <label for="customRadio2" class="custom-control-label">Draft</label>
                                          </div>
                                            </div>
                                        </div>

                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
@endsection
