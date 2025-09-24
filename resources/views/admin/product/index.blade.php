@extends('admin.layouts.app')
@section('content')
    <!-- Products -->
    <section class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5>Products</h5>
            <button class="btn btn-sm btn-primary">Add Product</button>
        </div>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-wrap">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>T-shirt</td>
                                <td>৳199</td>
                                <td>24</td>
                                <td><button class="btn btn-sm btn-outline-secondary">Edit</button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sneakers</td>
                                <td>৳349</td>
                                <td>8</td>
                                <td><button class="btn btn-sm btn-outline-secondary">Edit</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cap</td>
                                <td>৳79</td>
                                <td>40</td>
                                <td><button class="btn btn-sm btn-outline-secondary">Edit</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
