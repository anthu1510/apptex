@extends('client.layouts.layout')
@section('title')
    <title> Apparel Importers Data - Buyers Profile</title>
@endsection
@section('contents')
    <div class="row">
        <section class=" py-5 mt-5">
        </section>
        <div class="col-lg-12 pt-5 mt-5">

        <div class="col-md-12">
            <!-- DATA TABLE -->
            <table id="buyertable"   class="table  table-striped table-bordered responsive nowrap">
                <thead>
                <tr>
                    <th width="5%">#</th>

                    {{--<th width="5%">Country</th>--}}
                    <th width="20%">Buyer Name</th>
                    <th width="70%">Products</th>
                    {{--<th>Contact</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Email</th>--}}
                    <th width="8%">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th width="5%">#</th>
                    {{--<th width="5%">Country</th>--}}
                    <th width="20%">Name</th>
                    <th width="70%">Products</th>
                    {{--<th>Contact</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Email</th>--}}
                    <th width="8%">Action</th>
                </tr>
                </tfoot>
            </table>
            <div class="table-responsive table-responsive-data2">

            </div>
            <!-- END DATA TABLE -->
        </div>

        </div>
    </div>
    @include('client.model_buyer')
@endsection

@section('additional-css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/validation-engine-master/css/validationEngine.jquery.css') }}">
    <link href="{{ asset('assets/vendor/DataTables/css/jquery.dataTables.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/DataTables/Responsive-2.2.5/css/responsive.bootstrap.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('assets/vendor/DataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" media="all">
@endsection

@section('additional-js')
    <script src="{{ asset('assets/vendor/DataTables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendor/DataTables/Responsive-2.2.5/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>

    {{--<script src="public/assets/vendor/DataTables/Datatable-1.10.21/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>--}}
    {{--<script src="{{ asset('assets/vendor/DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/vendor/DataTables/js/dataTables.bootstrap4.min.js') }}" type="text/javascript"></script>

{{--@include('dashboard.users.new_users')--}}
<script src="{{ asset('assets/vendor/validation-engine-master/js/languages/jquery.validationEngine-en.js') }}"></script>
<script src="{{ asset('assets/vendor/validation-engine-master/js/jquery.validationEngine.js') }}"></script>
<script>
    $(document).ready(function() {

        // Setup - add a text input to each footer cell

    /*    $('#buyertable tfoot th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        } );*/
        var url="{{ URL::to( 'buyerserverside/'. Request::segment(2) . '/'. Request::segment(3) ) }}";
        //alert(url);

        var table = $('#buyertable').DataTable({
            "order": [[ 0, "desc" ]],
            "processing": true,
            "serverSide": true,
            ajax: url,
            columns: [
                {
                    data: 'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },

               /* { data: 'country' },*/
                { data: 'buyername',
                    render: function (data) {

                        return '<span style="cursor: pointer" id="btnpriority" >'+ data+'</span>';
                    }



                },
                { data: 'catagory' },
               /* { data: 'contct_person' },
                { data: 'phone' },
                { data: 'fax' },
                { data: 'email' },*/
                {
                    targets: 7,
                    data: null,
                    defaultContent: '<button id="btnedit" title="Edit" type="button" class="btn btn-primary btn-sm">' +
                        '<i class="fa fa-eye" aria-hidden="true"></i></button>'
                }
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



        $('#buyertable tbody').on( 'click', '#btnedit', function () {
            var current_row = $(this).parents('tr');//Get the current row
            if (current_row.hasClass('child')) {//Check if the current row is a child row
                current_row = current_row.prev();//If it is, then point to the row before it (its 'parent')
            }
            var data = table.row(current_row).data();//At this point, current_row refers to a valid row in the table, whether is a child row (collapsed by the DataTable's responsiveness) or a 'normal' row
            Edit(data.id);
        } );

        $('#buyertable tbody').on( 'click', '#btnpriority', function () {
            var current_row = $(this).parents('tr');//Get the current row
            if (current_row.hasClass('child')) {//Check if the current row is a child row
                current_row = current_row.prev();//If it is, then point to the row before it (its 'parent')
            }
            var data = table.row(current_row).data();//At this point, current_row refers to a valid row in the table, whether is a child row (collapsed by the DataTable's responsiveness) or a 'normal' row
            Edit(data.id);
        } );




    });

    function Edit(id) {

        $.ajax({
            url: "{{ URL::to('buyerview') }}",
            type: "POST",
            data: {id: id, "_token": "{{ csrf_token() }}"},
            success: function (data) {
                var json = $.parseJSON(data);
                console.log(json);
                $('#cname').val(json.buyername);
                $('#contact_person').val(json.contct_person);
                $('#description').val(json.product_desc);
                $('#address').val(json.address);
                $('#phone').val(json.phone);
                $('#fax').val(json.fax);
                $('#email').val(json.email);
                $('#website').val(json.website);
                $('#myModal').modal('show');
            }
        });
    }

</script>

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

