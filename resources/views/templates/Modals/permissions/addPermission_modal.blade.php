 <div class="modal fade" id="addPermission_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('permissions.Permission Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form">
                    <div class="row">
                        <div class="col-sm-12 text-right" >
                            <a  onclick="viewListGroupPermissionModal()"   class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.List All Group Permissions') }}</a>
                            <a  onclick="viewAddGroupPermissionModal()"  class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.add Group Permissions') }}</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('permissions.Name ar') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ trans('permissions.Enter Name ar') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ trans('permissions.Name en') }}</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('permissions.Name en') }}">
                    </div>

                    <div class="form-group">
                        <label for="position">{{ trans('permissions.Choose Group Permission') }}</label>
                        <select class="form-control" tabindex="-1" aria-hidden="true">


                            <option>{{ trans('permissions._select_') }}</option>
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>
