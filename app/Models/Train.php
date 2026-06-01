<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    private $id;
    private $company_name;
    private $departure_station;
    private $arrival_station;
    private $departure_time;
    private $arrival_time;
    private $train_code;
    private $carriage_count;
    private $is_delayed;
    private $is_cancelled;
}
