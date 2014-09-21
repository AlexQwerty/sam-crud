<?php

/**
 * Description of AllAction
 *
 * @author alex
 */

namespace samalex\crud\controllers\actions;

use Yii;
use samalex\crud\controllers\actions\ActionBase;

class ActionCreate extends ActionBase {

    public function run() {
        $model = new $this->model;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->controller->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->controller->render($this->view, [
                        'model' => $model,
            ]);
        }
    }

}

?>
