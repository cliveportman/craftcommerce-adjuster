<?php
namespace Craft;
require_once('Adjusters/Adjuster_TaxRemover.php');

class AdjusterPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Adjuster';
	}

	public function getDescription()
	{
		return '';
	}

	public function getVersion()
	{
		return '1.0.0';
	}

	public function getDeveloper()
	{
		return craft()->getSiteName();
	}

	public function getDeveloperUrl()
	{
		return '';
	}

	public function init()
	{
	}

	public function commerce_registerOrderAdjusters(){

	   	return [

	    	new \Commerce\Adjusters\Adjuster_TaxRemover
	    	
	   	];
	}

}
