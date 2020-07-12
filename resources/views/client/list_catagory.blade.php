@extends('client.layouts.layout')
@section('contents')
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
@endsection

{{--

<a href="{{URL::to("listbuyer/".$country_id."/".$cat->catid ) }}">
    {{$cat->catagory}}[{{$cat->count}}]
</a>
--}}

