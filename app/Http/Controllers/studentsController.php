<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Http\Request;

class studentsController extends Controller
{
    public function index($id=0){
        if($id==0){
            return Student::all();
        }else{
            return Student::find($id);
        }
    }

    public function update($id){
        $change=[];
        if(isset($_GET['name'])){
            $change['name']=$_GET['name'];
        }
        if(isset($_GET['email'])){
            $change['email']=$_GET['email'];
        }
        if(isset($_GET['birthDate'])){
            $change['birthDate']=$_GET['birthDate'];
        }
        try{
            $product=Student::find($id);
            Student::where('id', $product->id)
            ->update($change);
            return "Actualizado Correctamente";
        }catch(Exception $e){
            return "Algo fallo no se pudo actualizar";
        }
    }
    public function destroy($id){
        try{
            $product=Student::find($id);
            Student::where('id', $product->id)
            ->delete();
            return "Eliminado Correctamente";
        }catch(Exception $e){
            return "Algo fallo no se pudo eliminar";
        }
    }
    public function create()
    {
        if(isset($_GET['name']) and isset($_GET['email']) and isset($_GET['birthDate'])){
            try{
                $student=new Student(['name'=>$_GET['name'], "email"=>$_GET['email'],"birthDate"=>$_GET['birthDate']]);
                $student->save();
                return "Añadido Correctamente";
            }catch(Exception $e){
                return "Algo fallo no se pudo añadir";
            }

        }
    }
}
