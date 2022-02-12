@extends('layouts.admin-layout')
@section('title', 'Admin Manage Page')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manage Admin</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Manage Post</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <form action="{{ route('save.admin') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            Create new admin
                            @if (Session('msg'))
                                <div class="alert alert-success show float-right">
                                    <strong>{{Session('msg')}}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <marquee behavior="" direction="">
                                    <span class="text-bold text-success">
                                        Password will be auto genarated, and after the successfully registration he/she get the password by the mail.
                                    </span>
                                </marquee>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name"> Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Enter the name here..">
                                        @error('name')
                                            <p class="text-danger text-bold">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="email"> Email</label>
                                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Enter the email here..">
                                        @error('email')
                                            <p class="text-danger text-bold">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">Save</button>
                            <button type="reset" class="btn btn-danger btn-sm">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        Admin List
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Register Date</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td> <a href="mailto:{{ $item->email }}" class="text-dark">{{ $item->email }}</a></td>

                                        <td>
                                            {{ date('d M Y', strtotime($item->created_at))  }}
                                        </td>
                                        <td>
                                            @if ($item->id == Auth::user()->id || $item->id==1)
                                                <span class="badge badge-info">Can't Delete You</span>
                                            @else
                                                <a href="{{ route('admin.delete', $item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                            @endif

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
    <!-- /.content -->
@endsection
