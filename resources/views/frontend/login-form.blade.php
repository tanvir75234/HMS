<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('contents') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('contents') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('contents') }}/css/style.css">
</head>

<body class="bg-secondary mt-5">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Sign In</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mt-2 form-group">
                                <label class="mb-2" for="username">Email:</label>
                                <input  type="email" class="form-control" id="username" placeholder="Enter your username">
                            </div>
                            <div class="mb-2 mt-3 form-group">
                                <label class="mb-2" for="password">Password:</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                            </div>
                            <div class="text-center submit">
                                <button type="submit" class="btn btn-sm btn-primary mb-2">Login</button>
                                <p><a href="" class="mt-3">Forgotten Password</a></p>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-sm btn-success mt-4">Create New Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="{{ asset('contents') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('contents') }}/js/custom.js"></script>
</body>

</html>
