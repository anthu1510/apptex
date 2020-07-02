@extends('layouts.dashboard')

@section('title', 'Quote')

@section('pagecontent')
    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                <table id="myquote" width="100%" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Quote Number</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Total</th>
                        <th width="2%">Action</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- END DATA TABLE -->
        </div>
    </div>
@endsection

@section('datatables-scripts')
    @include('dashboard.quote.preview_quote')
    <script>
        $(document).ready(function() {
           var table = $('#myquote').DataTable({
               order: [[ 0, "desc" ]],
                processing: true,
                serverSide: true,
                ajax: "{{ URL::to('/dashboard/quoteserverside') }}",
                columns: [
                    { data: 'id' },
                    { data: 'Quote_Number' },
                    { data: 'Customer_Name' },
                    { data: 'Quote_Date' },
                    { data: 'Final_Total' },
                    {
                        targets: 5,
                        data: null,
                        defaultContent: '<button id="btnpreview" title="Preview" type="button" class="btn btn-primary btn-sm">' +
                                        '<i class="fas fa-eye" aria-hidden="true"></i></button>&nbsp;&nbsp;' +
                                        '<button id="btnprint" type="button" title="PDF Download" class="btn btn-warning btn-sm">' +
                                        '<i class="fa fa-print" aria-hidden="true"></i>' +
                                        '</button>'
                    }
                ]
            });

           $('#myquote tbody').on( 'click', '#btnprint', function () {
               var data = table.row($(this).parents('tr')).data();
               PdfQuote(data.id);
               //Test(data.id);
           } );

            $('#myquote tbody').on( 'click', '#btnpreview', function () {
                var data = table.row($(this).parents('tr')).data();
                Preview(data.id);
            } );
        });

        function Preview(id) {
            $.ajax({
                url : "{{ URL::to('/dashboard/quote/view') }}",
                type: "POST",
                data: {id: id, "_token": "{{ csrf_token() }}"},
                success: function (data) {
                    var json = $.parseJSON(data);

                     var  html = '<div class="row" style="font-family: Calibri">';
                                html += '<div class="col-3">';
                                    html += ' <img src="{{ asset('assets/images/logo/logo.png') }}" alt="">';
                                html += '</div>';
                                html += '<div class="col-9 text-right">';
                                    html += '<div class=""># 1, STV Nagar, Avinashi Road, Peelamedu, Coimbatore - 641 004</div>';
                                    html += '<p>Tel: +91 422 4399233, Mobile: +91 952 4399233</p>';
                                    html += '<p>Email: sales@roghini.com, Website: www.roghini.com</p>';
                                html += '</div>';
                            html += '</div>';

                            html += '<div class="row" style="font-family: Calibri">';
                                html += '<div class="col-12 mt-4 text-center">';
                                    html += '<h2>QUOTATION / PROFORMA</h2>';
                                html += '</div>';
                            html += '</div>';

                    html += '<div class="row border mt-5" style="font-size: 15px; font-family: Calibri">'+
                        '<div class="col-8">'+
                        '    <div class="row">'+
                        '        <div class="col-4"><strong>Customer Name :</strong></div>'+
                        '        <div class="col-8">'+json.master.Customer_Name+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-4"><strong>Customer Address :</strong></div>'+
                        '        <div class="col-8">'+json.master.Customer_Address+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-4"><strong>Kind Attention :</strong></div>'+
                        '        <div class="col-8">'+json.master.Customer_Contact+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-4"><strong>Phone Number :</strong></div>'+
                        '        <div class="col-8">'+json.master.Customer_Phone_Number+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-4"><strong>GST No :</strong></div>'+
                        '        <div class="col-8">'+json.master.Customer_GSTIN+'</div>'+
                        '    </div>'+
                        '</div>'+
                        '<div class="col-4 border no-padding">'+
                        '    <div class="row border-bottom">'+
                        '        <div class="col-5"><strong>OUR GST No :</strong></div>'+
                        '        <div class="col-7"><strong>'+json.master.Customer_GSTIN+'</strong></div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-6"><strong>Quote Number :</strong></div>'+
                        '        <div class="col-6">'+json.master.Quote_Number+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-6"><strong>Quote Date :</strong></div>'+
                        '        <div class="col-6">'+json.master.Quote_Date+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-6"><strong>Quote Validity :</strong></div>'+
                        '        <div class="col-6">'+json.master.Quote_Validity+'</div>'+
                        '    </div>'+
                        '    <div class="row">'+
                        '        <div class="col-6"><strong>Prepared By :</strong></div>'+
                        '        <div class="col-6">'+json.master.Prepared_By+'</div>'+
                        '    </div>'+
                        '</div>'+
                        '</div>';

                        html += '<div class="row mt-3 ml-3" style="font-family: Calibri">'+
                        '	<div class="col-12">'+
                        '        <h5>Dear Sir/ Madam,</h5>'+
                        '		<p style="font-family: Calibri; padding-left: 2%">Please find our best prices quoted for the products mentioned below.</p>'+
                        '    </div>'+
                        '</div>';

                html += '<div class="row mt-4 no-padding no-margin" style="font-family: Calibri">';
                    html += '<div id="tbody" class="row border col-12 no-padding" style="padding-bottom: 30%; font-size: 12px">';


                    html += '<div id="header" class="row col-12 no-padding" style="background-color: #ccccb3; color: black; padding-bottom: 5px; font-weight: bold">'+

                                '<div class="col-3 text-center mt-1">'+
                                '    <div class="border">Specification</div>'+
                                '</div>'+
                                '<div class="col-2 text-center mt-1">'+
                                '    <div class="border">Description</div>'+
                                '</div>'+
                                '<div class="col-1 text-center mt-1">'+
                                '    <div class="border">Qty</div>'+
                                '</div>'+
                                '<div class="col-1 text-center mt-1">'+
                                '    <div class="border">UOM</div>'+
                                '</div>'+
                                '<div class="col-2 text-center mt-1">'+
                                '    <div class="border">Unit Price</div>'+
                                '</div>'+
                                '<div class="col-1 text-center mt-1">'+
                                '    <div class="border">Disc</div>'+
                                '</div>'+
                                '<div class="col-2 text-center mt-1">'+
                                '    <div class="border">Net Price</div>'+
                                '</div>'+
                        '</div>';

                    $.each(json.details, function (i,v) {
                        var body = '<div class="row col-12 mt-2 no-padding">'+
                                        '<div class="col-3">'+
                                            v.Specification +
                                        '</div>'+
                                        '<div class="col-2">'+
                                            v.Description +
                                        '</div>'+
                                        '<div class="col-1 text-center">'+
                                            v.Quantity +
                                        '</div>'+
                                        '<div class="col-1 text-center">'+
                                            v.UOM +
                                        '</div>'+
                                        '<div class="col-2 text-right">'+
                                            v.Unit_Price +
                                        '</div>'+
                                        '<div class="col-1 text-right">'+
                                            v.Discount +
                                        '</div>'+
                                        '<div class="col-2 text-right">'+
                                            v.Net_Price +
                                        '</div>'+
                                '</div>';
                        html += body;
                    });



                    html += '</div>';
                    html += '</div>';


                     html += '<div class="row border col-12">'+
                                    '<div class="row col-12">'+
                                    '    <div class="col-2 offset-8 text-right">'+
                                    '        <p>Total :</p>'+
                                    '    </div>'+
                                    '    <div class="col-2 text-right">'+
                                                json.master.Total +
                                    '    </div>'+
                                    '</div>'+
                                    '<div class="row col-12">'+
                                    '    <div class="col-3"><strong>Contact Person :</strong></div>'+
                                    '    <div class="col-4">'+json.master.Engineer_Name+'</div>'+
                                    '</div>'+
                                    '<div class="row col-12">'+
                                    '    <div class="col-3"><strong>Designation :</strong></div>'+
                                    '    <div class="col-4">'+json.master.Designation+'</div>'+
                                    '</div>'+
                                    '<div class="row col-12">'+
                                    '    <div class="col-3"><strong>Email ID :</strong></div>'+
                                    '    <div class="col-4">'+json.master.Email+'</div>'+
                                    '</div>'+
                                    '<div class="row col-12">'+
                                    '    <div class="col-2 offset-8 text-right" style="border-top: 1px solid black">'+
                                    '        <p>Grand Total :</p>'+
                                    '    </div>'+
                                    '    <div class="col-2 text-right" style="border-top: 1px solid black">'+
                                            json.master.Final_Total +
                                    '    </div>'+
                                    '</div>'+
                                    '                                        </div>'+
                                    '                                        <div id="foot" class="row border mt-3 col-12 no-padding footer">'+
                                    '<div class="col-9" style="font-size: 14px">'+
                                    '    <div class="row col-12">'+
                                    '        <div class="col-5"><strong>Delivery Terms :</strong></div>'+
                                    '        <div class="col-7">'+json.master.Delivery_Terms+'</div>'+
                                    '    </div>'+
                                    '    <div class="row col-12">'+
                                    '        <div class="col-5"><strong>Payment Terms :</strong></div>'+
                                    '        <div class="col-7">'+json.master.Payment_Terms+'</div>'+
                                    '    </div>'+
                                    '    <div class="row col-12">'+
                                    '        <div class="col-5"><strong>Packing and Forwarding :</strong></div>'+
                                    '        <div class="col-7">'+json.master.Packing_and_Forwarding+'</div>'+
                                    '    </div>'+
                                    '    <div class="row col-12">'+
                                    '        <div class="col-5"><strong>Remarks :</strong></div>'+
                                    '        <div class="col-7">'+json.master.Remarks+'</div>'+
                                    '    </div>'+
                                    '</div>'+
                                    '<div class="col-3 border" style="font-size: 10px">'+
                                    '    <div class="row col-12">'+
                                    '        <p>For <strong>Roghini Minerva Engineers</strong></p>'+
                                    '    </div>'+
                                    '    <div class="row col-12" style="bottom:  0 !important; position: absolute">'+
                                    '        <p><strong>Authorised Signatory</strong></p>'+
                                    '    </div>'+
                                    '</div>'+
                                    '</div>'+
                                    '</div>';

                            html += '<div style="margin-top: 1%; width: 100%; height: 10px; background-color: black"></div>';
                            html += '<div style="width: 100%; height: 10px; background-color: green"></div>';

                    $('#body-content').html(html);
                        $('#preview-print').modal('show');
                }
            });
        }

        function PdfQuote(id) {
            var main = "{{ URL::to('/dashboard/quote/print') }}";
            var url = main+'/'+id;
            window.location.href = url;
        }

    </script>
@endsection
