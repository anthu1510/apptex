@extends('layouts.dashboard')

@section('title', 'Buyer List')

@section('pagecontent')
    <div class="row mb-2">
        <div class="col-lg-1">
            <a href="{{ URL::to('/dashboard/buyer/create') }}"  class="btn btn-outline-primary"

            >Create Buyer
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table id="nodetable" width="100%" class="table table-striped table-bordered responsive nowrap">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Country</th>
                        <th>Catagory</th>
                        <th>Buyer Name</th>
                        <th>Pro.Desc</th>
                        <th width="5%">Contact</th>
                        <th>Phone</th>
                        <th width="5%">Fax</th>
                        <th width="2%">Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>

@endsection

@section('model-content')
    @include('dashboard.node.modal')
@endsection

@section('datatables-scripts')
    <link rel="stylesheet" href="{{ asset('assets/vendor/validation-engine-master/css/validationEngine.jquery.css') }}">
    @include('dashboard.users.new_users')
    <script src="{{ asset('assets/vendor/validation-engine-master/js/languages/jquery.validationEngine-en.js') }}"></script>
    <script src="{{ asset('assets/vendor/validation-engine-master/js/jquery.validationEngine.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#pass-update").validationEngine();
            var table = $('#nodetable').DataTable({
                "order": [[ 0, "desc" ]],
                "processing": true,
                "serverSide": true,
                ajax: '{{ URL::to('/dashboard/buyerserverside') }}',
                columns: [
                    { data: 'id' },
                    { data: 'country'},
                    { data: 'catagory' },
                    { data: 'buyername'},
                    { data: 'product_desc'},
                    { data: 'contct_person' },
                    { data: 'phone'},
                    { data: 'fax'},

                    {
                        targets: 8,
                        data: null,
                        defaultContent: '<button id="btnedit" title="Edit" type="button" class="btn btn-primary btn-sm">' +
                            '<i class="fa fa-edit" aria-hidden="true"></i></button>&nbsp;&nbsp;'


                    }

                ],

            });



            $('#nodetable tbody').on( 'click', '#btnedit', function () {
               // var data = table.row($(this).parents('tr')).data();  // non responsive method
                var current_row = $(this).parents('tr');//Get the current row
                if (current_row.hasClass('child')) {//Check if the current row is a child row
                    current_row = current_row.prev();//If it is, then point to the row before it (its 'parent')
                }
                var data = table.row(current_row).data();//At this point, current_row refers to a valid row in the table, whether is a child row (collapsed by the DataTable's responsiveness) or a 'normal' row


                    ///alert("OK btn clicked" + data.id);
                    Edit(data.id);


            } );




            $('#nodetable tbody').on( 'click', '#btndelete', function () {
                var data = table.row($(this).parents('tr')).data();
                if(data.status=='active'|| data.status=='inactive')
                {
                    //Delete(data.id,data.name,data.coupon_code);
                }

            } );


        });

        function Edit(id) {

            $.ajax({
                url: "{{ URL::to('/dashboard/buyer/buyeredit') }}",
                type: "POST",
                data: {id: id, "_token": "{{ csrf_token() }}"},
                success: function (data) {
                    var json = $.parseJSON(data);

                    console.log(json);

                    $('#hbuyer_id').val(json.id);
                    $('#country').val(json.country_id);
                   // $('#country').val(json.country_id);
                    var row=json.catagory_id;
                    var result = row.split(',');
                    //console.log(result);
                    $('#catagory').val(result);
                    $('#buyer_name').val(json.buyer_name);
                    $('#product_desc').val(json.desc);
                    $('#contact_person').val(json.contact_person);
                    $('#contact_address').val(json.contact_address);
                    $('#phone').val(json.phone);
                    $('#fax').val(json.fax);
                        $('#email_id').val(json.email);
                    $('#website').val(json.website);

                    $('#myModal').modal('show');
                }
            });
        }

        function Delete(id,name,coupon) {
            var con = confirm('Are you want Delete ' + name +"'s coupon "+coupon+" ?");
            if(con == true){
                $.ajax({
                    url: "{{ URL::to('dashboard/coupon/delete') }}",
                    type: "POST",
                    data: {id: id, "_token": "{{ csrf_token() }}"},
                    success: function (data) {
                        window.location.reload();
                    }
                });
            }
        }
    </script>
@endsection


