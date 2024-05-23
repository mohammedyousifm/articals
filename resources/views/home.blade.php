@extends('layout.layout')

@section('content')
    <div class="home">
        <div class="container">
            <h3 class="my-2 mb-4">The moust sarch Articles</h3>
            <div class="articles">


                <div class="row gx-5">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">PHP</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                                <p class="card-text">PHP is a popular general-purpose scripting language that is especially
                                    suited to web development.</p>
                                <a href="{{ route('single.articles') }}" class="card-link">Learn more</a>
                                <a href="#" class="card-link">Documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">HTML</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Markup Language</h6>
                                <p class="card-text">HTML is the standard markup language for creating Web pages.</p>
                                <a href="#" class="card-link">Learn more</a>
                                <a href="#" class="card-link">Documentation</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">CSS</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Style Sheets</h6>
                                <p class="card-text">CSS is a language that describes the style of an HTML document.</p>
                                <a href="#" class="card-link">Learn more</a>
                                <a href="#" class="card-link">Documentation</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
