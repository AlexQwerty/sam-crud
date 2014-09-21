<?php

/**
 * Description of CrudController
 *
 * @author alex
 */

namespace samalex\crud\controllers;

use app\components\Controller;
use samalex\crud\controllers\actions;

class CrudController extends Controller {

    public function actions() {
       return array_merge(parent::actions(), [
            'all' => ['class' => actions\ActionAll::className()],
            'view' => ['class' => actions\ActionView::className()],
            'update' => ['class' => actions\ActionUpdate::className()],
            'create' => ['class' => actions\ActionCreate::className()],
            'delete' => ['class' => actions\ActionDelete::className()],
        ]);
    }

}

?>
