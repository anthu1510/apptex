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
                        <th width="10%">First Name</th>
                        <th width="10%">Last Name</th>
                        <th width="10%">Email Id</th>
                        <th width="10%">Phone</th>
                        <th width="25%">Message</th>
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
    @include('dashboard.contact.modal')
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
                ajax: '{{ URL::to('/dashboard/contactserverside') }}',
                columns: [
                    { data: 'id' },
                    { data: 'first_name'},
                    { data: 'last_name' },
                    { data: 'email_id'},
                    { data: 'phone_no'},
                    { data: 'messge',
                        render: function (data) {
                            var bedget = 'badge badge-';

                            return data.substring(1, 25);

                    }
                    },


                    {
                        targets: 8,
                        data: null,
                        defaultContent: '<button id="btnedit" title="View" type="button" class="btn btn-primary btn-sm">' +
                            '<i class="fa fa-eye" aria-hidden="true"></i></button>&nbsp;&nbsp;'+
                            '<button id="btndelete" type="button" title="Delete" class="btn btn-danger btn-sm">' +
                            '<i class="fa fa-trash" aria-hidden="true"></i>' +
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


                    ///alert("OK btn clicked" + data.id);
                    Edit(data.id);


            } );




            $('#nodetable tbody').on( 'click', '#btndelete', function () {
                var data = table.row($(this).parents('tr')).data();

                    Delete(data.id,data.first_name,data.last_name);

            } );


        });

        function Edit(id) {

            $.ajax({
                url: "{{ URL::to('/dashboard/buyer/contactdetail') }}",
                type: "POST",
                data: {id: id, "_token": "{{ csrf_token() }}"},
                success: function (data) {
                    var json = $.parseJSON(data);

                    console.log(json);

                    $("#full-name").text(json.first_name + " " +json.last_name);
                    $("#email_id").text(json.email_id  );
                    $("#phone_no").text(json.phone_no  );
                    $("#messge").text(json.messge  );



                    $('#myModal').modal('show');
                }
            });
        }

        function Delete(id,name,lname) {
            var con = confirm('Are you want Delete ' + name +" "+lname+" ?");
            if(con == true){
                $.ajax({
                    url: "{{ URL::to('dashboard/buyer/deletecontact') }}",
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


