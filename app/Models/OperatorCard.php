<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorCard extends Model
{
    use HasFactory;

    protected $table = 'operator_cards';

    protected $fillable = [
        'name',
        'status',
        'thumbnail',
    ];

    public function dataPlans()
    {
        return $this->hasMany(DataPlan::class);
    }

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? url($value) : '',
        );
    }
}
