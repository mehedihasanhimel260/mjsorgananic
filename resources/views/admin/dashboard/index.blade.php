@extends('admin.layouts.app')
@section('content')
    <!-- Stats -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="card p-3 card-stats">
                <div class="h6">Orders</div>
                <div class="fs-4 fw-bold">128</div>
                <small class="text-muted">Total orders</small>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card p-3 card-stats" style="border-left-color:#20c997">
                <div class="h6">Revenue</div>
                <div class="fs-4 fw-bold">৳12,500</div>
                <small class="text-muted">This month</small>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card p-3 card-stats" style="border-left-color:#ffc107">
                <div class="h6">Products</div>
                <div class="fs-4 fw-bold">52</div>
                <small class="text-muted">Active products</small>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card p-3 card-stats" style="border-left-color:#dc3545">
                <div class="h6">Customers</div>
                <div class="fs-4 fw-bold">37</div>
                <small class="text-muted">Total customers</small>
            </div>
        </div>
    </div>

    <!-- Products -->
    <section class="mb-4">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5>Products</h5>
            <button class="btn btn-sm btn-primary" onclick="window.location='{{ route('admin.products.create') }}'">Add Product</button>
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

    <!-- Orders -->
    <section>
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h5>Recent Orders</h5>
            <button class="btn btn-sm btn-outline-primary">View All</button>
        </div>
        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-wrap">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Order #</th>
                                <th>Customer</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1001</td>
                                <td>Rahim</td>
                                <td>৳499</td>
                                <td>Processing</td>
                                <td><button class="btn btn-sm btn-outline-success">View</button></td>
                            </tr>
                            <tr>
                                <td>1002</td>
                                <td>Karim</td>
                                <td>৳1299</td>
                                <td>Completed</td>
                                <td><button class="btn btn-sm btn-outline-success">View</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
