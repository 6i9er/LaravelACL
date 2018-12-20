<script>


    $(document).ready(function(){

    });

    function saveAddPermission(){

        var formData = new FormData();
        formData.append('_token' , "{{ csrf_token() }}" )
        formData.append('name_ar' , $("#addPermission_nameAr").val() )
        formData.append('name_en' , $("#addPermission_nameEn").val() )
        formData.append('module_id' , $("#addPermission_chooseModule").val() )
        formData.append('permission_uuid' , ($("#addGroupPermission_uuid").val()) ? $("#addGroupPermission_uuid").val() : 0 )
        $.ajax({
            url:  "{{ route('savePermission') }}",
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
                if(data['errors'] == "1"){
                    $("#addPermission_errors").html(data['msg'])
                }else{
                    $("#addPermission_errors").html('');
                }
            }
        });
        // alert("save  Permission will be start from here");
    }

</script>
