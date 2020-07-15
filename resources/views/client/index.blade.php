@extends('client.layouts.layout')

@section('title')
    <title> Apparel Importers Data Country List</title>
@endsection

@section('contents')




    {{--<section class="w3l-career1 py-5 mt-5">
        <div class="growth-align py-md-5 py-0 mt-5">
            <div class="container py-md-5 py-0">
                <div class="row growth-info justify-content-center align-items-center text-center py-md-5 w-100 mx-auto">
                    <div class="col-lg-8 py-lg-3">
                        <h3>Apparel Buyers Datas</h3>
                        <p class="my-4">Global Apparel Garment Buyers Contacts at ApparelImportersData.com</p>
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
        <section class=" py-5 mt-5">
        </section>
        <div class="col-lg-12 pt-5 mt-5">




        <div class="row">
            @foreach($country as $cnt)
            <div class="col-lg-2">
                <section class="w3l-career1 py-3 mt-3">
                   <center>  {{$cnt->country_name}}
                <div class=" img-circle  d-md-block d-none">
                    <a href="{{URL::to("catagory/".$cnt->id)}}">
                    <img src="{{asset('assets/client/images/'.$cnt->icon_image )}}" class=" rounded" alt="{{$cnt->country_name}}" />



                    </a>
                </div>
                   </center>
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
