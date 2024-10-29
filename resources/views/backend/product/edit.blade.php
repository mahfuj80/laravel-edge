@extends('backend.layouts.master')

@section('content')

<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Product Create</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Product Create
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            
            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Add Product</div>
                </div> <!--end::Header--> <!--begin::Form-->
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data"> <!--begin::Body-->
                    @csrf @method('PUT')
                    <div class="card-body">
                        <div class="mb-3"> 
                            <label for="name" class="form-label">Product Name</label> 
                            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}">
                        </div>

                        <div class="mb-3"> 
                            <label for="price" class="form-label">Product Price</label> 
                            <input type="text" class="form-control" name="price" id="price" value="{{ $product->price }}">
                        </div>

                        <div class="mb-3"> 
                            <label for="description" class="form-label">Description</label> 
                            <textarea class="form-control" name="description" id="description">{{ $product->description }}</textarea>
                    </div> <!--end::Body--> <!--begin::Footer-->

                    <div class="mb-3"> 
                        <label for="image" class="form-label">Product Image</label> 
                        <input type="file" class="form-control" name="image" id="image" aria-describedby="emailHelp">
                    </div>

                    <div class="card-footer"> 
                        <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                </form> <!--end::Form-->
            </div>

        </div> <!--end::Container-->
    </div> <!--end::App Content-->
</main> <!--end::App Main--> <!--begin::Footer-->
@endsection