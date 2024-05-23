@extends('layout.layout')

@section('content')
    <div class="login">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Login</h3>
                            <form>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="Enter your username">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter your password">
                                </div>
                                <div class="form-group form-check mt-3">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember Me</label>
                                </div>
                                <button type="submit" class="btn mt-3 btn-primary btn-block">Login</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="#">Forgot your password?</a>
                            </div>
                            <div class="text-center mt-3">
                                <a href="#">Don't have an account? Sign up</a>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button class="btn btn-danger btn-block">
                                    <i class="fab fa-google mr-2"></i>Login with Google
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
