<!-- The Modal -->
<div class="modal" id="newusers">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="pass-update" method="post" action="{{ URL::to('/dashboard/users/store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control validate[required]" name="name" id="name" placeholder="Enter the Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control validate[required]" name="email" id="email" placeholder="Enter the Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control validate[required]" id="pass" name="pass" placeholder="Enter the Password">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control validate[required,equals[pass]]" id="cpass" name="cpass" placeholder="Enter the Confirm Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Submit</button>
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

<!-- The Modal -->
<div class="modal" id="editusers">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form id="pass-update" method="post" action="{{ URL::to('/dashboard/users/update') }}">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="hidden" id="uid" name="uid">
                        <input type="text" class="form-control validate[required]" name="name_edit" id="name_edit" placeholder="Enter the Name">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control validate[required]" name="email_edit" id="email_edit" placeholder="Enter the Email">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control validate[required]" id="pass_edit" name="pass_edit" placeholder="Enter the Password">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control validate[required,equals[pass_edit]]" id="cpass_edit" name="cpass_edit" placeholder="Enter the Confirm Password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Update</button>
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
