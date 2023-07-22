@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Create Product</h1>
        <div class="row">

            <form method="POST" action="/products/create" id="add_product" name="add_product">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Product Name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <h4>Add Variant:</h4>
            </div>
            <div id="variants-section">
                @if ($errors->has('variants.*'))
                    <h5>There is an error in Variant</h5>
                    <ul>

                        @foreach ($errors->get('variants.*') as $errors)
                            @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endforeach
                    </ul>
                @endif
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="Size">Size</label>
                        <input type="text" class="form-control" name="variants[0][size]" placeholder="Size">

                    </div>
                    <div class="form-group col-md-3">
                        <label for="Color">Color</label>
                        <input type="text" class="form-control" name="variants[0][color]" id="variants[0][color]"
                            placeholder="Color">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Color">Price</label>
                        <input type="number" class="form-control" name="variants[0][price]" id="variants[0][price]"
                            placeholder="Price">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="Quantity">Quantity</label>
                        <input type="number" class="form-control" name="variants[0][quantity]" id="variants[0][color]"
                            placeholder="Quantity">
                    </div>
                </div>
            </div>

            <div class="responce"></div>
            <div class="form-group col-md-12 p-3">

                <button type="button" id="add-variant" class="btn btn-warning">Add Variant</button>
            </div>



            <div class="form-group col-md-12 p-3">
                <button type="submit" class="btn btn-primary" id="add-product">Create Product</button>
            </div>
        </div>

        </form>

    </div>
@stop
