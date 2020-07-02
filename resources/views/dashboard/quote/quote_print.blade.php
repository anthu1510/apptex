<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $master->Quote_Number }}</title>
</head>
<style>
    table {
        width: 100%;
        font-family: Calibri;
        border-collapse: collapse;
    }
    .border {
        border: 1px solid black;
    }
    .tbl-head {
        margin: 5px 5px 5px 5px;
        text-align: center;
        border: 1px solid black;
        font-weight: bold;
        padding-bottom: 5px;
    }
    .pad-left {
        padding-left: 12px;
    }
    .text-right {
        text-align: center;
    }
    .content-table {
        margin-top: 1%;
        font-size: 12px;
    }
     .body-height {
        height: 30%;
    }

    .border-bottom {
        border-bottom: 1px solid black;
    }
    .custom-height {
        vertical-align: top;
    }
    .fontbold{
        font-weight: bold;
    }
</style>
<body>


<table>
    <tr>
        <td width="20%">
            <img src="{{ $logo }}" alt="">
        </td>
        <td width="80%" style="float: right">
            <table style="text-align: right">
                <tr>
                    <td># 1, STV Nagar, Avinashi Road, Peelamedu, Coimbatore - 641 004</td>
                </tr>
                <tr>
                    <td>Tel: +91 422 4399233, Mobile: +91 952 4399233</td>
                </tr>
                <tr>
                    <td>Email: sales@roghini.com, Website: www.roghini.com</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="text-align: center; font-weight: bold; font-size: 18px">
            QUOTATION / PROFORMA
        </td>
    </tr>
</table>

<table class="border" style="margin-top: 1%; font-size: 12px">
    <tr>
        <td width="60%">
            <table>
                <tr>
                    <td width="30%"><strong>Customer Name :</strong></td>
                    <td width="50%">{{ $master->Customer_Name }}</td>
                </tr>
                <tr>
                    <td width="30%"><strong>Customer Address :</strong></td>
                    <td width="50%">{{ $master->Customer_Address }}</td>
                </tr>
                <tr>
                    <td width="30%"><strong>Kind Attention :</strong></td>
                    <td width="50%">{{ $master->Customer_Contact }}</td>
                </tr>
                <tr>
                    <td width="30%"><strong>Phone Number :</strong></td>
                    <td width="50%">{{ $master->Customer_Phone_Number }}</td>
                </tr>
                <tr>
                    <td width="30%"><strong>GST No :</strong></td>
                    <td width="50%">{{ $master->Customer_GSTIN }}</td>
                </tr>
            </table>
        </td>
        <td width="40%" style="border-left: 1px solid black">
            <table>
                <tr>
                    <td width="50%" class="border-bottom"><strong>OUR GST No :</strong></td>
                    <td width="50%" class="border-bottom"><strong>{{ $master->Customer_GSTIN }}</strong></td>
                </tr>
                <tr>
                    <td width="50%"><strong>Quote Number :</strong></td>
                    <td width="50%">{{ $master->Quote_Number }}</td>
                </tr>
                <tr>
                    <td width="50%"><strong>Quote Date :</strong></td>
                    <td width="50%">{{ $master->Quote_Date }}</td>
                </tr>
                <tr>
                    <td width="50%"><strong>Quote Validity :</strong></td>
                    <td width="50%">{{ $master->Quote_Validity }}</td>
                </tr>
                <tr>
                    <td width="50%"><strong>Prepared By :</strong></td>
                    <td width="50%">{{ $master->Prepared_By }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table style="margin-top: 8px">
    <tr>
        <td style="padding-left: 3%; font-size: 15px; font-weight: bold">Dear Sir/ Madam,</td>
    </tr>
    <tr>
        <td style="padding-left: 3%">Please find our best prices quoted for the products mentioned below.</td>
    </tr>
</table>

<table class="border content-table">
    <thead>
    <tr style="background-color: #D8D8D8">
        <td><div class="tbl-head">Specification</div></td>
        <th><div class="tbl-head">Description</div></th>
        <th><div class="tbl-head">Qty</div></th>
        <th><div class="tbl-head">UOM</div></th>
        <th><div class="tbl-head">Unit Price</div></th>
        <th><div class="tbl-head">Disc</div></th>
        <th><div class="tbl-head">Net Price</div></th>
    </tr>
    </thead>
    <tbody class="body-height">
        @foreach($details as $k => $v)

            @if($k == $count -1)
                <tr>
                    <td  class='pad-left custom-height' style="height: {{ $bodyheight }}px">{{ $v->Specification }}</td>
                    <td class='pad-left custom-height'  style="height: {{ $bodyheight }}px">{{ $v->Description }}</td>
                    <td class='text-right custom-height' style="height: {{ $bodyheight }}px">{{ $v->Quantity }}</td>
                    <td class='text-right custom-height' style="height: {{ $bodyheight }}px">{{ $v->UOM }}</td>
                    <td class='text-right custom-height' style="height: {{ $bodyheight }}px">{{ $v->Unit_Price }}</td>
                    <td class='text-right custom-height' style="height: {{ $bodyheight }}px">{{ $v->Discount }}</td>
                    <td class='text-right custom-height' style="height: {{ $bodyheight }}px">{{ $v->Net_Price }}</td>
                </tr>
            @else
                <tr>
                    <td  class='pad-left'>{{ $v->Specification }}</td>
                    <td class='pad-left'>{{ $v->Description }}</td>
                    <td class='text-right'>{{ $v->Quantity }}</td>
                    <td class='text-right'>{{ $v->UOM }}</td>
                    <td class='text-right'>{{ $v->Unit_Price }}</td>
                    <td class='text-right'>{{ $v->Discount }}</td>
                    <td class='text-right'>{{ $v->Net_Price }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

<table class="border" style="font-size: 14px">
    <tr>
        <td width="80%">
        </td>
        <td width="20%">
            <table>
                <tr>
                    <td width="70%" style="text-align: center; font-weight: bold">Total :</td>
                    <td width="30%" style="text-align: center"> {{ $master->Total }}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="50%">
            <table>
                <tr>

                    <td class="fontbold">Contact Person :</td>
                    <td>{{ $master->Engineer_Name }}</td>
                </tr>
                <tr>

                    <td class="fontbold">Designation :</td>
                    <td>{{ $master->Designation }}</td>
                </tr>
                <tr>

                    <td class="fontbold">Email ID :</td>
                    <td>{{ $master->Email }}</td>
                </tr>
            </table>
        </td>
        <td width="50%">
        </td>
    </tr>
    <tr>
        <td width="80%">
        </td>
        <td width="20%" style="border-top: 1px solid black">
            <table>
                <tr>
                    <td width="70%" style="text-align: center; font-weight: bold">Grand Total :</td>
                    <td width="30%" style="text-align: center">{{ $master->Final_Total }}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="border" style="font-size: 14px">
    <tr>
        <td width="70%">
        </td>
        <td width="30%" style="border-left: 1px solid black; padding-left: 15px">
            <table>
                <tr>
                    <td style="font-size: 13px">For <strong>Roghini Minerva Engineers</strong></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="70%">
            <table>
                <tr>
                    <td class="fontbold">Delivery Terms :</td>
                    <td>{{ $master->Delivery_Terms }}</td>
                </tr>
                <tr>
                    <td class="fontbold">Payment Terms :</td>
                    <td>{{ $master->Payment_Terms }}</td>
                </tr>
                <tr>
                    <td class="fontbold">Packing and Forwarding :</td>
                    <td>{{ $master->Packing_and_Forwarding }}</td>
                </tr>
                <tr>
                    <td class="fontbold">Remarks :</td>
                    <td>{{ $master->Remarks }}</td>
                </tr>
            </table>
        </td>
        <td width="30%" style="border-left: 1px solid black">
        </td>
    </tr>
    <tr>
        <td width="70%">
        </td>
        <td width="30%" style="border-left: 1px solid black; padding-left: 15px">
            <table>
                <tr>
                    <td style="font-size: 13px"><strong>Authorised Signatory</strong></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<div style="margin-top: 1%; width: 100%; height: 10px; background-color: black"></div>
<div style="width: 100%; height: 10px; background-color: green"></div>
</body>
</html>
