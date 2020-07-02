<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Buyer Detail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                    <div class="form-group">
                    <label for="u_name">Company Name</label>
                     <input type="text" name="cname" id="cname" class="form-control"
                           value="" >
                </div>


                    <div class="form-group">
                        <label for="u_name">Contact Person</label>


                        <input type="text" name="contact_person" id="contact_person" class="form-control"
                               value="" >
                    </div>
                <div class="form-group">
                    <label for="u_name">Description</label>
                      <textarea  name="description" id="description" class="form-control"
                               value="" ></textarea>
                </div>
                <div class="form-group">
                    <label for="u_name">Address</label>
                    {{--<input type="text" name="u_id" id="u_id">--}}

                    <textarea  name="address" id="address" class="form-control"
                               value="" ></textarea>
                </div>
                    <div class="form-group">
                        <label for="u_name">Phone</label>

                        <input type="text" name="phone" id="phone" class="form-control"
                               value="" >
                    </div>
                <div class="form-group">
                    <label for="u_name">Fax</label>

                    <input type="text" name="fax" id="fax" class="form-control"
                           value="" >
                </div>
                    <div class="form-group">
                        <label for="u_email">Email</label>
                        <input type="text" name="email" id="email" class="form-control"
                               value="" >
                    </div>
                <div class="form-group">
                    <label for="u_email">Website</label>
                    <input type="text" name="website" id="website" class="form-control"
                           value="" >
                </div>





            </div>



            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
