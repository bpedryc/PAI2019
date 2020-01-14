<?php


class ShopsController extends BaseController
{
    public function getAvailableShops(){

        $shopRepository = new ShopRepository();
        $shops = $shopRepository->getShops();

        $this->render('shops', ['shops' => $shops]);
    }
}