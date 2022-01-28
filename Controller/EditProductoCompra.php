<?php
namespace FacturaScripts\Plugins\ComprasProductos\Controller;

class EditProductoCompra extends \FacturaScripts\Core\Lib\ExtendedController\EditController
{
    public function getModelClassName() {
        return "ProductoCompra";
    }

    public function getPageData() {
        $pageData = parent::getPageData();
        $pageData["title"] = "ProductoCompra";
        $pageData["icon"] = "fas fa-search";
        return $pageData;
    }
}