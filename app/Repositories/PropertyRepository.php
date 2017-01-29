<?php              
namespace App\Repositories;

use App\Repositories\IPropertyRepository;
use App\Agent;
use App\Property;

class PropertyRepository implements IPropertyRepository{

	public function getAllAgents()
	{            
		return Agent::all(array('AgencyName','contact'));
	}
	
	public function getAllProperties()
	{
		return Property::all(array('address','owner','price','agentid','postcode','description','contact'));
	}

	

}

