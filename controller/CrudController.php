<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CrudController
 *
 * @author alex
 */

namespace samalex\crud;

use app\components\Controller;
use app\components\crud;

class CrudController extends Controller {

    public function actions() {
       return array_merge(parent::actions(), [
            'all' => ['class' => crud\ActionAll::className()],
            'view' => ['class' => crud\ActionView::className()],
            'update' => ['class' => crud\ActionUpdate::className()],
            'create' => ['class' => crud\ActionCreate::className()],
            'delete' => ['class' => crud\ActionDelete::className()],
        ]);
    }

}

?>
