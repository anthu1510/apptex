@extends('client.layouts.layout')
@section('title')
    <title> Apparel Importers Data Buyers</title>
@endsection
@section('contents')
    <div class="row">
        <section class=" py-5 mt-5">
        </section>
        <div class="col-lg-12 pt-5 mt-5">
    <div class="row">
        @foreach($catagory as $cat)
            <div class="col-lg-2">
                <section class="w3l-career1 py-3 mt-3">
                    <center>  {{$cat->catagory}}[{{$cat->count}}]
                        <div class=" img-circle  d-md-block d-none">
                            <a href="{{URL::to("listbuyer/".$country_id."/".$cat->catid ) }}">
                                <img src="{{asset('assets/client/images/category/'.$cat->catid.".jpg" )}}" class=" rounded" alt="{{$cat->catagory}}" />

                            </a>
                        </div>
                    </center>
                </section>

            </div>
        @endforeach
    </div>

        </div>
    </div>
@endsection

@section('footer-content')
<p align="left" style="line-height: 1.8; margin-top: 2; margin-bottom: 2" dir="ltr">
<font face="Arial" color="#00005B" size="4">Get Instant Enquiries from Buyers</font><font face="Arial" size="5" color="#00005B"><br>
</font><span style="letter-spacing: normal; background-color: #FFFFFF">
<font face="Nunito, sans-serif" style="font-size: 11pt" color="#333333">By 
Sending Brief Business Profiles with High Quality Product Photos will gives high 
impact on you.</font></span></p>
<p align="left" style="line-height: 1.8; margin-top: 2; margin-bottom: 2">&nbsp;</p>
@endsection





{{--

<a href="{{URL::to("listbuyer/".$country_id."/".$cat->catid ) }}">
    {{$cat->catagory}}[{{$cat->count}}]
</a>
--}}

