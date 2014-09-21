crud
====
Simple crud

Installation
------------


Usage
-----
0) Controller
```
...
use samalex\crud\controllers\CrudController;

class PostController extends CrudController {
...
}

```
localhost/yii2/web/post/all

1) Without controller
config/web.php
```
...
'controllerMap' => [
    'post' => [  // controller name
        'class' => 'samalex\crud\controllers\CrudController',
        'model' => 'modelName', //if is miss - get model by controller name
        'modelSearch' => 'modelSearch' //if is miss - get model by search / controller name
    ]
]
...
```

2) In actions
```
...
use samalex\crud\controllers\actions;

class SomeController extends Controller {

    public function actions() {
       return array_merge(parent::actions(), [
            'all' => ['class' => actions\ActionAll::className()],
            'view' => ['class' => actions\ActionView::className()],
            'update' => ['class' => actions\ActionUpdate::className()],
            'create' => ['class' => actions\ActionCreate::className()],
            'delete' => ['class' => actions\ActionDelete::className()],
        ]);
    }
...
```

Custom view, model
```
...
use samalex\crud\controllers\actions;

class PostController extends Controller {

    public function actions() {
       return array_merge(parent::actions(), [
            'all' => [
                            'class' => actions\ActionAll::className(), 
                            'view' => 'viewName', 
                            'model' => 'modelName', 
                            'modelSearch' => 'modelSearchName'
                        ],
...
```

Custom columns 
In seach/model
```
...
use app\models\User as UserModel;

class User extends UserModel {

    public function getCrudColumns() {
        return[
            'username',
            'email',
            [
                'attribute' => 'role_id',
                'value' => 'role.name',
                'filter' => ArrayHelper::map(Role::find()->all(), 'id', 'name') 
            ],
            'created_at:datetime',
            'updated_at:datetime',
            [
                'attribute' => 'status_id',
                'value' => 'status.name',
                'filter' => ArrayHelper::map(Status::find()->all(), 'id', 'name')
            ],
        ];
    }
...
```



