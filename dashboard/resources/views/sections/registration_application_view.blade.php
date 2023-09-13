<div class="container-fluid">
    <table class="table table-striped">
        <tbody class="custom_ra_body">
            <tr>
                <th scope="row">Branch Name</th>
                <td>{{ $data->branch_name }}</td>
            </tr>
            <tr>
                <th scope="row">User Name</th>
                <td>{{ $data->user_name }}</td>
            </tr>

            <tr>
                <th scope="row">Passport No</th>
                <td>{{ $data->passport_number }}</td>
            </tr>

            <tr>
                <th scope="row">Contact Number</th>
                <td>{{ $data->contact_number }}</td>
            </tr>

            <tr>
                <th scope="row">Whatsapp Number</th>
                <td>{{ $data->whatsapp_number }}</td>
            </tr>
            <tr>
                <th scope="row">Marketing Officer Name</th>
                <td>{{ $data->marketing_officer_name }}</td>
            </tr>
            <tr>
                <th scope="row">Service Description ID</th>
                <td>{{ $data->service_description_id }}</td>
            </tr>
            <tr>
                <th scope="row">MOU Number</th>
                <td>{{ $data->mou_number }}</td>
            </tr>
            <tr>
                <th scope="row">Mail ID</th>
                <td>{{ $data->mail_id }}</td>
            </tr>
            <tr>
                <th scope="row">Invoice Number</th>
                <td>{{ $data->invoice_number }}</td>
            </tr>
            <tr>
                <th scope="row">Recipt Details</th>
                <td><a href="https://www.ogconsultancy.org/assets/regApp/recipt/{{ $data->recipt_upload }}"
                        class="btn btn-primary" download>View
                        Recipt</a></td>
            </tr>
            <tr>
                <th scope="row">Passport Details</th>
                <td><a href="https://www.ogconsultancy.org/assets/regApp/passport/{{ $data->passport_upload }}"
                        class="btn btn-primary" download>View
                        Passport</a></td>
            </tr>
            <tr>
                <th scope="row">Residential Address</th>
                <td>{{ $data->residential_address }}</td>
            </tr>
        </tbody>
    </table>
</div>
