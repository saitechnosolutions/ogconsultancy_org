<div class="main-content banner-section">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Registration Application</h4>
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

                @if (isset($rgApplications) && $rgApplications->count())
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <table class="table table-editable align-middle table-edits" id="example">
                                            <thead>
                                                <tr style="cursor: pointer">
                                                    <th>User Name</th>
                                                    <th>User Mail ID</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rgApplications as $data)
                                                    <tr data-id="1">
                                                        <td data-field="name">
                                                            {{ $data->user_name }}
                                                        </td>
                                                        <td data-field="name">
                                                            {{ $data->mail_id }}
                                                        </td>
                                                        <td>
                                                            <div class="d-flex">
                                                                <div class="second_modal">
                                                                    <button
                                                                        class="btn btn-outline-secondary btn-sm mx-2 d-inline-block  view_btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target=".bs-example-modal-center2"
                                                                        data-id="{{ $data->id }}">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </div>
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
                @else
                    <div class="row card">
                        <div class="col-12 text-center mt-3 card-body">
                            <h3>No Data Found</h3>
                        </div>
                    </div>
                @endif

        </div>
        <!-- container-fluid -->
    </div>


    <div class="modal fade bs-example-modal-center2" tabindex="-1" aria-labelledby="mySmallModalLabel"
        aria-hidden="true" style="display: none">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Registration Application
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="view_modal_body">
                    <div class="preloader_container">
                        <div class="preload-logo">
                            <img src="/assets/images/fav1.png" alt="loading">
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Page-content -->

    @include('layouts.includes.footer')
</div>


<script defer src="{{ asset('assets/js/regApplication.js') }}"></script>
{{--  --}}
