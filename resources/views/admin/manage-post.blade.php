@extends('layouts.admin-layout')
@section('title', 'Admin Manage Post')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manage Post</h1>
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
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                      Manage Post
                  </h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Posting Date</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th class="text-center" width="15%" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($posts as $item)
                            <tr data-widget="expandable-table" aria-expanded="true">
                                <td>{{ $i }}</td>
                                <td>{{ $item->author }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ date('d M Y', strtotime($item->created_at)) }}</td>
                                <td>
                                    @if ($item->status == 1)
                                        Published
                                    @else
                                        Draft
                                    @endif
                                </td>
                                <td>{{ $item->title }}</td>
                                <td rowspan="1"  class="text-center">
                                    <a href="{{ route('delete', $item->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete </a>
                                    <a href="{{ route('edit', $item->slug) }}" class="btn btn-success btn-sm  mt-2"><i class="fas fa-pen"></i> Edit </a>
                                    <a target="blank" href="{{ route('post-details', $item->category) }}" class="btn btn-info btn-sm mt-2"><i class="fas fa-eye"></i> View </a>
                                </td>
                            </tr>
                        @php
                            $i++
                        @endphp
                        @endforeach

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <div class="d-flex justify-content-center">
                        {!! $posts->links() !!}
                    </div>
                </div>
              </div>
              <!-- /.card -->
            </div>
        </div>
    </div>
   <!-- /.content -->

@endsection
