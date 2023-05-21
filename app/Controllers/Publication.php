<?php

namespace App\Controllers;
use App\Models\PublicationtModel;
class Publication extends BaseController
{

    public function index()

{


$model = new PostModel();
$data['posts'] = $model->show();
echo view('header');
echo view('Post/all', $data);
echo view('footer');


}


}






?>