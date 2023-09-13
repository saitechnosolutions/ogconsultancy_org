@if (isset($onlineStatusDatas))
    <div class="mb-3" style="padding-top:1px;  font-family: Amerian Type Writer;letter-spacing:2px;">
        <h2 class="e_services_top_heading">Current
            Update</h2>
    </div>
    <div class="online_status_description_contnet">

        <div class="online_status_description_container p-4">
            <h2 style="color:#000 ">
                {{ $onlineStatusDatas[0]->name }}</h2>
            <p class="mt-3 ">
                {!! $onlineStatusDatas[0]->description !!}
            </p>
        </div>
    </div>
@endif

@if (isset($jobDescription))

    <div style="font-family: Amerian Type Writer;letter-spacing:2px" class="e_services_job_description section_service">
        <div class="mt-3" style="padding-top:1px;">
            <h2 class="e_services_top_heading">Job Description</h2>
        </div>
        <table class="styled-table  e_services_description_table">
            <thead class="text-center e_services_thead">
                <tr>
                    <th>TITLE</th>
                    <th>DESCRIPTION</th>
                </tr>
            </thead>
            <tbody class="text-center e_services_desc">
                @foreach ($attributeCollection as $key => $data)
                    @if ($key % 2 == 0)
                        <tr>

                            <td>
                                <div class="jb_desc table_data">
                                    {{ $data->attribute }}
                                </div>
                            </td>


                            <td style="line-height: 20px">
                                <div class="jb_desc table_data">
                                    {!! nl2br($data->value) !!}
                                </div>
                            </td>

                        </tr>
                    @else
                        <tr class="active-row">

                            <td>
                                <div class="jb_desc table_data">
                                    {{ $data->attribute }}
                                </div>
                            </td>


                            <td style="line-height: 20px">
                                <div class="jb_desc table_data">
                                    {!! nl2br($data->value) !!}
                                </div>
                            </td>

                        </tr>
                    @endif
                @endforeach
                <!-- and so on... -->
            </tbody>
        </table>
    </div>
@endif
