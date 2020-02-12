@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        {{--<example></example>--}}

        <div class="col-xs-12 ">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-home"></i> {{ trans('navs.general.home') }}
                </div>

                <div class="panel-body">
                    {{ trans('strings.frontend.welcome_to', ['place' => app_name()]) }}
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        @role('Administrator')
        {{-- You can also send through the Role ID --}}

        {{--<div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading"><i
                            class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_blade_extensions') }}
                </div>

                <div class="panel-body">
                    {{ trans('strings.frontend.test') . ' 1: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->--}}
        @endauth

        {{-- @if (access()->hasRole('Administrator'))
             <div class="col-xs-12">

                 <div class="panel panel-default">
                     <div class="panel-heading"><i
                                 class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.role_name') }}
                     </div>

                     <div class="panel-body">
                         {{ trans('strings.frontend.test') . ' 2: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                     </div>
                 </div><!-- panel -->

             </div><!-- col-md-10 -->
         @endif--}}

        {{--@if (access()->hasRole(1))
            <div class="col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading"><i
                                class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.role_id') }}
                    </div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 3: ' . trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif--}}

        @if (access()->hasRoles(['Administrator', 1]))
            <div class="col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading"><i
                                class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.array_roles_not') }}
                    </div>

                    <div class="panel-body">
                        <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Project Name</th>
                                <th>Details</th>
                                <th width="280px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="modal fade" id="ajaxModel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="modelHeading"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <form id="productForm" name="productForm" class="form-horizontal">
                                            <input type="hidden" name="product_id" id="product_id">
                                            <div class="form-group">
                                                <label for="name" class="col-sm-2 control-label">Project Name</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="name" name="name"
                                                           placeholder="Enter Name" value="" maxlength="50" required="">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">Details</label>
                                                <div class="col-sm-12">
                                                    <textarea id="detail" name="detail" required=""
                                                              placeholder="Enter Details"
                                                              class="form-control"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary" id="saveBtn"
                                                        value="create">Save changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        {{-- The second parameter says the user must have all the roles specified. Administrator does not have the role with an id of 2, so this will not show. --}}
        {{--@if (access()->hasRoles(['Administrator', 2], true))
            <div class="col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading"><i
                                class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.role') . trans('strings.frontend.tests.using_access_helper.array_roles') }}
                    </div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.tests.you_can_see_because', ['role' => trans('roles.administrator')]) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif--}}

        {{--@permission('view-backend')
        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading"><i
                            class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.permission_name') }}
                </div>

                <div class="panel-body">
                    {{ trans('strings.frontend.test') . ' 5: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view-backend']) }}
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->
        @endauth--}}

        {{--        @if (access()->hasPermission(1))
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading"><i
                                        class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.permission_id') }}
                            </div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.test') . ' 6: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif--}}

        @if (access()->hasPermissions(['view-backend', 1]))
            <div class="col-xs-12">

                <div class="panel panel-default">
                    <div class="panel-heading"><i
                                class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.array_permissions_not') }}
                    </div>

                    <div class="panel-body">
                        {{ trans('strings.frontend.test') . ' 7: ' . trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                    </div>
                </div><!-- panel -->

            </div><!-- col-md-10 -->
        @endif

        {{--        @if (access()->hasPermissions(['view-backend', 2], true))
                    <div class="col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading"><i
                                        class="fa fa-home"></i> {{ trans('strings.frontend.tests.based_on.permission') . trans('strings.frontend.tests.using_access_helper.array_permissions') }}
                            </div>

                            <div class="panel-body">
                                {{ trans('strings.frontend.tests.you_can_see_because_permission', ['permission' => 'view_backend']) }}
                            </div>
                        </div><!-- panel -->

                    </div><!-- col-md-10 -->
                @endif--}}

        {{--<div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Bootstrap
                    Glyphicon {{ trans('strings.frontend.test') }}</div>

                <div class="panel-body">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-euro" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-cloud" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon glyphicon-envelope" aria-hidden="true"></span>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading"><i class="fa fa-home"></i> Font Awesome {{ trans('strings.frontend.test') }}
                </div>

                <div class="panel-body">
                    <i class="fa fa-home"></i>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-pinterest"></i>
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->--}}

    </div><!--row-->
@endsection
@section('after-scripts')

    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

<script>
    $(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('frontend.projects.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'detail', name: 'detail'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $('#createNewProduct').click(function () {
            $('#saveBtn').val("create-product");
            $('#product_id').val('');
            $('#productForm').trigger("reset");
            $('#modelHeading').html("Create New Product");
            $('#ajaxModel').modal('show');
        });

        $('body').on('click', '.editProduct', function () {
            var product_id = $(this).data('id');
            $.get("{{ route('frontend.projects.index') }}" +'/' + product_id +'/edit', function (data) {
                $('#modelHeading').html("Edit Product");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#product_id').val(data.id);
                $('#name').val(data.name);
                $('#detail').val(data.detail);
            })
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            $(this).html('Sending..');

            $.ajax({
                data: $('#productForm').serialize(),
                url: "{{ route('frontend.projects.store') }}",
                type: "POST",
                dataType: 'json',
                success: function (data) {console.log(data);

                    $('#productForm').trigger("reset");
                    $('#ajaxModel').modal('hide');
                    table.draw();

                },
                error: function (data) {
                    console.log('Error:', data);
                    $('#saveBtn').html('Save Changes');
                }
            });
        });

        $('body').on('click', '.deleteProduct', function () {

            var product_id = $(this).data("id");
            confirm("Are You sure want to delete !");

            $.ajax({
                type: "DELETE",
                url: "{{ route('frontend.projects.store') }}"+'/'+product_id,
                success: function (data) {
                    table.draw();
                },
                error: function (data) {
        