<?php

/**
 * Description of AllAction
 *
 * @author alex
 */

namespace samalex\crud\controllers\actions;

use Yii;
use samalex\crud\controllers\actions\ActionBase;

class ActionUpdate extends ActionBase {
    
    public function run($id) {
        $model = $this->findModel($id);
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
