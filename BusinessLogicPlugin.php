<?php
namespace Craft;
require_once('Adjusters/BusinessLogic_TaxRemover.php');

class BusinessLogicPlugin extends BasePlugin
{

	public function getName()
	{
		return 'BusinessLogic';
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

	    	new Commerce_TaxAdjuster
	    	
	   	];
	}

}
