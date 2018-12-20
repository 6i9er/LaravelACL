<script>


    $(document).ready(function(){

    });

    function saveAddGroupPermissions(){
        var formData = new FormData();
        formData.append('_token' , "{{ csrf_token() }}" )
        formData.append('name_ar' , $("#addGroupPermission_nameAr").val() )
        formData.append('name_en' , $("#addGroupPermission_nameEn").val() )
        formData.append('group_permission_uuid' , ($("#addGroupPermission_uuid").val()) ? $("#addGroupPermission_uuid").val() : 0 )
        $.ajax({
            url:  "{{ route('addGroupPermission') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                if(data['errors'] == "1"){
                    $("#addGroupPermission_errors").html(data['msg'])
                }else{
                    $("#addGroupPermission_errors").html('');
                }
            }
        });
        // alert("save Group Permission will be start from here");
    }

</script>
