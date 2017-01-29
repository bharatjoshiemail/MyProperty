<?php

namespace App\Repositories;

use App\Repositories\IPropertyRepository;
use App\Repositories\PropertyRepository;
use Illuminate\Support\ServiceProvider;

class PropertyServiceProvider extends ServiceProvider {
	
	public function register()
	{
		//$this->app::bind('Repositories\\IUserRepository', 'Repositories\\UserRepository');

		//Now if you want to change Repository instead of UserRepository to MongoUserRepository then just need to bind as below.
		$this->app->bind('App\Repositories\IPropertyRepository', 'App\Repositories\PropertyRepository');
	}
}

