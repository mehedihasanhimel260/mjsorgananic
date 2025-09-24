<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            @include("admin.partials.sidebar")
            <!-- Main -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-3">
                <!-- Navbar -->
                <nav class="navbar navbar-light bg-white shadow-sm rounded mb-4">
                    <div class="container-fluid">
                        <!-- Sidebar toggle for mobile -->
                        <button class="btn btn-outline-primary d-md-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#sidebarMenu">
                            ☰
                        </button>
                        <span class="navbar-brand ms-2">Dashboard</span>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary btn-sm">Logout</button>
                        </form>

                    </div>
                </nav>

                @yield('content')


            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
