<!-- The Modal -->
<style>
    table {
        border-collapse:separate;
        border-spacing:10px 10px;
    }
</style>

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Enquiry Detail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

<table width="100%" class="table-responsive" BORDER="1" style="margin-top: -0.25rem !important;" >


    <tr>
        <td width="30%">Name </td>
        <td>
            <p id="full-name"> </p>
        </td>
    </tr>

    <tr>
        <td width="30%">Email</td>
        <td>
           <p id="email_id"> </p>
        </td>
    </tr>
    <tr>
        <td width="30%">Phone #
        </td>
        <td>
            <p id="phone_no"> </p>
        </td>
    </tr>
    <tr>
        <td width="30%">
            Message
        </td>
        <td>
            <textarea id="messge" rows="6" cols="20"></textarea>
        </td>
    </tr>

</table>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
