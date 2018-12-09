<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Saving Group</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <input type="hidden" id="token" name="_token" value="<?php echo csrf_token() ?>">
                    <div id="regGroupResponse"></div>
                    <div class="form-group">
                        <label class="">GroupName</label>
                            <input type="text" id="names" placeholder="Enter Group name"class="form-control" name="template">
                        </div>
                </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                            <input type="button" class="btn btn-success pull-right" id="btnSaveGroup" value="Save">  
                            <input type="button" class="btn btn-danger" data-dismiss="modal" id="btnSaveSaving" value="Cancel">
                        </div>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->