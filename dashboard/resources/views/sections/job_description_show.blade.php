<?php
$user_data_collection = json_decode($user_datas->attribute_collection); ?>

<form class="custom-validation preloader_form_cotnaienr" action="" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">User Id</label>
        <input type="text" class="form-control" name="user_id" placeholder="Add User ID..."
            value="{{ $user_datas->user_id }}" required disabled />
    </div>
    <div class="mb-3 col-md-12 row">
        <div class="mb-3 col-md-12 row d-flex align-items-center">
            <div class="col-md-5">
                <label class="form-label">Attribute</label>
            </div>
            <div class="col-md-5">
                <label class="form-label">Value</label>
            </div>

        </div>
        @foreach ($user_data_collection as $key => $user_data)
            <div class="row mb-3 col-md-12 row d-flex align-items-center ">
                <div class="col-md-5" id="form-title-container">
                    <input type="text" class="form-control" name="attribute[]" placeholder="attribute"
                        id="banner-title" required value="{{ $user_data->attribute }}" disabled />
                </div>
                <div class="col-md-5" id="form-title-container">
                    <textarea type="text" class="form-control" name="value[]" placeholder="value" id="banner-title"
                        required  disabled >{{ $user_data->value }}</textarea>
                </div>


            </div>
        @endforeach
    </div>


</form>
