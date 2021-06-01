<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GroupContact;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id', 'updated_at', 'created_at'
    ];

    public function groupContact()
    {
        return $this->belongsTo(GroupContact::class);
    }
}
