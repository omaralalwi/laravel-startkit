<?php

namespace App\Repositories\Backend;

use App\Models\Product;
use App\Repositories\BaseRepository;


/**
 * Class ProductRepository
 * @package App\Repositories\Backend
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
	 
    protected $fieldSearchable = [
        'title',
        'description',
        'slug',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */

    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

/*
    public function getCategoriesItems()
		{
			$categoryItems = category::pluck('name','id');
			return $categoryItems;
		}
*/

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
