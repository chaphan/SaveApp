<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalAddMember" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Saving Group</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                        <label class="">Firstname</label>
                            <input type="text" placeholder="Enter First  name"class="form-control" name="fname">
                        </div>
                        <div class="form-group">
                        <label class="">Lastname</label>
                            <input type="text" placeholder="Enter Last name"class="form-control" name="lname">
                        </div>
                        <div class="form-group">
                        <label class="">DOB</label>
                            <input type="date" placeholder="Enter NID"class="form-control" name="lname">
                        </div>
                        <label class="checkbox-inline">
                                Male<input type="radio" name="optionsRadiosinline" id="optionsRadios1"
                                value="option1" checked>  
                                Female<input type="radio" name="optionsRadiosinline" id="optionsRadios2"
                                value="option1" checked> 
                                </label>
                        <div class="form-group">
                        <label class="">NID</label>
                            <input type="text" placeholder="Enter NID"class="form-control" name="Nid">
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