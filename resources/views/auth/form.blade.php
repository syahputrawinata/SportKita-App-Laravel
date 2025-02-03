<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>SportKita - Elevate Your Style</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
        body {
            background-color: #f0f0f0;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 30px;
        }
        .btn-primary {
            border-radius: 30px;
            padding: 10px 20px;
        }
        .form-check-label a {
            color: #007bff;
            text-decoration: none;
        }
        .form-check-label a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card p-4" style="max-width: 900px; width: 100%;">
            <div class="row g-0">
                <!-- Left side: Form -->
                <div class="col-md-6">
                    <h3 class="text-center mb-4">Login/Register</h3>
                    <form action="{{route('loginAuth')}}" method="POST">
                    @csrf
                        @if(Session::get('failed'))
                                <div class="alert alert-danger">{{ Session::get('failed') }}</div>
                        @endif
                        @if(Session::get('logout'))
                                <div class="alert alert-danger">{{ Session::get('logout') }}</div>
                        @endif
                        @if(Session::get('failregis'))
                                <div class="alert alert-danger">{{ Session::get('failregis') }}</div>
                        @endif
                        @if(Session::get('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                        @if (Session::get('canAccess'))
                            <div class="alert alert-danger">{{ Session::get('canAccess') }}</div>
                        @endif
                        <div class="mb-3 input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                            <input type="text" name="username" class="form-control" required placeholder="Your Name"/>
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control" required placeholder="Your Email"/>
                        </div>
                        <div class="mb-5 input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control" required placeholder="Password"/>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                        <div class="d-grid">
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>

                <!-- Right side: Illustration -->
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <img src="https://storage.googleapis.com/a1aa/image/8f4vJzEhVZXUOKnivGzmgPbZap3VoRILrEPZu8HR0fNsm7GUA.jpg" 
                         alt="Illustration of a person playing sports with abstract shapes" 
                         class="img-fluid" width="400" height="400"/>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
