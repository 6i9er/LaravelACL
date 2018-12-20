<?php
namespace App\Enums;


abstract class PermissionEnums
{
//    const  supperAdminType = "1",
//        emloyeeType = "2",
//        clientType = "3",
//        accountOwnerType = "4",
//        activeStatus = "1",
//        blockedStats= "0";


    public static $permissionsModuleName = array(
        '1' => 'users',
        '2' => 'permissions',
        '3' => 'group permissions',
        '4' => 'hospitals',
        '5' => 'clinics',
        );

    public static $savePermissionRules = array(
        'name_ar' => 'required',
        'name_en' => 'required',
        'permission_uuid' => 'required',
        'module_id' => 'required|numeric',
    );


}