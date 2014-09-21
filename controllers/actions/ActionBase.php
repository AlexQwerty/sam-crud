<?php

/**
 * Description of AllAction
 *
 * @author alex
 */

namespace samalex\crud\controllers\actions;

use yii\base\Action;

class ActionBase extends Action {

    public $model = null;
    public $searchModel = null;
    public $view = null;

    public function init() {
        $ns = 'app\models';
        $controller =  strtolower($this->controller->id);
        $action =  strtolower($this->id);
        $this->model = ($this->model === null) ? $ns . '\\' . ucfirst($controller) : $this->model;
        $this->searchModel = ($this->searchModel === null) ? $ns . '\\search\\' . ucfirst($controller) : $this->searchModel;
        $this->view = ($this->view === null) ? '@vendor/samalex/crud/views/' . $action : $this->view;
    }

    protected function findModel($id) {
        $modelName = $this->model;
        $model = $modelName::findOne($id);
        $model->scenario = "crud";
        if ($model !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}

?>
