@extends('layouts.app')

@section('content')
    <!-- Start Slider -->
    {{-- Input dari Admin --}}
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="{{ asset('theme') }}/images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Tali Tani</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('theme') }}/images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Tali Tani</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="{{ asset('theme') }}/images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Tali Tani</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach ($category as $item)
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-cat-box">
                            <img class="img-fluid" src="{{ $item->image }}" alt="{{ $item->title }}" />
                            <a class="btn hvr-hover" href="#">{{ $item->title }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!-- Start Products  -->
    {{-- Input dari Admin --}}
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Keperluan Pertanian</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                @foreach ($product as $item)
                    <div class="col-lg-3 col-md-6 special-grid {{ $item->is_best_seller == 1 ? 'best-seller' : '' }}">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="new">{{ $item->category->title }}</p>
                                </div>
                                <img src="{{ $item->image }}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="right" title="View"><i
                                                    class="fas fa-eye"></i></a>
                                        </li>
                                        {{-- <li>
                                            <a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Compare"><i class="fas fa-sync-alt"></i></a>
                                        </li> --}}
                                        <li>
                                            <a href="#" data-toggle="tooltip" data-placement="right"
                                                title="Add to Wishlist"><i class="far fa-heart"></i></a>
                                        </li>
                                    </ul>
                                    <a class="cart" href="#">Pesan Sekarang</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>{{ $item->title }}</h4>
                                <h5>Rp @money($item->price)</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Products  -->
@endsection
