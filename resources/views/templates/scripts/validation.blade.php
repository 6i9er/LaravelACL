<script type="text/javascript" src="{{ url('plugins/parsleyjs/parsley.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#addGroupPermissions_form").parsley();
        $("#addPermissions_form").parsley();
        // add new Group Permission
        $("#addGroupPermissions_form").on('submit', function(event) {
            // validate form with parsley.
            $(this).parsley().validate();
            // if this form is valid
            if ($(this).parsley().isValid()) {
                // show alert message
                saveAddGroupPermissions()
            }
            // prevent default so the form doesn't submit. We can return true and
            // the form will be submited or proceed with a ajax request.
            event.preventDefault();
        });
        $("#addPermissions_form").on('submit', function(event) {
            $(this).parsley().validate();
            if ($(this).parsley().isValid()) {
                saveAddPermission()
            }
            event.preventDefault();
        });
    });
</script>