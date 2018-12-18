<div class="modal fade" id="addUser_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">{{ trans('users.User Data') }}</h4>

            </div>
            <div class="container"></div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <label for="name">{{ trans('users.Name ') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ trans('users.enterName') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ trans('users.Email') }}</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('users.enterEmail') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ trans('users.username') }}</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('users.enterUsername') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ trans('users.password') }}</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{ trans('users.enterUserPassword') }}">
                    </div>

                    <div class="form-group">
                        <label for="position">{{ trans('users.Choose User type') }}</label>
                        <select class="form-control" tabindex="-1" aria-hidden="true">


                            <option>{{ trans('users._select_') }}</option>
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
