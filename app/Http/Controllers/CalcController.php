<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\CalcController;
use Illuminate\Support\Facades\Route;
use App\Http\Requests;
use App\Models\Page;

/** 
 * 
 * @param \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
*/


class CalcController extends Controller
{

	private $result;
	private $value;
	private $time;
	private $precent;


    public function getParams(){
		$value = request()->input('value');
		$time = request()->input('time');
		$interest = request()->input('interest');
    }



    public function valid() {
        
        request()->validate(
            [   
                'value' => 'required',
                'interrest' => 'required',
            ]);

        
        

      
    }

    public function calc(Request $request) {

       
		


		$request->validate([
			'value' => 'required',
			'precent' => 'required'

		],['value.required' => 'Kwota jest wymagana!',
		'precent.required' => 'Procenty są wymagane!',
	
	]); 

	    $this->value = $request->input('value');
		
		
		//Retrieve the username input field
		$this->time = $request->input('time');
		
		
		//Retrieve the password input field
		$this->precent = $request->input('precent');



	return $this->process();

    }



	public function process() {

		//zrobic to jako parametr funkcji

        $this->result = $this->value * $this->time * $this->precent;
		$result = $this->result;
		$value = $this->value;
		$time = $this->time;
		$precent = $this->precent;

		$page = new Page;
		$page->value = $value;
		$page->time = $time;
		$page->precent = $precent;
		$page->result = $result;
		$page->save();



		return view('calcView', compact('result','value','time','precent'));
      
    }


	

    public function generateView() {
        return view('calcView');
      
    }


}