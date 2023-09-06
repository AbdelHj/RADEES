<?php

namespace App\Imports;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Employee;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use App\Models\Dep;

/*class EmployeesImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $employee = new Employee([
                'N°' => $row[0],
                'nom' => $row[1],
                'prenom' => $row[2],
                'gmail' => $row[3],
                'password' => $row[4],
                'deps_id' => $row[5],
                'posts_id' => $row[6],
                'Salair' => $row[7],
                // Ajoutez ici d'autres champs si nécessaire
            ]);
            $employee->save();
        }


      
    }
}*/


class EmployeesImport implements ToModel ,WithHeadingRow
{
    /** 
   * @param Collection $collection
   * */
    public static $ret = 0;
    public static $total = 0;
    public function model(array $row){
        EmployeesImport::$total++;
        $var = HomeController::getEmployees($row['email']);
        /* $departement = Dep::find($row['department_id']);
        print_r($departement); */

        if($var == 0){
            
            return Employee::create([
            
            // 'N°' => $row['id'],
                'nom' => $row['secondname'],
                'prenom' => $row['firstname'],
                'password' => $row['password'],
                'email' => $row['email'],
                'deps_id' => $row['department_id'],
                'posts_id' => $row['post_id'],
                'Salair' => $row['salary'],
                'N°' => $row['num'],
            ]);
            EmployeesImport::$ret++;
        }else{
            return NULL;
        }
    }
   
}

 
/*
    public function model(array $row){
        return new Employee([
            'id' => $row[0],
                'N°' => $row[1],
                'nom' => $row[2],
                'prenom' => $row[3],
                'password' => $row[4],
                'email' => $row[5],
                'deps_id' => $row[6],
                'posts_id' => $row[7],
                'Salair' => $row[8],
                
                // Ajoutez ici d'autres champs si nécessaire
            ]);
            
        }*/




