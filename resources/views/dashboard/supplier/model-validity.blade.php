<!-- The Modal -->
<style>
    table {
        border-collapse:separate;
        border-spacing:10px 10px;
    }
</style>

<div class="modal" id="validityModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Extent Validity</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <form action="{{ URL::to('dashboard/buyer/validityextent') }}" method="post">
                @csrf

                    <input type="hidden" name="sup-id" id="sup-id"  >
                    <input name="ex-days" id="ex-days" class="form-control" >

                            <button class=" form-control btn btn-primary pull-right">Save</button>


                </form>









            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
