<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;

    // filaable fields
    protected $fillable = [
        'id',
        'vcard_id',
        'ip',
        'user_agent',
        'count',
        'created_at',
        'updated_at'
    ];

    // count downloads
    public function count($vcard_id)
    {
        $download = Download::where('vcard_id', $vcard_id)->first();
        if ($download) {
            $download->count = $download->count + 1;
            $download->save();
        } else {
            $download = new Download();
            $download->vcard_id = $vcard_id;
            $download->count = 1;
            $download->save();
        }
    }

    // auto generate line in database for table
}
