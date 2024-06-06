@extends('layouts.component.frontend.user')
@section('content')
<div id="content">

    <!-- /// CONTENT  /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="main-slider">

        <ul class="main-slider__slides"
            data-slick='{ "fade": true, "speed": 500, "autoplay": false, "infinite": true, "dots": true, "arrows": false }'>
            <li style="background-image:url({{ asset('images/foto/pexels-jess-vide-4612304.jpg ') }});">

                <div class="main-slider-slide__content
                                main-slider-slide__content--valign-middle
                                main-slider-slide__content--align-center">

                    <div class="main-slider-slide__content-wrap">

                        <h1 data-animation="fadeInDown" data-delay="0.5s">
                            SELAMAT DATANG DI WEBSITE SAYA
                        </h1>
                        <p data-animation="fadeInDown" data-delay="1s">
                            Website ini menyediakan rekomendasi tempat wisata di Indonesia<br class="hidden-xs">
                        </p>

                    </div><!-- end .main-slider-slide__content-wrap -->

                </div><!-- end .main-slider-slide__content -->

            </li>
            <li style="background-image:url({{ asset('images/foto/pexels-sebastian-165505.jpg') }});">

                <div class="main-slider-slide__content
                                main-slider-slide__content--valign-middle
                                main-slider-slide__content--align-center">

                    <div class="main-slider-slide__content-wrap">

                        <h1 data-animation="fadeInDown" data-delay="0.5s">
                            SELAMAT DATANG DI WEBSITE SAYA
                        </h1>
                        <p data-animation="fadeInDown" data-delay="1s">
                            Website ini menyediakan rekomendasi tempat wisata di Indonesia<br class="hidden-xs">
                        </p>

                    </div><!-- end .main-slider-slide__content-wrap -->

                </div><!-- end .main-slider-slide__content -->

            </li>
        </ul>

        <div class="main-slider__pager main-slider__pager--align-center"></div>
        <div class="main-slider__arrows"></div>

    </div><!-- end .main-slider -->
</div>
<div id="blog">

    <div class="row">
        <div class="span12 text-center">

            <div class="headline">

                <h2>Beberapa Wisata</h2>

            </div><!-- end .headline -->

        </div><!-- end .span12 -->
    </div><!-- end .row -->

    <div class="row">
        @foreach ($destinasi as $item)
        <div class="span4">
            <div class="blog-post">

                <div class="blog-post-thumb">

                    <img src="{{ asset('images/destinasi/'. $item->foto) }}" style="height: 200px" alt="">

                </div><!-- end .blog-post-thumb -->

                <div class="blog-post-title">

                    <i class="ifc-ball_point_pen"></i>

                    <h4>
                        <a href="/destinasi/{{ $item->id }}">{{ $item->nama_tempat }}</a>

                    </h4>

                    <p>{{ $item->kategori->nama_kategori }}</p>

                </div><!-- end .blog-post-title -->

                <p>{{ $item->deskripsi }}</p>


            </div><!-- end .blog-post -->

        </div><!-- end .span4 -->

        @endforeach
    </div><!-- end .row -->
</div><!-- end .span4 -->
@endsection
