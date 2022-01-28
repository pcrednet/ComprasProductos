<?php
namespace FacturaScripts\Plugins\ComprasProductos\Model;

class ProductoCompra extends \FacturaScripts\Core\Model\Base\ModelClass
{
    use \FacturaScripts\Core\Model\Base\ModelTrait;

    public $creationdate;
    public $id;
    public $name;

    public function clear() {
        parent::clear();
        $this->creationdate = \date(self::DATETIME_STYLE);
    }

    public static function primaryColumn() {
        return "id";
    }

    public static function tableName() {
        return "productocompras";
    }
}