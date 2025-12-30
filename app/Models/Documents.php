<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable = [
        'foreignId',
        'case_id',
        'filename',
        'mime_type',
        'category',
        'pages',
        'uploaded_by'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($document) {
            if (empty($document->foreignId)) {
                $id = static::max('id') + 1;
                $document->foreignId = 'doc-' . str_pad($id, 6, '0', STR_PAD_LEFT);;
            }
        });
    }
}