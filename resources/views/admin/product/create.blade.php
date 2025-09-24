@extends('admin.layouts.app')
@section('content')

      <!-- Product Form -->
      <div class="card shadow-sm">
        <div class="card-header">
          <h5 class="mb-0">New Product</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter product name">
            </div>
            <div class="mb-3">
              <label for="desc" class="form-label">Description</label>
              <textarea class="form-control" id="desc" rows="3" placeholder="Enter product description"></textarea>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="price" class="form-label">Price (৳)</label>
                <input type="number" class="form-control" id="price" placeholder="0">
              </div>
              <div class="col-md-6 mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" placeholder="0">
              </div>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select id="category" class="form-select">
                <option selected disabled>-- Select Category --</option>
                <option value="1">Clothing</option>
                <option value="2">Shoes</option>
                <option value="3">Accessories</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Product Image</label>
              <input type="file" class="form-control" id="image">
            </div>
            <button type="submit" class="btn btn-primary">Save Product</button>
            <a href="dashboard.html" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>

@endsection
