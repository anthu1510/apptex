@extends('client.layouts.layout')

@section('contents')




    {{--<section class="w3l-career1 py-5 mt-5">
        <div class="growth-align py-md-5 py-0 mt-5">
            <div class="container py-md-5 py-0">
                <div class="row growth-info justify-content-center align-items-center text-center py-md-5 w-100 mx-auto">
                    <div class="col-lg-8 py-lg-3">
                        <h3>Starting from your Dream Jobs, Your Dream Jobs Are Waiting</h3>
                        <p class="my-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolor atque consequuntur unde,
                            necessitatibus
                            quaerat fuga explicabo, quis placeat iure perferendis alias libero velit officiis.</p>
                        <a href="#positions" class="btn btn-primary btn-theme">See All POsitions</a>
                    </div>
                    <div class="position-absolute img-circle emp-pos1 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp1.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos2 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp2.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos3 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp3.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos4 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp34.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos5 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp5.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos6 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp6.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos7 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp7.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                    <div class="position-absolute img-circle emp-pos8 d-md-block d-none">
                        <img src="{{asset('assets/client/images/emp8.jpg')}}" class=" rounded" alt="Employee Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>--}}





        <div class="row">
            @foreach($country as $cnt)
            <div class="col-lg-3">
                <section class="w3l-career1 py-5 mt-5">
                <div class=" img-circle  d-md-block d-none">
                    <a href="{{URL::to("catagory/".$cnt->id)}}">
                    <img src="{{asset('assets/client/images/'.$cnt->icon_image )}}" class=" rounded" alt="{{$cnt->country_name}}" />
                    </a>
                </div>
                </section>
            </div>

            @endforeach
            {{--<div class="col-lg-3">
                <section class="w3l-career1 py-5 mt-5">
                    <div class=" img-circle  d-md-block d-none">
                        <img src="{{asset('assets/client/images/uk.jpg')}}" class=" rounded" alt="UK" />
                    </div>
                </section>
            </div>
            <div class="col-lg-3">
                <section class="w3l-career1 py-5 mt-5">
                    <div class=" img-circle  d-md-block d-none">
                        <img src="{{asset('assets/client/images/sweden.png')}}" class=" rounded" alt="Sweden" />
                    </div>
                </section>
            </div>
            <div class="col-lg-3">
                <section class="w3l-career1 py-5 mt-5">
                    <div class=" img-circle  d-md-block d-none">
                        <img src="{{asset('assets/client/images/france.jpg')}}" class=" rounded" alt="France" />
                    </div>
                </section>
            </div>--}}
        </div>






@endsection
