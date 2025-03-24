GNU nano 5.8                                               SamplePage.php                                                          <!DOCTYPE html>
<html>
<head>
    <title>Sistema Integrado</title>
    <style>
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; }
        .section { margin-bottom: 40px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .form-container { margin: 20px 0; }
        input[type="text"], textarea { width: 300px; margin: 5px 0; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Seção para Funcionários -->
        <div class="section">
            <h2>Funcionários</h2>
            <?php
            require '/var/www/inc/dbinfo.inc';
            $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            // Listar Funcionários
            $sql_employee = "SELECT * FROM employee";
            $result_employee = $conn->query($sql_employee);

            if ($result_employee->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nome</th></tr>";
                while($row = $result_employee->fetch_assoc()) {
                    echo "<tr><td>".$row["empid"]."</td><td>".$row["name"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Nenhum funcionário cadastrado.</p>";
            }
            ?>
        </div>

        <!-- Seção para Produtos -->
        <div class="section">
            <h2>Produtos</h2>

            <!-- Formulário de Cadastro de Produtos -->
            <div class="form-container">
                <form method="POST" action="">
                    <input type="text" name="nome" placeholder="Nome do Produto" required><br>
                    <textarea name="descricao" placeholder="Descrição" required></textarea><br>
                    <input type="number" name="preco" step="0.01" placeholder="Preço (R$)" required><br>
                    <input type="submit" name="cadastrar_produto" value="Cadastrar Produto">
                </form>
            </div>

            <!-- Listagem de Produtos -->
            <?php
            // Processar Cadastro de Produtos
            if (isset($_POST['cadastrar_produto'])) {
                $nome = $_POST['nome'];
                $descricao = $_POST['descricao'];
                $preco = $_POST['preco'];

                $sql_insert = "INSERT INTO PRODUTOS (nome, descricao, preco) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql_insert);
                $stmt->bind_param("ssd", $nome, $descricao, $preco);

                if ($stmt->execute()) {
                    echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
                } else {
                    echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
                }
                $stmt->close();
            }

            // Listar Produtos
            $sql_produtos = "SELECT * FROM PRODUTOS";
            $result_produtos = $conn->query($sql_produtos);

            if ($result_produtos->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Data</th></tr>";
                while($row = $result_produtos->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["id"]."</td>
                            <td>".$row["nome"]."</td>
                            <td>".$row["descricao"]."</td>
                            <td>R$ ".number_format($row["preco"], 2, ',', '.')."</td>
                            <td>".$row["data_cadastro"]."</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p>Nenhum produto cadastrado.</p>";
            }

            $conn->close();
            ?>
        </div>
    </div>
</body>
</html>