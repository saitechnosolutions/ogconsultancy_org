<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationApplicaton extends Model
{
    use HasFactory;

    protected $fillable = [
        "branch_name",
        "user_name",
        "passport_number",
        "contact_number",
        "whatsapp_number",
        "marketing_officer_name",
        "service_description_id",
        "mou_number",
        "mail_id",
        "invoice_number",
        "recipt_upload",
        "passport_upload",
        "residential_address"
    ];
}
