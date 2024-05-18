<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Months;
class MonthsController extends Controller
{


    public function showPayments(){

       $currentDay = Carbon::now()->day;            
       $month = Months::select('mes')->get();
       $value = Months::select('valor')->get();
       $id = Months::select('monthId')->get();
       $monthNumber = Carbon::now()->month;
       
      // $value = Months::select("valor");
      if($value[0]->valor === null AND $currentDay <11 AND  $monthNumber <= $id){
          echo 'pagou';
        }else if($value[0]->valor != null AND $currentDay >10 AND $monthNumber <= $id){
            echo 'pagou';
        }else if($value[0]->valor === null AND $currentDay >10 AND $monthNumber <= $id){
            echo "você tem dívida";
        }
            
    }


               
      





    public function compareDates(){     
       
        setlocale(LC_TIME, 'pt'); // LC_TIME é formatação de data e hora com strftime()
        $currentDay = Carbon::now()->day;             
        $currentMonthNumber = Carbon::now()->month;          
       // dd($currentDay)  ;
        $currentMonth = Carbon::now()->formatLocalized('%B'); //aqui formatei o mês que irá pegar do servidor para o portugês atravês do %B      
        $allMonths = Months::all();       
        
        $monthStored = Months::all();
        


        /*
               if($monthStoreds->month ===  $currentMonth AND $currentDay >10){
                   echo $allMonths;
                }else if($monthStoreds->month ===  $currentMonth AND $currentDay <11){
                   echo $allMonths;
               
                }else if($monthStoreds->month === "janeiro" AND $currentDay <11 OR $monthStoreds->month === "janeiro" AND $currentDay >11){
                   echo $allMonths;
                }else{
                    echo "Você está em dívida";
                }

                if($monthStoreds->month === "fevereiro" AND $currentDay <11 OR $monthStoreds->month === "fevereiro" AND $currentDay >11){
                   echo $allMonths;
                }else{
                    echo "Você está em dívida";
                }
            }
            
            //Atualizar o mês para o atual pegando do servidor 
            Months::query()->update(["month" => $currentMonth]);

        */    
      
          
    }
}
        

