@extends('admin.layouts.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
      <h2 class="text-center">Catalogues: {{ $model->name }}</h2>
      
        <div class="row d-flex justify-content-center">
           <div class="col-8">
                <div class="row mb-4">
                <a href="{{ route('admin.catalogues.index') }}" class="btn btn-primary col-1">Back</a>
                </div>
                <form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="name..." value="{{ $model->name }}">
                    </div>
                      
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                            <h4 class="card-title mb-0">Image Upload</h4>
                                    </div><!-- end card header -->

                                    <div class="card-body">
                                            <img width="300px" src="{{ \Storage::url($model->cover) }}" alt="">
                                    </div>
                                        <!-- end card body -->
                                </div>
                                    <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Status
                        </label>
                        {!! $model->is_active ? 
                            '<span class="badge bg-success">Active</span>':
                            '<span class="badge bg-danger">Inactive</span>' !!}
                    </div>
                    <div class="card-body">
                        <label for="">Created at: {{ $model->created_at }}</label><br>
                        <label for="">Updated at: {{ $model->updated_at }}</label>
                    </div>
                </form>
           </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection