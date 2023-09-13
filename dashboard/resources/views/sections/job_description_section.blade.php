<div class="main-content banner-section">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Job Description</h4>

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
                                                <form class="custom-validation job_description_form" action="job_description" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label class="form-label">User Id</label>
                                                        <input type="text" class="form-control" name="user_id"
                                                            placeholder="Add User ID..." required />
                                                    </div>

                                                    <div class="mb-3 col-md-12 row">
                                                        <div class="mb-3 col-md-12 row d-flex align-items-center description_sticky_form">
                                                            <div class="col-md-5">
                                                                <label class="form-label">Attribute</label>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <label class="form-label">Value</label>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button
                                                                    class="btn btn-primary btn-sm waves-effect waves-light px-3 py-1"
                                                                    id="form_add_btn">
                                                                    +
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="row mb-3 col-md-12 row d-flex align-items-center online_status_attribute_container">
                                                            <div class="col-md-5" id="form-title-container">
                                                                <input type="text" class="form-control"
                                                                    name="attribute[]" placeholder="attribute"
                                                                    id="banner-title" required />
                                                            </div>
                                                            <div class="col-md-5" id="form-title-container">
                                                                <textarea  type="text" class="form-control editor_modal"
                                                                    name="value[]" placeholder="value" id="banner-title"
                                                                    required ></textarea>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button
                                                                    class="btn btn-danger btn-sm waves-effect waves-light px-3 py-2 form_delete_btn"
                                                                    style="display: none">
                                                                    Delete
                                                                </button>
                                                            </div>

                                                        </div>
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

                @if (isset($job_descriptions) && $job_descriptions->count())
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Job Description</h4>

                                    <div class="table-responsive" >
                                        <table class="table table-editable align-middle table-edits" id="example">
                                            <!-- table-nowrap -->
                                            <thead>
                                                <tr style="cursor: pointer">
                                                    <th>User Id</th>
                                                    <th>Data</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($job_descriptions as $data)
                                                    <tr data-id="1">
                                                        <td data-field="name" style="width: 50px">
                                                            {{ $data->user_id }}
                                                        </td>
                                                        <td data-field="name" style="width: 200px">

                                                            {{ $data->user_id . '_data' }}


                                                        </td>
                                                        <td style="width: 150px">
                                                            <div class="d-flex">
                                                                <div class="second_modal">
                                                                    <button
                                                                        class="btn btn-outline-secondary btn-sm mx-2 d-inline-block  view_btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target=".bs-example-modal-center2"
                                                                        data-job-description="true"
                                                                        data-id="{{ $data->id }}">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>

                                                                    <div class="modal fade bs-example-modal-center2"
                                                                        tabindex="-1"
                                                                        aria-labelledby="mySmallModalLabel"
                                                                        aria-hidden="true" style="display: none">
                                                                        <div
                                                                            class="modal-dialog modal-dialog-centered">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">
                                                                                        View Job Description
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
                                                                <a href="/job_description/{{ $data->id }}/update"
                                                                    class="btn btn-outline-secondary btn-sm edit-button"
                                                                    title="Edit">
                                                                    <i class="fas fa-pencil-alt" title="Edit"></i>
                                                                    Edit
                                                                </a>
                                                                <form
                                                                    action="/job_description/{{ $data->id }}/delete"
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




<script defer src="{{ asset('assets/js/jobDescription.js') }}"></script>
