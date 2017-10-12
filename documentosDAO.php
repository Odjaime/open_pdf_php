<?php 

require_once "database.php";
require_once "documentos.php";


class documentosDAO{
	
	public static $instance;   
                         
    /* Open PDF function */                                
	public function exibirPDF($id){
		
		$sql = Conexao::getInstance()->prepare("SELECT `mt02material` FROM `02material_texto` WHERE mt02codigo_material = :id ");
		$sql->bindValue(":id", $id);
		$sql->execute();
		$res = $sql->fetchAll();
		
		header("Content-Type: application/pdf");
		
		echo $res[0][mt02material];
	}
	
    
}

?>

