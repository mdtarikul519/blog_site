

@extends('admin.layout.index')
@section('content')

<div layout_title="Product Management">
    <h3 class="mb-2">Product Management</h3>
    <div class="container">
        <div class="card list_card">
            <div class="card-header">
                <h4>Create</h4>
                <div class="btns">
                    <a href="https://dibyo-bd.com/admin#/product/"
                        class="btn rounded-pill btn-outline-warning router-link-active">
                        <i class="fa fa-arrow-left me-5px"></i>
                        Back
                    </a>
                </div>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="admin_form form_1 d-grid">
                                <div class="form-group full_width d-grid align-content-start gap-1 mb-2">
                                    <div class="field_wrapper">
                                        <label  class="text-capitalize d-block">
                                            <span class="mb-2 d-block">
                                                Product Name </span>
                                            <input type="text"  name="product_name"
                                                class="form-control" />
                                            <!---->
                                        </label>
                                        <!---->
                                    </div>
                                </div>
                                
                        </div>
                    </div>
                </div>
          
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-outline-info">
                        <i class="fa fa-upload"></i>
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection