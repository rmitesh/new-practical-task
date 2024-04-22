<?php

namespace App\Models;

use App\Enums\FormElementName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormElement extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id',
        'name',
        'label',
        'field_type',
        'is_require',
        'is_email',
    ];

    protected $casts = [
        'name' => FormElementName::class,
        'is_require' => 'boolean',
        'is_email' => 'boolean',
    ];
}
