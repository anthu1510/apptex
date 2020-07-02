<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Node</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">


                <form action="{{ URL::to('dashboard/buyer/updatesave') }}" method="post">
                @csrf
                    <input type="hidden" id="hbuyer_id" name="hbuyer_id" >
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="u_name"> Country </label>
                                        <select class="select2class form-control validate[required]" id="country" name="country" style="width: 100%"   >
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
                                                   class=" form-control validate[required]"
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
                                               class=" form-control validate[required]"
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
                                                   class=" form-control validate[required]"
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
                                               class=" form-control validate[required]"
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
                                               class=" form-control validate[required]"
                                               value="" placeholder="Enter Fax"
                                               data-errormessage-value-missing="Fax is required!">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="buyer_name"> Email </label>

                                        <input type="text" name="email" id="email_id"
                                               class=" form-control validate[required,custom[email]"
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
                                               class=" form-control validate[required]"
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


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
