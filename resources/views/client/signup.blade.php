<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Market a Corporate Category Bootstrap Responsive Website Template - Signup </title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->

    <link href="{{ asset('assets/client/css/style-liberty.css') }}" rel="stylesheet" media="all">


</head>
<body>
<section class="w3l-login">
    <div class="login-box">
        <div class="container">
            <div class="logo text-center mb-3">
                <a class="navbar-brand" href="{{URL::to("/")}}"><img src="{{asset('assets/client/images/logo.png')}}"> </a>
                <!-- if logo is image enable this
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
            </div>
            <div class="login-form py-5 px-4 mx-auto">
                <h3 class="account-title mb-4">Sign up now, or <a href="login.html">Log in</a></h3>
                <form action="{{ URL::to('signupsave') }}" method="post" id="signup" name="signup">
                    @csrf
                    <div class="form-group">
                        <label class="field-info" for="name">Name</label>
                        <input type="text" class="form-control validate[required]" name="name" id="name"  >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="email">Email</label>
                        <input type="email" class="form-control validate[required,custom[email]]" name="email" id="email" required="">
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="inputPassword">Password</label>
                        <input type="password" class="form-control validate[required]" id="inputPassword" name="inputPassword" >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="retypePassword">Retype Password</label>
                        <input type="password" class="form-control validate[equals[inputPassword]]" id="retypePassword" name="retypePassword">
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="companyname">Company Name</label>
                        <input type="text" class="form-control validate[required]" name="companyname" id="companyname" >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="businessdesc">Your Business Description</label>
                        <textarea  class="form-control" name="businessdesc" id="businessdesc" ></textarea>
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="address">Address</label>
                        <textarea  class="form-control" name="address" id="address" ></textarea>
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="place ">Place</label>
                        <input type="text" class="form-control validate[required]" name="place" id="place" >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="state ">State</label>
                        <input type="text" class="form-control validate[required]" name="state" id="state" >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="country">Country</label>
                        <input type="text" class="form-control validate[required]" name="country" id="country" >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="phone ">Phone</label>
                        <input type="text" class="form-control validate[required]" name="phone" id="phone" >
                    </div>
                    <div class="form-group">
                        <label class="field-info" for="inputUsernameEmail">Interested Catagories</label>
                        <select class="select2class form-control validate[required]" id="catagory" name="catagory[]" multiple="multiple" placeholder="Please Select"  >
                            @foreach($catagory as $cat)
                                <option value="{{$cat->id}}">{{$cat->catagory_desc}}</option>
                            @endforeach
                         </select>
                    </div>



                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input validate[required]" value="1" id="defaultUnchecked" name="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">I agree to the <a href="#terms" class="editContent">Terms of Use</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-theme mt-4">
                        Sign up
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
<link rel="stylesheet" href="{{ asset('assets/vendor/validation-engine-master/css/validationEngine.jquery.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/datetimepicker/build/jquery.datetimepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}">

{{--<link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme-master/select2-bootstrap.min.css') }}">--}}
<script src="{{ asset('assets/vendor/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/vendor/validation-engine-master/js/languages/jquery.validationEngine-en.js') }}"></script>
<script src="{{ asset('assets/vendor/validation-engine-master/js/jquery.validationEngine.js') }}"></script>
<script src="{{ asset('assets/vendor/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/js/select2.js') }}"></script>

<script>
    $(document).ready(function () {
        $("#signup").validationEngine({promptPosition: "topLeft:0"});




        // $('.select2class').select2();
        //$("#catagory").select2({dropdownAutoWidth : true});
        //  $("#catagory").select2({dropdownAutoWidth : true});
       // $("#country").select2({ width: '100%' });
       //$('.select2class').select2({width: 'resolve'});
        $(".select2class").select2({
            theme: "classic",
            /*placeholder: "Select Catagory",*/
            allowClear: true
        });




    });

</script>

    </html>
