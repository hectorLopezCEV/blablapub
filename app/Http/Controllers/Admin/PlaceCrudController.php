<?php

namespace App\Http\Controllers\Admin;

use App\Models\Place;
use App\Http\Requests\PlaceRequest;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanel;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

/**
 * Class PlaceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class PlaceCrudController extends CrudController
{
    use ListOperation;
    use CreateOperation;
    use UpdateOperation;
    use DeleteOperation;
    use ShowOperation;

    public function setup()
    {
        $this->crud->setModel(Place::class);
        $this->crud->setRoute(config('backpack.base.route_prefix').'/place');
        $this->crud->setEntityNameStrings('place', 'places');
        $this->crud->addFilter([
            'name' => 'user_id',
            'type' => 'select2_ajax',
            'label'=> 'user',
            'placeholder' => 'Elige un usuario'
        ],
            url('admin/ajax-users'), // the ajax route
            function($value) { // if the filter is active
                // $this->crud->addClause('where', 'category_id', $value);
            });
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        $this->crud->setFromDb();
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(PlaceRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->adFields([
            [
                'name' => 'name',
                'label' => trans('backpack<::permissionmanager.name'),
                'type' => 'text',
            ],
            [
                'label' => "Imagen de perfil",
                'name' => "image",
                'type' => 'image',
                'upload' => true,
                'crop' => true,
                'aspect-ratio' => 1,
            ]
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
