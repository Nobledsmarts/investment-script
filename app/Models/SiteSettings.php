<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SiteSettings extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'whatsapp_number',
        'site_address',
        'site_name',
        'site_logo_url',
        'site_about_us',
        'terms_and_conditions',
        'privacy_and_policy',
        'how_it_works',
        'meet_our_traders',
        'site_email',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'linkedin',
        'telegram',
        'medium',
        'social_handles_active'
    ];
}
