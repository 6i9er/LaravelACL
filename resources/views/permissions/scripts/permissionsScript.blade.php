
<script>
    $(document).ready(function(){

    });

    /**
     * reload all permissions
     */
    function reloadAllPermissions(){
        alert("reload all the permissions");
    }

    /**
     * reload all permissions
     */
    function reloadAllGroupPermissions(){
        alert("reload all the Group permissions");
    }



    function dublicatePermission(permissionUUID = 0){
        if (confirm( "{{ trans('permissions.areYouSureYouWantToDublicateThisRow !!') }}")) {
            dublicatePermissionRow(permissionUUID)
        }
    }

    function dublicateGroupPermission(groupPermissionUUID = 0){
        if (confirm( "{{ trans('permissions.areYouSureYouWantToDublicateThisRow !!') }}")) {
            dublicateGroupPermissionRow(groupPermissionUUID)
        }
    }


    function dublicateGroupPermissionRow(id) {
        alert("this Group Row Dublicated");
    }
    function dublicatePermissionRow(id) {
        alert("this Permission Row Dublicated");
    }

    function editPermission(permissionUUID = 0){
        //get Data By Ajax
        viewModalAction("addPermission_modal");
    }

    function editGroupPermission(permissionUUID = 0){
        //get Data By Ajax
        viewModalAction("addGroupPermission_modal");
    }


    /**
     * View All Modals
     */
    function viewListGroupPermissionModal() {
        viewModalAction("allGroups_modal");
    }

    function viewAddGroupPermissionModal() {
        viewModalAction("addGroupPermission_modal");
    }
    function viewAddPermissionModal() {
        viewModalAction("addPermission_modal");
    }
</script>