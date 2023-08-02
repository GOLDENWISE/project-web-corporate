<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cooperation;

class OrganizationType extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function cooperation(){

        return $this->hasMany(Cooperation::class);
        
    }
}
