<?php
class atividade
{
	private $pdo;

    public $id_asm;
    public $nome_asm;
    public $tempo_asm;
    public $pontuacao_asm;
	public $imagem_asm;

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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_atividade");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obter($id_asm)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM tbl_atividade WHERE id_asm = ?");
			$stm->execute(array($id_asm));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_asm)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_atividade WHERE id_asm = ?");

			$stm->execute(array($id_asm));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Atualizar($data)
	{
		try
		{
			$sql = "UPDATE tbl_atividade SET
						nome_asm          = ?,
						tempo_asm        = ?,
						pontuacao_asm        = ?,
						imagem_asm       = ?
				    WHERE id_asm = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nome_asm,
                        $data->tempo_asm,
                        $data->pontuacao_asm,
						$data->imagem_asm,
                        $data->id_asm
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(atividade $data)
	{
		try
		{
		$sql = "INSERT INTO tbl_atividade (id_asm,nome_asm,tempo_asm,pontuacao_asm,imagem_asm)
		        VALUES (?, ?, ?, ?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_asm,
                    $data->nome_asm,
                    $data->tempo_asm,
                    $data->pontuacao_asm,
                    $data->imagem_asm
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
