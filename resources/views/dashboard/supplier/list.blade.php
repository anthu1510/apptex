@extends('layouts.dashboard')

@section('title', 'Enquiry List')

@section('pagecontent')

    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table id="nodetable" width="100%" class="table table-striped table-bordered responsive nowrap">
                    <thead>
                    <tr>
                        <th width="5%">Id</th>
                        <th width="10%">Name</th>
                        <th width="10%">Comp Name</th>
                        <th width="10%">Place</th>
                        <th width="10%">State</th>
                        <th width="10%">Country</th>
                        <th width="10%">Email</th>
                        <th width="10%">Validity</th>
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
    @include('dashboard.supplier.modal')
    @include('dashboard.supplier.model-validity')
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
                ajax: '{{ URL::to('/dashboard/supplierserverside') }}',
                columns: [
                    { data: 'id' },
                    { data: 'name'},
                    { data: 'company_name' },
                    { data: 'place'},
                    { data: 'state'},
                    { data: 'country'},
                    { data: 'email'},
                    { data: 'validity_date'},


                    {
                        targets: 8,
                        data: null,
                        defaultContent: '<button id="btnedit" title="View" type="button" class="btn btn-primary btn-sm">' +
                            '<i class="fa fa-eye" aria-hidden="true"></i></button>&nbsp;&nbsp;'+
                            '<button id="btndelete" type="button" title="Delete" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash" aria-hidden="true"></i>' +
                            '</button> &nbsp;'+
                            '<button id="btnvalidity" type="button" title="Validity Date" class="btn btn-success' +
                            ' btn-sm">' +
                            '<i class="fa fa-plus" aria-hidden="true"></i>' +
                            '</button> &nbsp;'+
                            '<button id="btnbonus" type="button" title="Bonus Date" class="btn btn-success' +
                            ' btn-sm">' +
                            '<i class="fa fa-gift" aria-hidden="true"></i>' +
                            '</button>'


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


                //alert("OK btn clicked" + data.id);
                Edit(data.id);


            } );

          $('#nodetable tbody').on( 'click', '#btnvalidity', function () {
                // var data = table.row($(this).parents('tr')).data();  // non responsive method
                var current_row = $(this).parents('tr');//Get the current row
                if (current_row.hasClass('child')) {//Check if the current row is a child row
                    current_row = current_row.prev();//If it is, then point to the row before it (its 'parent')
                }
                var data = table.row(current_row).data();//At this point, current_row refers to a valid row in the table, whether is a child row (collapsed by the DataTable's responsiveness) or a 'normal' row
                //alert("OK btn clicked" + data.id);
                ValidityExtent(data.id);


            } );

            $('#nodetable tbody').on( 'click', '#btnbonus', function () {
                // var data = table.row($(this).parents('tr')).data();  // non responsive method
                var current_row = $(this).parents('tr');//Get the current row
                if (current_row.hasClass('child')) {//Check if the current row is a child row
                    current_row = current_row.prev();//If it is, then point to the row before it (its 'parent')
                }
                var data = table.row(current_row).data();//At this point, current_row refers to a valid row in the table, whether is a child row (collapsed by the DataTable's responsiveness) or a 'normal' row
                //alert("OK btn clicked" + data.id);
                BonusDate(data.id,data.name);


            } );




            $('#nodetable tbody').on( 'click', '#btndelete', function () {
                var data = table.row($(this).parents('tr')).data();

                Delete(data.id,data.name);

            } );


        });

        function Edit(id) {

            $.ajax({
                url: "{{ URL::to('/dashboard/buyer/supplierdetail') }}",
                type: "POST",
                data: {id: id, "_token": "{{ csrf_token() }}"},
                success: function (data) {
                    var json = $.parseJSON(data);

                    console.log(json);
                    $("#sup-id").val(json.id);
                    $("#sname").text(json.name);
                    $("#company_name").text(json.company_name  );
                    $("#emailid").text(json.email);
                    $("#business_desc").text(json.business_desc);
                    $("#address").text(json.address);
                    $("#place").text(json.place);
                    $("#state").text(json.state);
                    $("#country").text(json.country);
                    $("#phone").text(json.phone);
                    $("#catagory").text(json.catagory);
                    $("#status").text(json.status);
                    $("#created_at").text(json.created_at);
                    $("#updated_at").text(json.updated_at);
                    $("#validity_date").text(json.validity_date);
                    $('#myModal').modal('show');
                }
            });
        }

        function Delete(id,name) {
            var con = confirm('Are you want Delete ' + name +" ?");
            if(con == true){
                $.ajax({
                    url: "{{ URL::to('dashboard/buyer/deletesupplier') }}",
                    type: "POST",
                    data: {id: id, "_token": "{{ csrf_token() }}"},
                    success: function (data) {
                        window.location.reload();
                    }
                });
            }
        }

        function ValidityExtent(id) {
            $("#sup-id").val(id);
            $('#validityModal').modal('show');

            }

        function validityExtends() {

            $('#validityModal').modal('show');
        }


        function BonusDate(id,name)
        {
            var con = confirm('Do you want to give bonus to ' + name +" ?");
            if(con == true){
                $.ajax({
                    url: "{{ URL::to('dashboard/buyer/bonusdate') }}",
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


