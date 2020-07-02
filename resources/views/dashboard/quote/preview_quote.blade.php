<style>
    @media (min-width: 768px) {
        .modal-xl {
            width: 90%;
            max-width:1200px;
        }
    }
    .row{
        margin-left: 0 !important;
        margin-right: 0 !important;
        color: black;
    }
    .no-margin {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    .no-padding {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    .footer {
        bottom: 0 !important;
    }
    .border {
        border: 1px solid black !important;
    }
</style>
<!-- The Modal -->
<div class="modal" id="preview-print">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Preview</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="body-content">
            </div>
            <div id="editor"></div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
