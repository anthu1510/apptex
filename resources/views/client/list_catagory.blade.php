@extends('client.layouts.layout')
@section('contents')
    <div class="row">
        @foreach($catagory as $cat)
            <div class="col-lg-3">
                {{--<section class="w3l-career1 py-5 mt-5">--}}
                        <a href="{{URL::to("listbuyer/".$country_id."/".$cat->catid ) }}">
                        {{$cat->catagory}}[{{$cat->count}}]
                        </a>
                {{--</section>--}}
            </div>
        @endforeach
    </div>
@endsection
