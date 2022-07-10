<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Camp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'price']; // slug tidak ditambahkan karena akan auto created dari title

    /**
     * Get all of the checkout for the Camp
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function checkout(): HasMany
    {
        return $this->hasMany(Checkout::class, 'camp_id');
    }
}
