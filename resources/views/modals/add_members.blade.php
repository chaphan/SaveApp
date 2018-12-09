<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="modalAddMember" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Register Group Members</h4>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data" action=""><input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                    <div id="regMemberResponse"></div>
                        <div class="form-group">
                        <label class="">Names</label>
                            <input type="text" placeholder="Enter Last name"class="form-control" name="memberNames" id="memberNames">
                        </div>
                        <div class="form-group">
                        <label class="">NID</label>
                            <input type="text" placeholder="Enter NID name"class="form-control" name="lname" id="memberNid">
                        </div>

                <div class="form-group">
                    <label>Parent ID if is Child</label>
                        <input type="text" placeholder="Enter NID name" class="form-control" name="parentnid">
                </div>
                </form>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                            <input type="button" class="btn btn-success pull-right" id="btnSaveMember" value="Save">  
                            <input type="button" class="btn btn-danger" data-dismiss="modal" id="btnSaveSaving" value="Cancel">
                        </div>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->