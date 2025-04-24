<? PHP
$ServerName = "Localhost";
$Username = "root";
$Password= “”;
$DBNome = "Meu banco";

// Criando conexão

$conn = New mySQL ($Servername,$username)

// Verificando a conexão

if ($conn -> connect _ERROR) {

Die ("falha na conexão: "- $conn -> conne)

}

Echo "conectado com sucesso!",

?>