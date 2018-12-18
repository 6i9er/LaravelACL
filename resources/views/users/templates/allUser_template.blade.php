<tr>
    <td>
        1
    </td>

    <td >Mina Amir</td>

    <td>
        eng.mina23@gmail.com
    </td>
    <td>
        6i9er
    </td>
    <td>
        <span class="label label-danger">Blocked</span>
    </td>
    <td class="text-center">
        <a  href="javascript:void(0)" onclick='editUser("1")'  class="table-action-btn"><i class="md md-edit"></i></a>
        <a  href="javascript:void(0)" go-href="http://wwww.google.com" id="resetPassword_1" show-msg="are you sure you want to reset this user password ??" onclick='confirmAction("resetPassword_1")'  class="table-action-btn"><i class="md md-track-changes"></i></a>
        {{--<a  href="javascript:void(0)" go-href="http://wwww.google.com"  id="blockPassword_1" show-msg="are you sure you want to block this user  ??" onclick='confirmAction("blockPassword_1")'  class="table-action-btn"><i class="glyphicon glyphicon-ban-circle"></i></a>--}}
        <a  href="javascript:void(0)" go-href="http://wwww.google.com"  id="blockPassword_1" show-msg="are you sure you want to block this user  ??" onclick='confirmAction("blockPassword_1")'  class="table-action-btn"><i class="md  md-lock-outline"></i></a>
        {{--        <a  href="{{route('userPermissions',$user->uuid)}}"   target="_blank" class="table-action-btn"><i class="md  icon-eye"></i></a>--}}
        {{--<a href="javascript:void(0)" class="table-action-btn"><i class="md md-close"></i></a>--}}
        {{--<input id="status_{{$account->uuid}}" type="checkbox" @if($account->status != "0")checked @endif onchange="changeStatus('{{$account->uuid}}')" data-plugin="switchery"  data-color="#98a6ad"/>--}}
    </td>
</tr>


<tr>
    <td>
        1
    </td>

    <td >Mina Amir</td>

    <td>
        eng.mina23@gmail.com
    </td>
    <td>
        6i9er
    </td>
    <td>
        <span class="label label-success">Active</span>
    </td>
    <td class="text-center">
        <a  href="javascript:void(0)" onclick='editUser("1")'  class="table-action-btn"><i class="md md-edit"></i></a>
        <a  href="javascript:void(0)" go-href="http://wwww.google.com" id="resetPassword_1" show-msg="are you sure you want to reset this user password ??" onclick='confirmAction("resetPassword_1")'  class="table-action-btn"><i class="md md-track-changes"></i></a>
        {{--<a  href="javascript:void(0)" go-href="http://wwww.google.com"  id="blockPassword_1" show-msg="are you sure you want to block this user  ??" onclick='confirmAction("blockPassword_1")'  class="table-action-btn"><i class="glyphicon glyphicon-ok-circle"></i></a>--}}
        <a  href="javascript:void(0)" go-href="http://wwww.google.com"  id="blockPassword_1" show-msg="are you sure you want to block this user  ??" onclick='confirmAction("blockPassword_1")'  class="table-action-btn"><i class="md  md-lock"></i></a>
        <a  href="javascript:void(0)" go-href="http://wwww.google.com" title="assign Permission" onclick='viewModalAction("selectPermissions_modal")'  class="table-action-btn"><i class="md  md-local-hospital "></i></a>
        <a  href="javascript:void(0)" go-href="http://wwww.google.com" title="assign to hospital and clinic"   onclick='viewModalAction("selectHospitalsClinics_modal")'  class="table-action-btn"><i class="md  md-keyboard"></i></a>
        {{--        <a  href="{{route('userPermissions',$user->uuid)}}"   target="_blank" class="table-action-btn"><i class="md  icon-eye"></i></a>--}}
        {{--<a href="javascript:void(0)" class="table-action-btn"><i class="md md-close"></i></a>--}}
        {{--<input id="status_{{$account->uuid}}" type="checkbox" @if($account->status != "0")checked @endif onchange="changeStatus('{{$account->uuid}}')" data-plugin="switchery"  data-color="#98a6ad"/>--}}
    </td>
</tr>