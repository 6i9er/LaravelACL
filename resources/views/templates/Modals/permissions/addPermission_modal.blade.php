 <div class="modal fade" id="addPermission_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('permissions.Permission Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form" id="addPermissions_form" data-parsley-validate novalidate>
                    <input type="hidden" id="addPermission_uuid">
                    <div class="row">
                        <div class="col-sm-12 text-right" >
                            <a  onclick="viewListGroupPermissionModal()"   class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.List All Group Permissions') }}</a>
                            <a  onclick="viewAddGroupPermissionModal()"  class="btn btn-default btn-md waves-effect waves-light m-b-30" ><i class="md md-list"></i>{{ trans('permissions.add Group Permissions') }}</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">{{ trans('permissions.Name ar') }}</label>
                        <input parsley-trigger="change" required type="text" class="form-control" id="addPermission_nameAr" placeholder="{{ trans('permissions.Enter Name ar') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ trans('permissions.Name en') }}</label>
                        <input  parsley-trigger="change" required type="text" class="form-control" id="addPermission_nameEn" placeholder="{{ trans('permissions.Name en') }}">
                    </div>

                    <div class="form-group">
                        <label for="position">{{ trans('permissions.Choose Group Permission') }}</label>
                        <select class="form-control" tabindex="-1" id="addPermission_chooseModule"
                                parsley-trigger="change" data-parsley-type="integer" data-parsley-min="1"
                                aria-hidden="true">


                            <option value="0">{{ trans('permissions._select_Module') }}</option>
                            @foreach(\App\Enums\PermissionEnums::$permissionsModuleName as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-sm-12" id="addPermission_errors">

                        </div>
                    </div>

                    <button type="submit" class="btn btn-default waves-effect waves-light">{{ trans('permissions.save') }}</button>
                    <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                </form>
            </div>

        </div>
    </div>
</div>
