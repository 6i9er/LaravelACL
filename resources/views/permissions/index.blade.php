@extends('layouts.app')

@section('content')


            @include('templates.breadcrumb' , [
                'pageTitle' => trans('permissions.permissions'),
                'links' => array(
                    trans('permissions.permissions') => route('permissions'),
                    trans('permissions.allPermissions') => "" ,
                )
            ])


{{-- page Content --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-12 text-right">

                                    <a onclick="viewAddPermissionModal()"
                                       class="btn btn-default btn-md waves-effect waves-light m-b-30"

                                    ><i class="md md-add"></i>{{ trans('permissions.Add Permission') }}</a>
                                    <a onclick="viewListGroupPermissionModal()"class="btn btn-default btn-md waves-effect waves-light m-b-30" >
                                        <i class="md md-list"></i>{{ trans('permissions.List All Group Permissions') }}</a>
                                    <a onclick="viewAddGroupPermissionModal()"class="btn btn-default btn-md waves-effect waves-light m-b-30" >
                                        <i class="md md-list"></i>{{ trans('permissions.Add Group Permissions') }}</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                    <tr>
                                        <th >#</th>
                                        <th>{{ trans('permissions.nameEn') }}</th>
                                        <th>{{ trans('permissions.nameAr') }}</th>
                                        <th>{{ trans('permissions.group') }}</th>
                                        <th style="min-width: 90px;">{{ trans('permissions.action') }} <a href="javascript:void(0)" onclick="reloadAllPermissions()" class="table-action-btn"><i class="md md-refresh"></i></a></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @include('permissions.templates.allPermissions_template')
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div> <!-- end col -->

                </div>

@endsection
@section('modals')
    @include('templates.Modals.permissions.addPermission_modal')
    @include('templates.Modals.permissions.listAllGroupPermissions_modal')
    @include('templates.Modals.permissions.addGroupPermissions_modal')
@endsection

@section('scripts')
    {{--
    listAllGroupPermission
        0- dont open any models
        1- open After Finish Modal
    --}}
    @include('permissions.scripts.permissionsScript')
    @include('permissions.scripts.addPermissionsScript')
    @include('permissions.scripts.addGroupPermissionsScript')
    @include('templates.scripts.modals')
    @include('templates.scripts.validation')
@endsection

@section('styles')
@endsection