<html>

<head>
    <title>Registration Application</title>
</head>

<body>
    <h2>New Registration application</h2>
    <table style='border:2px solid;width:50%;border-collapse: collapse;'>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Branch</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['branch_name'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>UserName</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['user_name'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Passport Number</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['passport_number'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Contact Number</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['contact_number'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>WhatsApp Number</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['whatsapp_number'] }}</td>
        </tr>

        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Marketing Officer Name</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['marketing_officer_name'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Service Descriptin ID</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['service_description_id'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>MOU Number</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['mou_number'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Mail ID</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['mail_id'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Invoice Number</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['invoice_number'] }}</td>
        </tr>
        <tr>
            <td style='border:1px solid;padding: 10px;text-align: left;background:#f33;color:#fff;'>
                <h4>Residential Address</h4>
            </td>
            <td style='border:1px solid;padding: 10px;text-align: left;'>{{ $datas['residential_address'] }}</td>
        </tr>

    </table>
</body>

</html>
