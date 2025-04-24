<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="d-flex h-100 align-items-center">
    <div class="container card p-5">
        <h1>Login</h1>
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required class="form-control mb-2"><br>
            <input type="password" name="password" placeholder="Password" required class="form-control mb-2"><br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>
