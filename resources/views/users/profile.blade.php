@extends('layout.layout')

@section('content')
    <div class="profile">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img height="200px"
                            src="https://media.licdn.com/dms/image/D5603AQE5Q9ClaooTLg/profile-displayphoto-shrink_100_100/0/1695215072274?e=1721865600&v=beta&t=LlTKZIzj54bqClEr7-k0HTlh8MaPGTsxEyMNXiPCz9g"
                            class="card-img-top" alt="Profile Picture">
                        <div class="card-body text-center">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">Seasoned article writer with over 10 years of experience in tech and
                                lifestyle
                                topics.</p>
                            <div class="followers-info">
                                <p><strong>Followers:</strong> <span id="follower-count">1,234</span></p>
                                <button class="btn btn-outline-success btn-sm" id="follow-button">Follow</button>
                            </div>
                            <div class="social-links">
                                <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-linkedin"></i></a>
                                <a href="#" class="btn btn-outline-primary btn-sm"><i class="fab fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Skills</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle text-success"></i> Tech Writing</li>
                                <li><i class="fas fa-check-circle text-success"></i> SEO Optimization</li>
                                <li><i class="fas fa-check-circle text-success"></i> Content Strategy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title">Interests</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-heart text-danger"></i> Artificial Intelligence</li>
                                <li><i class="fas fa-heart text-danger"></i> Healthy Living</li>
                                <li><i class="fas fa-heart text-danger"></i> Traveling</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h2>Articles</h2>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5>Understanding AI and Machine Learning</h5>
                            <p>Published on: January 10, 2024</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </li>
                        <li class="list-group-item">
                            <h5>Top 10 Tips for a Healthy Lifestyle</h5>
                            <p>Published on: February 5, 2024</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </li>
                        <li class="list-group-item">
                            <h5>The Future of Technology in Education</h5>
                            <p>Published on: March 20, 2024</p>
                            <a href="#" class="btn btn-primary btn-sm">Read More</a>
                        </li>
                    </ul>

                    <h2 class="mt-5">Testimonials</h2>
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-0">John's articles are always insightful and well-written. He has a unique
                                    way of
                                    making complex topics easy to understand.</p>
                                <footer class="blockquote-footer">Jane Smith, <cite title="Source Title">Tech
                                        Reviewer</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
