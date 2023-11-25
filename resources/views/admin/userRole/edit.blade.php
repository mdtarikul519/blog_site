@extends('admin.index')
@section('content')
  
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{route('admin.user_role.update',$editdata->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div>
                    <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                        <h6>User Role Create</h6>
                        <a href="" class="router-link-active btn btn-info btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group col-md-6">
                        <label for=""> Title </label>
                        <div class="mt-1 mb-3"><input type="text" value="{{$editdata->title}}" name="title" class="form-control mb-1" /></div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> Serial </label>
                        <div class="mt-1 mb-3"><input type="number" value="{{$editdata->serial}}" name="serial" class="form-control mb-1" /></div>
                        @error('serial')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start">
                    <button type="submit" class="btn btn-info btn-sm">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
