<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrItem extends Model
{
    use HasFactory;
    protected $table = 'pr_item';

    public $timestamps = false;
    
    protected $fillable = [
        'form_id',
        'stockno',
        'unit',
        'item',
        'quantity',
        'unitcost',
        'totalcost',
    ];

    
    /**
     * Counts number of rows
     * @return String
     * @example
     *     PrForm::countRows();
     * 
     **/
    public static function countRows()
    { return countTruncate(count(self::all())); }


    /**
     * Gets all items
     * @param Int $formid form id
     * @return Array
     * @example
     *     PrForm::getItemsByFormId();
     **/
    public static function getItemsByFormId(Int $formid)
    {
        return self::where("form_id", "=", $formid)->get();
    }
}
