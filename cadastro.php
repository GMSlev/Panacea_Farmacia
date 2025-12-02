<!DOCTYPE html>
<html>
<head>
    <title>Cadastro - Farmácia</title>
</head>
<body>
    <h2>Cadastrar Novo Funcionário</h2>
    <form action="processa_cadastro.php" method="POST">
        <input type="text" name="nome" placeholder="Nome completo" required>
        <br><br>
        <input type="email" name="email" placeholder="E-mail corporativo" required>
        <br><br>
        <input type="tel" name="telefone" placeholder="(00) 00000-0000" required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <select name="cargo" required>
            <option value="">Selecione o cargo</option>
            <option value="farmaceutico">Farmacêutico</option>
            <option value="caixa">Caixa</option>
            <option value="gerente">Gerente</option>
            <option value="estoquista">Estoquista</option>
        </select>
        <br><br>
        <button type="submit">Cadastrar Funcionário</button>
    </form>
</body>
</html>