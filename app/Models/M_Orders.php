<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class M_Orders extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $primaryKey = 'id';

    // protected $fillable = [
    //     'id',
    //     'leads_id',
    //     'offer_letter_id',
    // 'popks_letter_id',
    //     'order_status',
    //     'desired_position',
    //     'needed_qty',
    //     'due_date',
    //     'description',
    //     'characteristic_desc',
    //     'skills_desc',
    //     'budget_estimation',
    //     'start_recruitment',
    //     'end_recruitment',
    //     'start_training',
    //     'end_training',
    //     'start_offer',
    //     'end_offer',
    //     'start_appointment',
    //     'end_appointment',
    //     'start_probation',
    //     'end_probition',
    //     'start_popks',
    //     'end_popks',
    //     'tor_file',
    //     'cv_file',
    //     'po_file',
    // ];

    protected $guarded = [];

    public $incrementing = false;

    public function leadData() : BelongsTo
    {
        return $this->belongsTo(M_Leads::class, 'leads_id', 'id');
    }

    public function globalParams() : BelongsTo
    {
        return $this->belongsTo(M_GlobalParams::class, 'order_status', 'id_params');
    }


}