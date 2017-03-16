<?php
namespace woo\mapper;


use woo\domain\DomainObject;

abstract class Mapper
{
    protected static $PDO;

    function __construct()
    {
        if (!isset(self::$PDO)) {
            $dsn = \woo\base\ApplicationRegistry::getDSN();
            if (is_null($dsn)) {
                throw new \woo\base\AppException("No DSN");
            }

            self::$PDO = new \PDO($dsn);
            self::$PDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
    }

    function find($id)
    {

        $res = self::$PDO->prepare(
            "SELECT * FROM venue WHERE id=?")->execute([12]);

        $this->selectStmt()->execute(array($id));
        $array = $this->selectstmt()->fetch();

        $this->selectstmt()->closeCursor();
        if (!is_array($array)) {
            return null;
        }
        if (!isset($array['id'])) {
            return null;
        }
        $object = $this->createObject($array);
        return $object;
    }

    function createObject($array)
    {
        $obj = $this->doCreateObject($array);
        return $obj;
    }

    function insert(\woo\domain\DomainObject $obj)
    {
        $this->doInsert($obj);
    }

    abstract function update(DomainObject $object);

    protected abstract function doCreateObject(array $array);
    protected abstract function doInsert(DomainObject $object);
    protected abstract function selectStmt();


}

?>
