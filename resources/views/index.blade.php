
@extends('layouts.master')
@section('content')
<!--::Header part end::-->

<!--::banner part start::-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-5">
                <div class="banner_img d-none d-lg-block">
                    <img src="{{asset('/web')}}/img/banner_img.png" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>{{$slider->title}}</h1>
                        <p>{{$slider->description}}</p>
                        <a href="{{url('/contact')}}" class="btn_2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_7.png" alt="" class="feature_icon_1 custom-animation1">
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_8.png" alt="" class="feature_icon_2 custom-animation2">
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_3 custom-animation3">
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_2.png" alt="" class="feature_icon_4 custom-animation4">
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_3.png" alt="" class="feature_icon_5 custom-animation5">
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_6 custom-animation6">
</section>
<!--::banner part start::-->

<!--::use sasu part end::-->
<section class="use_sasu padding_top">
    <div class="container">
        <div class="row justify-content-center">
            @forelse($feature as $row)
            <div class="col-lg-4 col-sm-6">
                <div class="single_feature">
                    <div class="single_feature_part">
                        <img src="{{ Voyager::image( $row->image ) }}" alt="">
                        <h4>{{$row->title}}</h4>
                        <p>{{$row->description}}</p>
                    </div>
                </div>
            </div>
               @empty
                    @endforelse
        </div>
    </div>
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_1 custom-animation1">
</section>
<!--::use sasu part end::-->

<!--::about_us part start::-->
@forelse($about as $key=>$val)
    @if($key==0)
<section class="about_us section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <img src="{{ Voyager::image( $val->number_image ) }}" alt="">
                    <h2>{{$val->title}}</h2>
                    <p>{{$val->description}}</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="learning_img">
                    <img src="{{ Voyager::image( $val->image ) }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_1 custom-animation1">
</section>
    @else
<!--::about_us part end::-->

<!--::about_us part start::-->
<section class="about_us right_time">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="learning_img">
                    <img src="{{ Voyager::image( $val->image ) }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="about_us_text">
                    <img src="{{ Voyager::image( $val->number_image ) }}" alt="">
                    <h2>{{$val->title}}</h2>
                    <p>{{$val->description}}</p>
                </div>
            </div>
        </div>
    </div>
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2">
</section>
@endif
@empty

@endforelse
<!--::about_us part end::-->

<!--::pricing part start::-->

<!--::pricing part end::-->

<!--::about_us part start::-->
<section class="review_part padding_bottom">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="review_img">
                    <img src="{{asset('/web')}}/img/review_bg.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="review_slider owl-carousel">
                    @forelse($testimonial as $val)
                    <div class="review_part_text">
                        <h2>{{$val->title}}</h2>
                        <p>{{$val->description}}</p>
                        <h3>{{$val->name}} <span>{{$val->job}}</span> </h3>
                    </div>
                    @empty
                    @endforelse

                </div>

            </div>
        </div>
    </div>
    <img src="{{asset('/web')}}/img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_2 custom-animation2">
</section>
<!--::about_us part end::-->

<!--::subscribe us part end::-->

<!--::subscribe us part end::-->

<!--::client logo part end::-->
<section class="client_logo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                    @forelse($organization as $item)
                        <div class="single_client_logo">
                            <img src="{{ Voyager::image( $item->image ) }}" alt="{{$item->name}}">
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!--::client logo part end::-->
@stop
