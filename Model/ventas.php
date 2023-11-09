<?php
class Ventas
{
	private $pdo;
    
    public $idcliente;
    public $idservicio;
    public $idempleado;
	public $direccion;
    public $fecha;
    public $precio;
	public $iva;
	public $total;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM ventas");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM ventas WHERE idcliente = ?");
			          

			$stm->execute(array($idcliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM ventas WHERE idcliente = ?");			          

			$stm->execute(array($idcliente));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE ventas SET 
						idservicio          = ?, 
						idempleado        = ?,
                        fecha       = ?,
						direccion            = ?, 
						precio = ?,
						iva = ?,
						total = ?
				    WHERE idcliente = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idservicio, 
                        $data->idempleado,
                        $data->fecha,
                        $data->direccion,
                        $data->precio,
						$data->iva,
						$data->total,
                        $data->idcliente
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `Ventas` (idservicio,idempleado,direccion,fecha,precio,iva,total) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idservicio, 
                    $data->idempleado,
					$data->direccion,
                    $data->fecha,
                    $data->precio,
					$data->iva,
					$data->total                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
