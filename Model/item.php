<?php
class item
{
	
	private $pdo;

		
    private $id_ias;
    private $nome_ias;
    private $seguencia_ias;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function __set($atrib, $value) {
        $this->$atrib = $value;
    }
    
    public function __get($atrib) {
        return $this->$atrib ;
    }

	public function Listar()
	{
		try
		{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM tbl_item");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_ias)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM tbl_item WHERE id_ias = ?");
			$stm->execute(array($id_ias));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_ias)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_item WHERE id_ias = ?");

			$stm->execute(array($id_ias));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Atualizar($data)
	{
		try
		{
			$sql = "UPDATE tbl_item SET
						nome_ias          = ?,
						seguencia_ias        = ?
				    WHERE id_ias = ?";
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nome_ias,
                        $data->seguencia_ias,
                        $data->id_ias
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(item $data)
	{
		try
		{
			$sql = "INSERT INTO tbl_item (id_ias,nome_ias,seguencia_ias)
		        VALUES (?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_ias,
                    $data->nome_ias,
                    $data->seguencia_ias
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
