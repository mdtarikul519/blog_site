@extends('admin.index')
@section('content')
  
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div>
                    <div class="card-header py-3 position-sticky d-flex justify-content-between align-items-center">
                        <h6>User Create</h6>
                        <a href="" class="router-link-active btn btn-info btn-sm">Back</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="form-group col-md-6">
                        <label for=""> Title </label>
                        <div class="mt-1 mb-3"><input type="text" name="title" class="form-control mb-1" /></div>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> Short Description </label>
                        <div class="mt-1 mb-3"><input type="text" name="short_description" class="form-control mb-1" /></div>
                        @error('short_description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for=""> Description </label>
                        <div class="mt-1 mb-3"><input type="text" name="description" class="form-control mb-1" /></div>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> Image </label>
                        <div class="mt-1 mb-3"><input type="file" name="image" class="form-control mb-1" /></div>
                        @error('image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <select class="form-select form-select-lg mb-3" name="published" aria-label=".form-select-lg example">
                            <option value="1">Publiesd</option>
                            <option value="0">UnPubliesd</option>
                        </select>
                        @error('published')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                  <div class="form-group col-md-6">
                        <label for=""> slug </label>
                        <div class="mt-1 mb-3"><input type="text" name="slug" class="form-control mb-1" /></div>
                        @error('slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> 

                    
                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start">
                    <button type="submit" class="btn btn-info btn-sm">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
