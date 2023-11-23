@extends('admin.index')
@section('content')
  
    <div class="container-fluid" style="margin-top: 100px;">
        <form action="{{route('admin.user.store')}}" method="POST" enctype="multipart/form-data">
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
                        <label for=""> User Roll </label>
                        <select class="form-select">
                             @foreach ($user_roles as $role)
                                <option value="{{$role->id}}">{{$role->title}}</option>
                            @endforeach 
                        </select>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group col-md-6">
                        <label for=""> Name </label>
                        <div class="mt-1 mb-3"><input type="text" name="name" class="form-control mb-1" /></div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> Email </label>
                        <div class="mt-1 mb-3"><input type="text" name="email" class="form-control mb-1" /></div>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for=""> Phon Number </label>
                        <div class="mt-1 mb-3"><input type="text" name="phone_number" class="form-control mb-1" /></div>
                        @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for=""> Password </label>
                        <div class="mt-1 mb-3"><input type="text" name="password" class="form-control mb-1" /></div>
                        @error('password')
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
                </div>

                <div class="card-header py-2 position-sticky d-flex justify-content-start">
                    <button type="submit" class="btn btn-info btn-sm">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
