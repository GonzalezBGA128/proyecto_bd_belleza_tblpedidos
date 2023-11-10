<?php
class pedidos
{
	private $pdo;
    
    public $idPedido;
    public $idProducto;
    public $NoArticulos;
    public $Precio;
    public $FechaPedido;
    public $idCliente;
	public $DireccionEnvio;
    public $FechaEntrega;

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

			$stm = $this->pdo->prepare("SELECT * FROM pedidos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idPedido)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM pedidos WHERE idPedido = ?");
			          

			$stm->execute(array($idPedido));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idPedido)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM pedidos WHERE idPedido = ?");			          

			$stm->execute(array($idPedido));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE pedidos SET 
						idProducto          = ?, 
						NoArticulos        = ?,
                        Precio        = ?,
						FechaPedido            = ?, 
						idCliente = ?,
						DireccionEnvio        = ?,
						FechaEntrega        = ?
				    WHERE idPedido = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idProducto, 
                        $data->NoArticulos,
                        $data->Precio,
                        $data->FechaPedido,
                        $data->idCliente,
						$data->DireccionEnvio,
						$data->FechaEntrega,
                        $data->idPedido
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
		$sql = "INSERT INTO `pedidos` (idProducto,NoArticulos,Precio,FechaPedido,idCliente,DireccionEnvio,FechaEntrega) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->idProducto, 
                    $data->NoArticulos,
                    $data->Precio,
                    $data->FechaPedido,
                    $data->idCliente,
					$data->DireccionEnvio,
					$data->FechaEntrega                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
