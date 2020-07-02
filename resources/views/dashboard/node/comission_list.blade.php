@extends('layouts.dashboard')

@section('title', 'Comission List')
@section('additional-css')
    <style>
        tfoot input {
            width: 100%;
            padding: 1px;
            box-sizing: border-box;
        }
    </style>
@endsection
@section('pagecontent')

    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table id="nodetable" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Distributor Code</th>
                        <th>Sponser Name</th>
                        <th>Sponser Code</th>
                        <th>Coupon Code</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th width="2%">Action</th>

                        <th>F Name</th>
                        <th>Aadhar</th>
                        <th>PAN</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Acc.No</th>
                        <th>Bank Name</th>
                        <th>Nominee Name</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Distributor Code</th>
                    <th>Sponser Name</th>
                    <th>Sponser Code</th>
                    <th>Coupon Code</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th width="2%">Action</th>

                    <th>F Name</th>
                    <th>Aadhar</th>
                    <th>PAN</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Acc.No</th>
                    <th>Bank Name</th>
                    <th>Nominee Name</th>
                    </tfoot>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
@endsection

@section('datatables-scripts')
    <link rel="stylesheet" href="{{ asset('assets/vendor/validation-engine-master/css/validationEngine.jquery.css') }}">
    @include('dashboard.users.new_users')
    <script src="{{ asset('assets/vendor/validation-engine-master/js/languages/jquery.validationEngine-en.js') }}"></script>
    <script src="{{ asset('assets/vendor/validation-engine-master/js/jquery.validationEngine.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#pass-update").validationEngine();

            // Setup - add a text input to each footer cell
            $('#nodetable tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

            } );

            var table = $('#nodetable').DataTable({
                "order": [[ 0, "desc" ]],
                "processing": true,
                "serverSide": true,
                ajax: '{{ URL::to('/dashboard/nodeserverside') }}',
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'distributor_id' },
                    { data: 'sponser_name' },
                    { data: 'sponser_id' },
                    { data: 'coupon_code' },
                    { data: 'cdate' },
                    {
                        data: 'status',
                        targets:7,
                        render: function ( data, type, row, meta ) {
                            /* if(data=='active'){
                                 return '<a href="'+data+'">active</a>';
                             }
                             else
                             {
                                 return '<a href="'+data+'">Inactive</a>';
                             }*/

                            var color = ' badge badge-';
                            if(data == 'active') {
                                color += 'success';
                            }
                            else if(data =='inactive') {
                                color += 'danger';
                            }
                            else  {
                                color += 'warning';
                            }

                            // return '<button class="'+color+'">'+data+'</button>';
                            return '<span style="cursor: pointer" id="btn-status" class="'+color+'">'+data+'</span>';
                        }

                    },
                    {
                        targets: 8,
                        data: null,
                        defaultContent: '<button id="btncomission" title="View Comission" type="button" class="btn btn-primary btn-sm">' +
                            '<i class="fa fa-eye" aria-hidden="true"></i></button>'


                    },
                    { data: 'f_name' },
                    { data: 'aadhar' },
                    { data: 'pan' },
                    { data: 'address' },
                    { data: 'mobile' },
                    { data: 'email' },
                    { data: 'account_no' },
                    { data: 'bank_name' },
                    { data: 'nominee_name' },

                ],
                "columnDefs": [
                    { "visible": false, "targets": 6 },
                    { "visible": false, "targets": 7 },
                    { "visible": false, "targets": 9 },
                    { "visible": false, "targets": 10 },
                    { "visible": false, "targets": 11 },
                    { "visible": false, "targets": 12},
                    { "visible": false, "targets": 13 },
                    { "visible": false, "targets": 14 },
                    { "visible": false, "targets": 15 },
                    { "visible": false, "targets": 16 },
                    { "visible": false, "targets": 17 }
                ],initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;

                        $( 'input', this.footer() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }

            });



            $('#nodetable tbody').on( 'click', '#btncomission', function () {
                var data = table.row($(this).parents('tr')).data();
                if(data.status=='active'|| data.status=='inactive')

                var id=data.id;
                var url="{{ URL::to('dashboard/comission/comission/')}}";
                var full_url=url+"/"+id;
                   window.location.href=full_url;
            } );






        });




    </script>
@endsection


