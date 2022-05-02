<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    use HasFactory;

    public function addUserInfo($firstName, $lastName, $certif, $description, $company, $email, $phone)
    {
        $sql = "INSERT INTO [Certif](First_Name, Last_Name, Compagny, Certif, [Description], Email, Phone) VALUES (:FirstName, :LastName, :Compagny, :Certif, :Description, :Email, :Phone)";
        $resultSQL = DB::insert($sql, [":FirstName" => $firstName,":LastName" =>$lastName,":Compagny" => $company,":Certif"=> $certif, ":Description" => $description, ":Email" =>$email,":Phone" =>$phone]);

        return $resultSQL;
    }


}
