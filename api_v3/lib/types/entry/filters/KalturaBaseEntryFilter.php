<?php
/**
 * @package api
 * @subpackage filters
 */
class KalturaBaseEntryFilter extends KalturaBaseEntryBaseFilter
{
	private $map_between_objects = array
	(
		"freeText" => "_free_text",
		"isRoot" => "_is_root",
		"categoriesFullNameIn" => "_in_categories_full_name", 
		"parentCategoryIdIn" => "_in_parent_category_id",
	);

	public function getMapBetweenObjects()
	{
		return array_merge(parent::getMapBetweenObjects(), $this->map_between_objects);
	}

	/**
	 * @var string
	 */
	public $freeText;

	/**
	 * @var KalturaNullableBoolean
	 */
	public $isRoot;
	
	/**
	 * @var string
	 */
	public $categoriesFullNameIn;
	
	/**
	 * @var string
	 */
	public $parentCategoryIdIn;

	/* (non-PHPdoc)
	 * @see KalturaObject::toObject()
	 */
	public function toObject($coreFilter = null, $props_to_skip = array()) 
	{
		if(is_null($coreFilter))
			$coreFilter = new entryFilter();
			
		return parent::toObject($coreFilter, $props_to_skip);
	}
}
