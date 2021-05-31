<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GroupContact;

class Contact extends Model
{
    use HasFactory;

    public function groupContact()
    {
        return $this->belongsTo(GroupContact::class);
    }
}
