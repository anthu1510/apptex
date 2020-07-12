@extends('layouts.dashboard')

@section('title', 'Buyer Create')

@section('pagecontent')

    <style>
        /* Tabs*/
        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }

        #tabs {
            background: #007b5e;
            color: #eee;
        }

        #tabs h6.section-title {
            color: #eee;
        }

        #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
            color: #f3f3f3;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-size: 20px;
            font-weight: bold;
        }

        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: #eee;
            font-size: 20px;
        }

        #country{
            width: 400px !important;
        }


    </style>

    <form action="{{ URL::to('dashboard/buyer/save2') }}" method="post" id="newnode">
        @csrf
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="u_name"> Country </label>
                            <select class="select2class form-control " id="country" name="country" style="width: 100%"   >
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="u_name"> Catagory </label>

                            {{--<input type="text" name="country" id="country"
                                   class="  form-control validate[required]"
                                   value="" placeholder="Enter Country Name"
                                   data-errormessage-value-missing="Contry name is required!">--}}

                            {{--<select class="select2class " id="catagory" name="catagory" multiple="multiple">--}}
                            <select class="select2class form-control validate[required]" id="catagory" name="catagory[]" style="width: 100%"  multiple="multiple"  >
                                @foreach($catagories as $catagory)
                                    <option value="{{$catagory->id}}">{{$catagory->catagory_desc}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="buyer_name"> Buyer Name </label>

                            <input type="text" name="buyer_name" id="buyer_name"
                                   class=" form-control validate[required]"
                                   value="" placeholder="Enter Buyer Name"
                                   data-errormessage-value-missing="Buyer Name is required!">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="u_name"> Product Description </label>

                            <textarea  name="product_desc" id="product_desc"
                                   class=" form-control "
                                   value="" placeholder="Enter Product Description"
                                       data-errormessage-value-missing="Product Description is required!"> </textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="buyer_name"> Contact Person </label>

                            <input type="text" name="contact_person" id="contact_person"
                                   class=" form-control "
                                   value="" placeholder="Enter Contact Person"
                                   data-errormessage-value-missing="Contact Person is required!">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="u_name"> Contact Address </label>

                            <textarea  name="contact_address" id="contact_address"
                                       class=" form-control "
                                       value="" placeholder=" Enter Contact Address"
                                       data-errormessage-value-missing="Contact Address is required!"> </textarea>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="buyer_name"> Phone </label>

                            <input type="text" name="phone" id="phone"
                                   class=" form-control "
                                   value="" placeholder="Enter Phone"
                                   data-errormessage-value-missing="Phone is required!">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="buyer_name"> Fax </label>

                            <input type="text" name="fax" id="fax"
                                   class=" form-control "
                                   value="" placeholder="Enter Fax"
                                   data-errormessage-value-missing="Fax is required!">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="buyer_name"> Email </label>

                            <input type="text" name="email" id="email"
                                   class=" form-control "
                                   value="" placeholder="Enter Email"
                                   data-errormessage-value-missing="Email is required!">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="buyer_name"> Website </label>

                            <input type="text" name="website" id="website"
                                   class=" form-control "
                                   value="" placeholder="Enter Website"
                                   data-errormessage-value-missing="Website is required!">
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="col-lg-4">
        <div class="form-group">
            <button class="btn btn-primary pull-right">Save</button>
        </div>
        </div>
    </form>



@endsection

@section('datatables-scripts')
    <link rel="stylesheet" href="{{ asset('assets/vendor/validation-engine-master/css/validationEngine.jquery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/datetimepicker/build/jquery.datetimepicker.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2-bootstrap-theme-master/select2-bootstrap.min.css') }}">

    <script
        src="{{ asset('assets/vendor/validation-engine-master/js/languages/jquery.validationEngine-en.js') }}"></script>
    <script src="{{ asset('assets/vendor/validation-engine-master/js/jquery.validationEngine.js') }}"></script>
    <script src="{{ asset('assets/vendor/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/select2/js/select2.js') }}"></script>
        <script>
            $(document).ready(function () {
                $("#newnode").validationEngine({promptPosition: "topLeft:0"});

                $('.datetimepicker').datetimepicker({
                    timepicker:false,
                    format:'Y-m-d'
                });


                  // $('.select2class').select2();
                $("#country").select2({dropdownAutoWidth : true});
                //  $("#catagory").select2({dropdownAutoWidth : true});
                //$("#country").select2({ width: '100%' });
                //$('.select2class').select2({width: 'resolve'});
                $(".js-example-theme-multiple").select2({
                    theme: "classic"
                });



            });


        $("#sponserid").bind("keyup  paste", function(e) {
            /* $( "#sponserid" ).trigger( "keyup" );*/

            var val = $(this).val();

            $('input[name="tree_position"]').prop('checked', false);
            var url = "{{ URL::to('dashboard/node/getsponser') }}";
            $.get(url, {value: val, "_token": "{{ csrf_token() }}"}, function (data) {


                    if (data === 'error') {
                        $('#sponsername').val('');
                        $('#sponsermobile').val('');
                        $('#sponseraddress').val('');
                        $('#left-lab, #middle-lab, #right-lab').css('display', 'none');

                    } else {
                        var json = JSON.parse(data);
                        /*console.log(json);*/
                        $('#sponsername').val(json.name);
                        $('#sponsermobile').val(json.mobile);
                        $('#sponseraddress').val(json.address);
                        $('#spon_id').val(json.id);

                        setInterval(function () {
                            $('#sponsername').css('color', 'transparent');
                            setTimeout(function () {
                                $('#sponsername').css('color', 'red');
                            }, 500);
                        }, 1000);
                        $('#left-lab, #middle-lab, #right-lab').css('display', 'none');



                        if (json.l == '' ||json.l == 0||json.l == null  ) {
                            $('#left-lab').css('display', 'inline');
                            //$('#left-lab').enabled();
                        }
                        if (json.r == '' || json.r == 0 || json.r == null) {
                            $('#right-lab').css('display', 'inline');

                        }
                        if (json.m == '' || json.m == 0 || json.m == null) {

                            $('#middle-lab').css('display', 'inline');
                        }
                    }
                }
            );




        })


        /*$('#sponserid').change(function () {
           /!* $( "#sponserid" ).trigger( "keyup" );*!/

            var val = $(this).val();

            $('input[name="tree_position"]').prop('checked', false);
            var url = "{{ URL::to('dashboard/node/getsponser') }}";
            $.get(url, {value: val, "_token": "{{ csrf_token() }}"}, function (data) {


                    if (data === 'error') {
                        $('#sponsername').val('');
                        $('#sponsermobile').val('');
                        $('#sponseraddress').val('');
                        $('#left-lab, #middle-lab, #right-lab').css('display', 'none');

                    } else {
                        var json = JSON.parse(data);
                        console.log(json);
                        $('#sponsername').val(json.name);
                        $('#sponsermobile').val(json.mobile);
                        $('#sponseraddress').val(json.address);
                        $('#spon_id').val(json.id);

                        setInterval(function () {
                            $('#sponsername').css('color', 'transparent');
                            setTimeout(function () {
                                $('#sponsername').css('color', 'red');
                            }, 500);
                        }, 1000);


                        if (json.l == '' ||json.l == 0||json.l == null  ) {
                            $('#left-lab').css('display', 'inline');
                            //$('#left-lab').enabled();
                        }
                        if (json.r == '' || json.r == 0 || json.r == null) {
                            $('#right-lab').css('display', 'inline');

                        }
                        if (json.m == '' || json.m == 0 || json.m == null) {

                            $('#middle-lab').css('display', 'inline');
                        }
                    }
                }
            );



        });

        $('#sponserid').keyup(function () {
              var val = $(this).val();

            $('input[name="tree_position"]').prop('checked', false);
            var url = "{{ URL::to('dashboard/node/getsponser') }}";
            $.get(url, {value: val, "_token": "{{ csrf_token() }}"}, function (data) {


                    if (data === 'error') {
                        $('#sponsername').val('');
                        $('#sponsermobile').val('');
                        $('#sponseraddress').val('');
                       $('#left-lab, #middle-lab, #right-lab').css('display', 'none');

                    } else {
                        var json = JSON.parse(data);
                        console.log(json);
                        $('#sponsername').val(json.name);
                        $('#sponsermobile').val(json.mobile);
                        $('#sponseraddress').val(json.address);
                        $('#spon_id').val(json.id);

                        setInterval(function () {
                            $('#sponsername').css('color', 'transparent');
                            setTimeout(function () {
                                $('#sponsername').css('color', 'red');
                            }, 500);
                        }, 1000);


                        if (json.l == '' ||json.l == 0||json.l == null  ) {
                            $('#left-lab').css('display', 'inline');
                            //$('#left-lab').enabled();
                        }
                        if (json.r == '' || json.r == 0 || json.r == null) {
                            $('#right-lab').css('display', 'inline');

                        }
                        if (json.m == '' || json.m == 0 || json.m == null) {

                            $('#middle-lab').css('display', 'inline');
                        }
                    }
                }
            );

        });*/
    </script>
@endsection


