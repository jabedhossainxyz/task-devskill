<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h3 class="text-center mb-4">Login #05</h3>
    <div class="container form-container">
        <form action="{{ route('login') }}" method="POST" class="mt-3">
            @csrf
            <div class="image-container mb-3">
                <img src="{{ asset('images/image.png') }}" alt="Login Image">
            </div>
            <h5 class="form-heading">Sign in</h5>
            <div class="social-icons mb-3">
                <a href="#" class="btn btn-outline-primary btn-sm">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="btn btn-outline-info btn-sm">
                    <i class="bi bi-twitter"></i>
                </a>
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>

            <div class="btn-submit">
                <button type="submit" class="btn" style="color: white;">Sign In</button>
            </div>

            <div class="text-center mt-3">
                <a href="#" class="text-decoration-none">Forgot password?</a><br>
                <span>Not a member? <a href="#" class="text-decoration-none">Sign up</a></span>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
