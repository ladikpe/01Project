<div class="modal fade in modal-3d-flip-horizontal modal-info" id="changeLoginStatusModal" aria-hidden="true" aria-labelledby="changeLoginStatusModal" role="dialog" tabindex="-1">
	    <div class="modal-dialog ">
	      <form class="form-horizontal" id="changeLoginStatusForm"  >
	        <div class="modal-content">
	        <div class="modal-header" >
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title" id="training_title">Change User Login Status</h4>
	        </div>
            <div class="modal-body">
                <div class="row row-lg col-xs-12">
                  <div class="col-xs-12">
                  	@csrf
                  	<div class="form-group">
                  		<h4 class="example-title">Status</h4>
                  		<select id="login_status_id" name="login_status_id" class="form-control">
                       <option value="0" >InActive</option>
                        <option value="1" >Active</option>
                      </select>
                  	</div>


                  </div>
                  <div class="clearfix hidden-sm-down hidden-lg-up"></div>
                </div>
            </div>
            <div class="modal-footer">
              <div class="col-xs-12">

                  <div class="form-group">

                    <button type="button" id="changeLoginStatus" class="btn btn-info pull-left">Save</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                  </div>
                  <!-- End Example Textarea -->
                </div>
             </div>
	       </div>
	      </form>
	    </div>
	  </div>
