<!--Modal -->
<div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="modalFundProject" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Fund Project</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label class="">Supporter</label>
                            <input type="text" placeholder="Enter name"class="form-control" id="supporterName">
                        </div>
                    <div class="form-group">
                        <label class="">Amount</label>
                            <input type="text" placeholder="Enter price per unit"class="form-control" id="amount">
                        </div>
                </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                            <input type="button" class="btn btn-success pull-right" id="btnSaveFund" value="Save">  
                            <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
                        </div>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal