<div class="main-content banner-section">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Online Status</h4>

                        <div class="page-title-right">
                            <div>
                                <!-- Small modal -->
                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light px-2 py-2"
                                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-center" id="add_list_btn">
                                    Add List
                                </button>
                                <div class="modal fade bs-example-modal-center" tabindex="-1"
                                    aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">
                                                    Add List
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="" action="online_status" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label class="form-label">User Id</label>
                                                        <input type="text" class="form-control" name="user_id"
                                                            placeholder="Add User ID..." required />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Add User Name..." required="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label">Description</label>
                                                        <textarea type="text" id="editor" class="form-control" name="description" placeholder="Add description..."></textarea>
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light me-1">
                                                                Submit
                                                            </button>
                                                            <button type="reset"
                                                                class="btn btn-secondary waves-effect">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($success = session('success'))
                <div class="row">
                    <div class="alert alert-success" role="alert">
                        {{ $success }}
                    </div>
                </div>
                @endif @if ($errors->count())
                    @foreach ($errors->all() as $errror)
                        <div class="alert alert-warning" role="alert">
                            {{ $errror }}
                        </div>
                    @endforeach
                @endif

                @if (isset($online_statuses) && $online_statuses->count())
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table class="table table-editable align-middle table-edits" id="example">
                                            <!-- table-nowrap -->
                                            <thead>
                                                <tr style="cursor: pointer">
                                                    <th>User Id</th>
                                                    <th>Name</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($online_statuses as $data)
                                                    <tr data-id="1">
                                                        <td data-field="name" style="width: 50px">
                                                            {{ $data->user_id }}
                                                        </td>
                                                        <td data-field="name" style="width: 200px">
                                                            {{ $data->name }}
                                                        </td>
                                                        <td style="width: 150px">
                                                            <div class="d-flex">
                                                                <div class="second_modal">
                                                                    <button
                                                                        class="btn btn-outline-secondary btn-sm mx-2 d-inline-block  view_btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target=".bs-example-modal-center2"
                                                                        data-id="{{ $data->id }}">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>

                                                                    <div class="modal fade bs-example-modal-center2"
                                                                        tabindex="-1"
                                                                        aria-labelledby="mySmallModalLabel"
                                                                        aria-hidden="true" style="display: none">
                                                                        <div class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">
                                                                                        View Online Status
                                                                                    </h5>
                                                                                    <button type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                                </div>
                                                                                <div class="modal-body"
                                                                                    id="view_modal_body">


                                                                                </div>
                                                                            </div>
                                                                            <!-- /.modal-content -->
                                                                        </div>
                                                                        <!-- /.modal-dialog -->
                                                                    </div>
                                                                </div>


                                                                <a href="/online_status/{{ $data->id }}/update"
                                                                    class="btn btn-outline-secondary btn-sm edit-button"
                                                                    title="Edit">
                                                                    <i class="fas fa-pencil-alt" title="Edit"></i>
                                                                    Edit
                                                                </a>
                                                                <form
                                                                    action="/online_status/{{ $data->id }}/delete"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button
                                                                        class="btn btn-outline-secondary btn-sm edit delete-btn"
                                                                        title="Edit" type="submit"
                                                                        onclick="return confirm('Do You want Delete this Data?')">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                @endif

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    @include('layouts.includes.footer')
</div>





<script defer src="{{ asset('assets/js/onlineStatus.js') }}"></script>
