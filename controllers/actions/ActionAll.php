<?php

/**
 * Description of AllAction
 *
 * @author alex
 */

namespace samalex\crud\controllers\actions;

use Yii;
use samalex\crud\controllers\actions\ActionBase;

class ActionAll extends ActionBase {
    
    public function run() {
        $searchModel = new $this->searchModel;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->controller->render($this->view, [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

}

?>
