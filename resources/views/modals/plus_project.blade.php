<!-- Modal -->
<div aria-hidden="true" aria-labelledby="modalFundProject" role="dialog" tabindex="-1" id="modalFundProject" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                 <h4 class="modal-title">Fund Project</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label class="">Name</label>
                            <input type="text" placeholder="Enter name"class="form-control" id="name">
                        </div>
                        <div class="form-group">
                        <label class="">Capital</label>
                            <input type="text" placeholder="Capital needed to start business"class="form-control" id="capital">
                        </div>
                        <div class="form-group">
                        <label class="">Available</label>
                            <input type="text" placeholder="Enter amount you own"class="form-control" id="availableAmount">
                        </div>
                        <div class="form-group">
                        <label class="">Attachment/Short video</label>
                            <input type="file" class="form-control" id="file">
                        </div>
                        <div class="form-group">
                        <label class="">Description</label>
                            <textarea placeholder="Describe your idea to impress investors" class="form-control" id="descr"></textarea>
                        </div>
                </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                            <input type="button" class="btn btn-success pull-right" id="btnSaveProject" value="Save">  
                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                        </div>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->