<?php
namespace FacturaScripts\Plugins\ComprasProductos\Controller;

class ListProductoCompra extends \FacturaScripts\Core\Lib\ExtendedController\ListController
{
    public function getPageData() {
        $pageData = parent::getPageData();
        $pageData["title"] = "Productos Compras";
        $pageData["menu"] = "purchases";
        $pageData["icon"] = "fas fa-search";
        return $pageData;
    }

    protected function createViews() {
        $this->createViewsProductoCompra();
    }

    protected function createViewsProductoCompra(string $viewName = "ListProductoCompra") {
        $this->addView($viewName, "ProductoCompra", "Productos Compras");
        $this->addOrderBy($viewName, ["id"], "id");
        $this->addOrderBy($viewName, ["name"], "name", 1);
        $this->addSearchFields($viewName, ["id", "name"]);
    }
}