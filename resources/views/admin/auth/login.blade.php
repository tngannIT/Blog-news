<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://freshcart.codescandy.com/assets/css/theme.min.css">
    <title>Đăng nhập admin</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 0.5rem;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card-header {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem;
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-body {
            padding: 2rem;
        }

        .form-control {
            border-radius: 0.25rem;
            border: 1px solid #ced4da;
            padding: 0.5rem 0.75rem;
            font-size: 1rem;
        }

        .btn-red {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 0.25rem;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
        }

        .btn-red:hover {
            background-color: #c82333;
        }

        .alert {
            margin-bottom: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('admin.login.doLogin') }}" method="POST">
                    @csrf
                    <h2 class="text-center">Đăng nhập ADMIN</h2>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input value="{{ old('email') }}" name="email" type="text" id="email"
                            class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input name="password" type="password" id="password" class="form-control">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-red">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
