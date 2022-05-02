<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Question extends Model
{
    use HasFactory;

    function GetCertifId($compagny)
    {

        $sql = "SELECT id from Certif where Compagny = :compagny";
        $resultSQL = DB::select($sql, [":compagny" => "'".$compagny."'"]);
        return $resultSQL;

    }
    
}
