<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalAddProduct" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Register Product</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label class="">Name</label>
                            <input type="text" placeholder="Enter name"class="form-control" id="name">
                        </div>
                    <div class="form-group">
                        <label class="">Price per Unit</label>
                            <input type="text" placeholder="Enter price per unit"class="form-control" id="pu">
                        </div>
                    <div class="form-group">
                        <label class="">Available Quantity</label>
                            <input type="text" placeholder="Available Quantity"class="form-control" id="avQty">
                        </div>
                </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                            <input type="button" class="btn btn-success pull-right" id="btnSaveProduct" value="Save">  
                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                        </div>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->