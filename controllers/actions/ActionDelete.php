<?php

/**
 * Description of AllAction
 *
 * @author alex
 */

namespace samalex\crud\controllers\actions;

use samalex\crud\controllers\actions\ActionBase;

class ActionDelete extends ActionBase{

    public function run($id) {
        $this->findModel($id)->delete();
        return $this->controller->redirect(['all']);
    }

}

?>
