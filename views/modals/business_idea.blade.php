<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Saving Group</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                        <label class="">BusinessName</label>
                            <input type="text" placeholder="Enter Business name"class="form-control" name="template">
                </div>
                <div class="form-group">
                        <label class="">MinimumAmount</label>
                            <input type="text" placeholder="Enter MinimumAmount"class="form-control" name="template">
                </div>
                <div class="form-group">
                        <label class="">Maximum Amount</label>
                            <input type="text" placeholder="Enter Maximum Amount"class="form-control" name="template">
                </div>

                
                
                <div class="form-group">
                    <label>Business Idea</label>
                        <textarea class="form-control" name="desc" rows="5" placeholder="Enter Business Idea"></textarea>
                </div>
                </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                            <input type="button" class="btn btn-success pull-right" id="btnSaveSaving" value="Save">  
                            <input type="button" class="btn btn-danger" data-dismiss="modal" id="btnSaveSaving" value="Cancel">
                        </div>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->