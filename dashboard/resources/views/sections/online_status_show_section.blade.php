<?php
$user_data_collection = json_decode($user_datas->attribute_collection); ?>


<form class="custom-validation preloader_form_cotnaienr" action="" method="POST" enctype="multipart/form-data">
    @csrf


    <div class="mb-3">
        <label class="form-label">User Id</label>
        <input type="text" class="form-control" name="user_id" placeholder="Add User ID..."
            value="{{ $user_datas->user_id }}" required disabled />
    </div>

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Add User Nam..." required=""
            value="{{ $user_datas->name }}" disabled>
    </div>


    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea type="text" id="editor2" class="form-control" name="description" placeholder="Add description..."
            style="height: 150px;" disabled>
        {!! $user_datas->description !!}
        </textarea>
    </div>

</form>
