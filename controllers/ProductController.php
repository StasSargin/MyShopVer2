<<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 24.04.2019
 * Time: 20:44
 */

class ProductController
{
    public function actionView($id)
    {
        require_once (ROOT.'/views/product/view.php');

        return true;
    }
}