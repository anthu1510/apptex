@extends('layouts.dashboard')

@section('title', 'Comission List')

@section('pagecontent')

    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table id="nodetable" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Sno</th>
                        <th>Distributor Code</th>
                        <th>Name</th>
                        <th>Coupon</th>
                        <th>Cou.Used For</th>
                        <th>Cou.Used Code</th>
                        <th>Amount</th>
                        <th>Date</th>
                     </tr>
                    </thead>
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
            var table = $('#nodetable').DataTable({
                "order": [[ 0, "desc" ]],
                "processing": true,
                "serverSide": true,
                ajax: '{{ URL::to('/dashboard/couponcomissionserverside') }}',
                columns: [

                    {
                        targets: 1,
                        data: 'node_id',
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    { data: 'node_code' },
                    { data: 'node_name' },
                    { data: 'coupon' },
                    { data: 'name' },
                    { data: 'distributor_id' },
                    { data: 'amount' },
                    { data: 'cdate' }
                  ]

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


