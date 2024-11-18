<?php
class clientes {
    //Conexão
    private $conn;
    //Tabela
    private $db_table = "clientes";
    //Colunas
    public $id;
    public $nome;
    public $CPF;
    public $Endereco;
    public $Conta;
    public $Digito;
    public $Agencia;
    public $Data_de_Nascimento;
    //conexão com o banco de dados
    public function __construct($bd)
    {
        $this->conn = $bd;
    }
    //Comando de listagem geral
    public function ConsultarClientes(){
        $sqlQuery = "SELECT id, nome, CPF, Endereco, Conta, Digito, Agencias, Data_de_Nascimento, created FROM" . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }
    //Comando de Inserção de clientes
    public function CriarCliente(){
        $sqlQuery = "INSERT INTO
        ". $this->db_table ."
        SET
            nome = :nome,
            CPF = :CPF,
            Endereco = :Endereco,
            Conta = :Conta,
            Digito = :Digito,
            Agencia = :Agencia,
            Data_de_Nascimento = :Data_de_Nascimento";
            
            $stmt = $this->conn->prepare($sqlQuery);

    //Limpeza de dados
    $this->nome= htmlspecialchars(strip_tags($this->nome));
    $this->CPF= htmlspecialchars(strip_tags($this->CPF));
    $this->Endereco= htmlspecialchars(strip_tags($this->Endereco));
    $this->Conta= htmlspecialchars(strip_tags($this->Conta));
    $this->Digito= htmlspecialchars(strip_tags($this->Digito));
    $this->Agencia= htmlspecialchars(strip_tags($this->Agencia));
    $this->Data_de_Nascimento= htmlspecialchars(strip_tags($this->Data_de_Nascimento));
    
    //Atribuição de Dados
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":nome", $this->CPF);
    $stmt->bindParam(":nome", $this->Endereco);
    $stmt->bindParam(":nome", $this->Conta);
    $stmt->bindParam(":nome", $this->Digito);
    $stmt->bindParam(":nome", $this->Agencia);
    $stmt->bindParam(":nome", $this->Data_de_Nascimento);

    if($stmt->execute()){
        return true;
    }
    return false;
    }
    
//Leitura de apenas um cliente
public function pegarUmCliente(){
    $sqlQuery = "SELECT
                 id,
                 nome,
                 CPF,
                 Endereco,
                 Conta,
                 Digito,
                 Agencia,
                 Data_de_Nascimento
                FROM
                " . $this->db_table ."
                WHERE 
                  id = ?
                  LIMIT 0,1";
    $stmt = $this->conn->prepare($sqlQuery);
    $stmt->bindParam(1, $this->id);
    $stmt->execute();
    $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

    $this->nome = $dataRow['nome'];
    $this->CPF = $dataRow['CPF'];
    $this->Endereco = $dataRow['Endereco'];
    $this->Conta = $dataRow['Conta'];
    $this->Digito = $dataRow['Digito'];
    $this->Agencia = $dataRow['Agencia'];
    $this->Data_de_Nascimento = $dataRow['Data_de_Nascimeto'];
}

//Atualização de dados de conta
public function AtualizarCliente(){
    $sqlQuery = "UPDATE
                " . $this->db_table . "
                SET
                    nome = :nome,
                    CPF = :CPF,
                    Endereco = :Endereco,
                    Conta = :Conta,
                    Digito = :Digito,
                    Agencia = :Agencia,
                    Data_de_Nascimento = :Data_de_Nascimento
                WHERE
                    id = :id";

            $stmt = $this->conn->prepare($sqlQuery);

    $this->nome= htmlspecialchars(strip_tags($this->nome));
    $this->CPF= htmlspecialchars(strip_tags($this->CPF));
    $this->Endereco= htmlspecialchars(strip_tags($this->Endereco));
    $this->Conta= htmlspecialchars(strip_tags($this->Conta));
    $this->Digito= htmlspecialchars(strip_tags($this->Digito));
    $this->Agencia= htmlspecialchars(strip_tags($this->Agencia));
    $this->Data_de_Nascimento= htmlspecialchars(strip_tags($this->Data_de_Nascimento));
    
    $stmt->bindParam(":nome", $this->nome);
    $stmt->bindParam(":nome", $this->CPF);
    $stmt->bindParam(":nome", $this->Endereco);
    $stmt->bindParam(":nome", $this->Conta);
    $stmt->bindParam(":nome", $this->Digito);
    $stmt->bindParam(":nome", $this->Agencia);
    $stmt->bindParam(":nome", $this->Data_de_Nascimento);

    if($stmt->execute()){
        return true;
    }
    return false;
    }
//Deletar Cliente 
function DeletarCliente(){
    $sqlQuery = "DELETE FROM" . $this->db_table . "WHERE id = ?";
    $stmt = $this->conn->prepare($sqlQuery);

    $this->id=htmlspecialchars(strip_tags($this->id));
    $stmt->bindParam(1, $this->id);

    if($stmt->execute()){
        return true;
    }
    return false;
}
}
?>
