<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Upload a new template</h4>
            </div>
            <div class="modal-body">
                <?php

                $attributes = array(
                  'class' => 'form-horizontal'
                );
                echo form_open_multipart('dashboard/add_template', $attributes);
                ?>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Group name</label>
                        <div class="col-lg-10">
                            <input type="text" placeholder="Enter the template name"class="form-control" name="template">
                        </div>
                    </div>
                    

                <div class="form-group">
                    <label class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" name="desc" rows="5" placeholder="Template Description"></textarea>
                    </div>
                </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <input type="submit" class="btn btn-upload" value="Save Template">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->