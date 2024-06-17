@extends('admin.layouts.master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
      <h2 class="text-center mb-3">Danh sách Catalogues</h2>
      <div class="row mb-4">
        <a href="{{ route('admin.catalogues.create') }}" class="btn btn-primary col-1">Creat</a>
      </div>
        <div class="row mb-4">
          <div class="table-responsive table-card">
            <table class="table table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cardtableCheck">
                                <label class="form-check-label" for="cardtableCheck"></label>
                            </div>
                        </th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Img</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Is Active</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cardtableCheck01">
                                <label class="form-check-label" for="cardtableCheck01"></label>
                            </div>
                        </td>
                        <td><a href="#" class="fw-semibold">{{ $item->id }}</a></td>
                        <td>{{ $item->name }}</td>
                        <td><img src="{{ \Storage::url($item->cover )}}" width="30px" alt=""></td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at??=0 }}</td>
                        <td>
                            {!! $item->is_active ? 
                            '<span class="badge bg-success">Active</span>':
                            '<span class="badge bg-danger">Inactive</span>' !!}</td>
                        <td class="">
                            <a href="{{ route('admin.catalogues.show',$item->id) }}" class="btn btn-sm btn-outline-dark col">Details</a>
                            <a href="{{ route('admin.catalogues.edit',$item->id) }}" class="btn btn-sm btn-info col">Edit</a>
                            <div class="col">
                              <form action="{{ route('admin.catalogues.destroy', $item->id) }}">
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger ">Delete</button>
                              </form></div>                          
                        </td>
                    </tr>
                      
                    @endforeach

                </tbody>
            </table>
          </div>
        </div>

        {{ $data->links() }}
    </div>
    <!-- container-fluid -->
</div>

<!-- end row -->
@endsection