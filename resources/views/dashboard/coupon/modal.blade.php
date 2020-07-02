<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit Coupon</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">


                <form action="{{ URL::to('dashboard/coupon/updatesave') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="u_name">Name</label>
                        {{--<input type="text" name="u_id" id="u_id">--}}
                        <input type="hidden" id="id" name="id">
                        <input type="text" name="name" id="name" class="form-control"
                               value="" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="u_name">Mobile Number</label>

                        <input type="text" name="mobile" id="mobile" class="form-control"
                               value="" placeholder="Enter Mobile Number">
                    </div>
                    <div class="form-group">
                        <label for="u_email">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                               value="" placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <label for="u_email">Comments</label>
                        <textarea name="comments" id="comments" class="form-control"
                                  value="" placeholder="Comments"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary pull-right">Update</button>
                    </div>
                </form>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
