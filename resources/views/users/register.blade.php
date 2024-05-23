@extends('layout.layout')

@section('content')
    <div class="register">
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Sign Up - Step 1</h3>
                            <form action="signup_step2.html" method="get">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username"
                                        placeholder="Enter your username" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Enter your password" required>
                                </div>
                                <button type="submit" class="btn mt-3 btn-primary btn-block">Next</button>
                            </form>
                        </div>
                        <hr>
                        <div class="text-center pb-3">
                            <button class="btn btn-danger btn-block">
                                <i class="fab fa-google mr-2"></i>Login with Google
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center">Sign Up - Step 2</h3>
                            <form>
                                <div class="form-group">
                                    <label for="profileImage">Profile Image</label>
                                    <input type="file" class="form-control-file" id="profileImage" required>
                                </div>
                                <div class="form-group">
                                    <label for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName"
                                        placeholder="Enter your full name" required>
                                </div>
                                <div class="form-group">
                                    <label for="jobTitle">Job Title</label>
                                    <input type="text" class="form-control" id="jobTitle"
                                        placeholder="Enter your job title" required>
                                </div>
                                <div class="form-group">
                                    <label for="skills">Skills</label>
                                    <select multiple class="form-control" id="skills" required>
                                        <option>Tech Writing</option>
                                        <option>SEO Optimization</option>
                                        <option>Content Strategy</option>
                                        <option>Web Development</option>
                                        <option>Graphic Design</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="interests">Interests</label>
                                    <select multiple class="form-control" id="interests" required>
                                        <option>Artificial Intelligence</option>
                                        <option>Healthy Living</option>
                                        <option>Traveling</option>
                                        <option>Photography</option>
                                        <option>Reading</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" placeholder="Tell us a bit about yourself" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

<style>
    body {
        background-color: #f8f9fa;
    }

    .card {
        margin-top: 50px;
        border: none;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
