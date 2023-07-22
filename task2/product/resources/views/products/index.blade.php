@extends('layouts.app')
@section('content')


    <div class="container mt-5">
        <h1 class="mb-4">Product List</h1>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">

                        <div class="card-body">
                            <h5 class="card-title">{{ ucfirst($product->name) }}</h5>
                            <p class="card-text">{{ ucfirst($product->description) }}</p>
                        </div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product->variants as $variant)
                                    <tr>
                                        <td>{{ $variant->size }}</td>
                                        <td>{{ $variant->color }}</td>
                                        <td>{{ $variant->price }}</td>
                                        <td>{{ $variant->quantity }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach



        </div>
    </div>


@stop
