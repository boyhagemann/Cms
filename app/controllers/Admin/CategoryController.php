<?php

namespace Admin;

use Boyhagemann\Crud\CrudController;
use Boyhagemann\Form\FormBuilder;
use Boyhagemann\Model\ModelBuilder;
use Boyhagemann\Overview\OverviewBuilder;

class CategoryController extends CrudController
{

    /**
     * @param FormBuilder $fb
     */
    public function buildForm(FormBuilder $fb)
    {
    }

    /**
     * @param ModelBuilder $mb
     */
    public function buildModel(ModelBuilder $mb)
    {
        $mb->name('Category')->table('category');
        $mb->autoGenerate();
    }

    /**
     * @param OverviewBuilder $ob
     */
    public function buildOverview(OverviewBuilder $ob)
    {
    }


}

