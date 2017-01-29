<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\IPropertyRepository;
//use App\Agent;
//use App\Property;

class PropertyFront extends Controller
{
    var $agents;
    var $properties;    

    public function __construct(IPropertyRepository $property) {
        //$this->agents = Agent::all(array('AgencyName','contact'));
        //$this->properties = Property::all(array('address','owner','price','agentid','postcode','description','contact'));  
        
        $this->agents = $property->getAllAgents();
        $this->properties = $property->getAllProperties(); 
    }

    public function index() {
        return view('index', array('title' => 'My Property','description' => 'Property Management Desk', 'agents' => $this->agents,'properties' => $this->properties));
    }    

    public function getPlumberDetails($postcode) {
       $postcodestr = str_replace(' ', '', $postcode);   
       $url = 'https://www.watersafe.org.uk/duocms/api/orgs?postcode='.$postcodestr.'&within=20&type=approved&services=';
       $content = file_get_contents($url);
       $plumberList = json_decode($content, true);
       //$plumberList = SELF::getUrlContent($url);//
       return view('plumbers', array( 'title' => 'Plumber List','description' => 'Property Management Desk','postcode' =>$postcode, 'plumberList' => $plumberList, 'agents' => $this->agents,'properties' => $this->properties));
    }     
}
