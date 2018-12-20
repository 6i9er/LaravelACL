
<div class="modal fade" id="addGroupPermission_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('permissions.Group Permission Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form role="form" id="addGroupPermissions_form" data-parsley-validate novalidate>
                            <input id="addGroupPermission_uuid" type="hidden" value="">

                            <div class="form-group">
                                <label for="name">{{ trans('permissions.Name ar') }}</label>
                                <input type="text" class="form-control"
                                       parsley-trigger="change" required
                                       id="addGroupPermission_nameAr" placeholder="{{ trans('permissions.enter Name ar') }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{ trans('permissions.Name en') }}</label>
                                <input type="text"  class="form-control"
                                       parsley-trigger="change" required
                                       id="addGroupPermission_nameEn" placeholder="{{ trans('permissions.enter name en') }}">
                            </div>


                            <div class="row">
                                <div class="col-sm-12" id="addGroupPermission_errors">

                                </div>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-default waves-effect waves-light ">{{ trans('permissions.save') }}</button>
                                <button type="button" data-dismiss="modal"  class="btn btn-danger waves-effect waves-light m-l-10">{{ trans('permissions.cancel') }}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

