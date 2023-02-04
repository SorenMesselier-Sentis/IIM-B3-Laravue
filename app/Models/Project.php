<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        // Project Responsible
        'client_id',
        'last_name',
        'first_name',
        'phone',
        'email',
        // Project Informations
        'title',
        'content',
        'begining_project_date',
        'ending_project_date',
        'project_status',
        'days_spent',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
