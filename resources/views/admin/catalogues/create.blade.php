@extends('admin.layouts.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
      <h2 class="text-center">Create Catalogues</h2>
        <div class="row d-flex justify-content-center">
           <div class="col-8">
                <form action="{{ route('admin.catalogues.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control"  name="name" id="name" placeholder="name...">
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
                                    </div>
                                        <!-- end card body -->
                                </div>
                                    <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" value="" id="is_active" value="1">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Is Active
                        </label>
                      </div>
                    <button class="btn btn-primary">Create</button>
                </form>
           </div>
        </div>

    </div>
    <!-- container-fluid -->
</div>
@endsection