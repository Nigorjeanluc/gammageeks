@extends('layouts.main')

@section('title', 'Home')

@section('main')
    <main role="main">
        <!-- Main Carousel -->
        <section class="section background-dark">
            <div class="line">
                <div class="carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-wide-arrows">
                    <div class="item">
                        <div class="s-12 center">
                            <img src="img/01-boxed.jpg" alt="">
                            <div class="carousel-content">
                                <div class="padding-2x">
                                    <div class="s-12 m-12 l-8">
                                        <p style="text-shadow: 1px 1px 5px black" class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">
                                            We create [desirable skill-specific term] for small and big businesses.</p>
                                        <p style="background: rgba(0,0,0,0.5); padding: 10px" class="text-white text-size-16 margin-bottom-40">
                                            "Gamma geeks is Tech savvy community that brings Programmers, Web developers, Computer Systems Analyst,
                                            <br />IT Security and Network Engineers and other people willing to spare their time finding solutions through technology under the same platform to share knowledge and experience to deliver an accurate and
                                            promising products".
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="s-12 center">
                            <img src="img/02-boxed.jpg" alt="">
                            <div class="carousel-content">
                                <div class="padding-2x">
                                    <div class="s-12 m-12 l-8">
                                        <p style="text-shadow: 1px 1px 5px black" class="text-white text-s-size-20 text-m-size-40 text-l-size-60 margin-bottom-40 text-thin text-line-height-1">
                                            “It’s not about the service we’re selling—it’s about the results.”</p>
                                        <p style="background: rgba(0,0,0,0.7); padding: 10px" class="text-white text-size-16 margin-bottom-30">We create tight web apps for amazing software companies that want to deliver the best product to their customers and improve retention.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section style="background-color: #ffb303" class="section background-primary text-center">
            <div class="line">
                <div class="s-12 m-10 l-8 center">
                    <h2 class="headline text-thin text-s-size-30">We are Web Design Heroes</h2>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section class="section background-white">
            <div class="full-width text-center">
                <img class="center margin-bottom-30" style="margin-top: -210px;" src="img/inana.png" alt="">
                <div class="line">
                    <h2 class="headline text-thin text-s-size-30">Fully <span class="text-primary">Responsive</span> Websites
                    </h2>
                    <i class="icon-more_node_links icon2x text-primary margin-top-bottom-10"></i>
                    <p class="text-size-20 text-s-size-16 text-thin text-primary">Try resize your browser window</p>
                </div>
            </div>
        </section>
        <hr class="break margin-top-bottom-0">

        <!-- Section 4 -->
        {{--  <section class="section background-white">
            <div class="line">
                <h2 class="text-thin headline text-center text-s-size-30 margin-bottom-50">From Our <span class="text-primary">Blog</span></h2>
                <div class="carousel-default owl-carousel carousel-wide-arrows">
                    <div class="item">
                        <div class="margin">
                            <div class="s-12 m-12 l-6">
                                <div class="image-border-radius margin-m-bottom">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-4 margin-m-bottom">
                                            <a class="image-hover-zoom" href="/"><img src="img/blog-05.jpg" alt=""></a>
                                        </div>
                                        <div class="s-12 m-12 l-8 margin-m-bottom">
                                            <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit
                                                    Amet</a></h3>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            <a class="text-more-info text-primary-hover" href="/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-12 m-12 l-6">
                                <div class="image-border-radius">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-4 margin-m-bottom">
                                            <a class="image-hover-zoom" href="/"><img src="img/blog-03.jpg" alt=""></a>
                                        </div>
                                        <div class="s-12 m-12 l-8">
                                            <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit
                                                    Amet</a></h3>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            <a class="text-more-info text-primary-hover" href="/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="margin">
                            <div class="s-12 m-12 l-6">
                                <div class="image-border-radius margin-m-bottom">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-4 margin-m-bottom">
                                            <a class="image-hover-zoom" href="/"><img src="img/blog-04.jpg" alt=""></a>
                                        </div>
                                        <div class="s-12 m-12 l-8 margin-m-bottom">
                                            <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit
                                                    Amet</a></h3>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            <a class="text-more-info text-primary-hover" href="/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-12 m-12 l-6">
                                <div class="image-border-radius">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-4 margin-m-bottom">
                                            <a class="image-hover-zoom" href="/"><img src="img/blog-02.jpg" alt=""></a>
                                        </div>
                                        <div class="s-12 m-12 l-8">
                                            <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit
                                                    Amet</a></h3>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            <a class="text-more-info text-primary-hover" href="/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="margin">
                            <div class="s-12 m-12 l-6">
                                <div class="image-border-radius margin-m-bottom">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-4 margin-m-bottom">
                                            <a class="image-hover-zoom" href="/"><img src="img/blog-01.jpg" alt=""></a>
                                        </div>
                                        <div class="s-12 m-12 l-8 margin-m-bottom">
                                            <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit
                                                    Amet</a></h3>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            <a class="text-more-info text-primary-hover" href="/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="s-12 m-12 l-6">
                                <div class="image-border-radius">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-4 margin-m-bottom">
                                            <a class="image-hover-zoom" href="/"><img src="img/blog-06.jpg" alt=""></a>
                                        </div>
                                        <div class="s-12 m-12 l-8">
                                            <h3><a class="text-dark text-primary-hover" href="/">Lorem Ipsum Dolor sit
                                                    Amet</a></h3>
                                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
                                            <a class="text-more-info text-primary-hover" href="/">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>  --}}

    </main>
@endsection
