<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerCampaign extends Model
{
    use HasFactory;

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }
}
