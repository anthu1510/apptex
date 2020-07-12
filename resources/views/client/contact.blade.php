@extends('client.layouts.layout')
@section('title')
    <title>Contact Apparel Buyers Data</title>
@endsection

@section('metta')
    <meta name="description" content="An ISO 9001:2015 Certified Company" />
    <meta name="google-site-verification" content="Hz6qT2wnuYPGtIv9NAoMFLeKd6vHhRs8sKz76gVPrPE" />
    <meta name="keywords" content="europe garment buyers database,apparel importers france,garment buyers sweden,germany garment importers,uk importers,usa textile importers/>
@endsection
@section('contents')
        <form action="{{ URL::to('sendmail') }}" method="post" id="newnode">
    @csrf
    <section class="w3l-contact mt-5" >
        <div class="contacts-9 py-5 mt-5">
            <div class="container py-lg-3">
                <div class="row top-map">
                    <div class="cont-details col-md-5">
                        <div class="heading mb-lg-4 mb-4">
                            <h3 class="head">Contact us </h3>
                        </div>
                    </div>
                </div>
                <div class="map-content-9 col-md-7 mt-5 mt-md-0">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="contact-textfield-label" for="w3lName">First Name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="" required="" size="20">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <label class="contact-textfield-label" for="w3lName">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="" required="" size="20">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="contact-textfield-label" for="w3lSender">Your Email ID</label>
                                <input type="email" class="form-control" name="email_id" id="email_id" placeholder="" required="" size="20">
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <label class="contact-textfield-label" for="w3lPhone">Phone Number</label>
                                <input type="tel" class="form-control" name="phone_no" id="phone_no" placeholder="" required="" size="20">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="contact-textfield-label" for="w3lMessage">Message</label>
                            <textarea name="message" class="form-control" id="message" placeholder="" required="" rows="1" cols="20"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-contact">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    </form>
@endsection
