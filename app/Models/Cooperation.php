<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrganizationType;
use App\Models\Industry;
use App\Models\Country;

class Cooperation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['country', 'industry', 'organization_type'];

    public function scopeName($query, array $filters){


        $query->when($filters['search'] ?? false, function($query, $search) {

            return $query->where('name', 'like', '%' . $search . '%');

        });

    }

    public function country(){

        return $this->belongsTo(Country::class);

    }
    
    public function industry(){

        return $this->belongsTo(Industry::class);

    }
    
    public function organization_type(){

        return $this->belongsTo(OrganizationType::class);

    }
}
