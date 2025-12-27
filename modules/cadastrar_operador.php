<?php require_once '../config/conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAP-REB | Gestão de Operadores</title>
    <style>
        :root { --blue: #3498db; --bg: #f4f7f6; }
        body { font-family: 'Segoe UI', sans-serif; background: var(--bg); padding: 20px; }
        .card { max-width: 500px; margin: auto; background: white; padding: 25px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h2 { border-bottom: 2px solid var(--blue); padding-bottom: 10px; color: #2c3e50; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-size: 13px; font-weight: bold; margin-bottom: 5px; color: #666; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        .btn-salvar { width: 100%; padding: 12px; background: var(--blue); color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
    </style>
</head>
<body>
    <?php include 'menu.php'; ?>

<div class="card">
    <h2>👤 Novo Colaborador</h2>
    <form action="salvar_operador.php" method="POST">
        <div class="form-group">
            <label>Nome Completo:</label>
            <input type="text" name="nome" placeholder="Ex: Helena Silva" required>
        </div>
        
        <div class="form-group">
            <label>Turno de Trabalho:</label>
            <select name="turno" required>
                <option value="1">Turno 1</option>
                <option value="2">Turno 2</option>
                <option value="3">Turno 3</option>
            </select>
        </div>

        <div class="form-group">
            <label>Caminho da Foto (Avatar):</label>
            <input type="text" name="foto_normal" placeholder="Ex: helena_normal.jpg">
            <small style="color: #999;">Dica: Coloque as fotos na pasta img/fotos/</small>
        </div>

        <button type="submit" class="btn-salvar">CADASTRAR OPERADOR</button>
    </form>
</div>

</body>
</html>
