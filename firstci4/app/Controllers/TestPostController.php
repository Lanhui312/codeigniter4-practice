<?php

namespace App\Controllers;

use App\Models\BlogModel;

class TestPostController extends BaseController
{
    public function create()
    {
        echo "Reached controller!";
        echo '<pre>Method: ' . $this->request->getMethod() . '</pre>';
        echo '<pre>Connected DB: ' . \Config\Database::connect()->getDatabase() . '</pre>';

        $model = new \App\Models\BlogModel();

        $data = [
            'post_title'   => 'Inserted via test',
            'post_content' => 'Test content body',
        ];

        $model->save($data);

        if (!$model->db->affectedRows()) {
            echo '<pre>FAILED</pre>';
            print_r($model->errors());
        } else {
            echo '<pre>SUCCESS</pre>';
        }
    }
}
