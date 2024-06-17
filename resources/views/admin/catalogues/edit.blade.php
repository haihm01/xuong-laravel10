@extends('admin.layouts.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
      <h2 class="text-center">Create Catalogues</h2>
        <div class="row d-flex justify-content-center">
           <div class="col-8">
                <div class="row mb-4">
                <a href="{{ route('admin.catalogues.index') }}" class="btn btn-primary col-1">Back</a>
                </div>
                <form action="{{ route('admin.catalogues.update', $model->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
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
                                            <p class="text-muted"></p>
                                            <input type="file" class="filepond filepond-input-multiple" multiple name="cover" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                                            <img width="150px" src="{{ \Storage::url($model->cover) }}" alt="">
                                    </div>
                                        <!-- end card body -->
                                </div>
                                    <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                    </div>
                    <div class="form-check mb-3">

                        <input class="form-check-input"@if ($model->is_active === true)
                        checked @endif name="is_active" type="checkbox" id="is_active" value="1" >
                        
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Is Active
                        </label>
                      </div>
                    <button class="btn btn-primary">Update</button>
                </form>
           </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection