<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable =[

        "site_title", "site_logo", "currency", "currency_position", "staff_access", "date_format", "theme", "developed_by", "invoice_format", "state", "livraison", "min_withdraw", "referral", "api_id", "api_key"
    ];
}
