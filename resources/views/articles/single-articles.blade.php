@extends('layout.layout')

@section('content')
    <div class="single-article">
        <div class="container">
            <div class="article">
                <div>
                    <div class="head my-3">
                        <img src="data:image/jpeg;base64,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"
                            alt="Article About HTML" width="100%" height="300px">
                    </div>
                    <div class="title text-center">
                        <h1>
                            Article About HTML
                        </h1>
                    </div>
                    <div class="posted-by">
                        <div class="posted-by-img m-2">
                            <img src="https://media.licdn.com/dms/image/D5603AQE5Q9ClaooTLg/profile-displayphoto-shrink_100_100/0/1695215072274?e=1721865600&v=beta&t=LlTKZIzj54bqClEr7-k0HTlh8MaPGTsxEyMNXiPCz9g"
                                alt="" width="80px" height="80px">
                        </div>
                        <div class="posted-by-title m-2">
                            <h4>Mohammed Yousif</h4>
                            <h4><span class="articles-count">29 articles </span> <span class="follow  p-1"><i
                                        class="fa-solid fa-plus"></i> follow</span></h4>
                            <p>Innovative design Thinker | Innovative creative thinker | Good communicator</p>
                        </div>
                    </div>
                    <p class="date">
                        June 27, 2023
                    </p>

                    <div class="article-start">
                        <h4>Title: HTML: The Foundation of Web Development</h4>
                        <br>

                        <p class="article-content">
                            <strong> Introduction:</strong>
                            <br>
                            <br>
                            <br>
                            HTML (Hypertext Markup Language) is a fundamental building block of the modern web. Developed by
                            Tim Berners-Lee in the early 1990s, HTML serves as the backbone for creating and structuring web
                            pages. It is a markup language that uses tags to define the structure and content of a document,
                            making it accessible across different platforms and devices. In this article, we will explore
                            the importance of HTML in web development and its key features.
                            <br>
                            <br>
                            <br>

                            <strong>1. Structure and Semantic Elements:</strong>
                            <br>
                            <br>
                            <br>
                            HTML provides a standardized structure for web content. It uses a variety of semantic elements
                            to define the purpose and meaning of different parts of a web page. Semantic elements such as `
                            {{-- <header>`, `<nav>`, `<section>`, `<article>`, `<aside>`, and `<footer>` help developers create --}}
                            well-organized and meaningful content, improving accessibility and search
                            engine optimization (SEO). By using these elements appropriately, developers
                            can enhance the user experience and make their web pages more readable and
                            navigable.
                        </p>

                        <div class="action-buttons">
                            <button type="button" aria-label="Like">
                                <i class="fas fa-thumbs-up"></i> Like
                            </button>
                            <button type="button" aria-label="Comment" id="comment-btn">
                                <i class="fas fa-comment"></i> Comment
                            </button>
                            <button type="button" aria-label="Share">
                                <i class="fas fa-share"></i> Share
                            </button>
                        </div>

                        <div class="comment-section">
                            <div class="user-comment">
                                <img src="https://media.licdn.com/dms/image/D5603AQE5Q9ClaooTLg/profile-displayphoto-shrink_100_100/0/1695215072274?e=1721865600&v=beta&t=LlTKZIzj54bqClEr7-k0HTlh8MaPGTsxEyMNXiPCz9g"
                                    alt="User Avatar" class="user-avatar">
                                <input type="text" placeholder="Add a comment" id="comment-input">
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
