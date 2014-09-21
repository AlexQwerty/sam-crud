<?php

/**
 * Description of AllAction
 *
 * @author alex
 */

namespace samalex\crud\controllers\actions;

use samalex\crud\controllers\actions\ActionBase;

class ActionView extends ActionBase{

    public function run($id) {
        return $this->controller->render($this->view, [
                    'model' => $this->findModel($id),
        ]);
    }

}

?>
