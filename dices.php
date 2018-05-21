<!-- Include Header -->
<?php include('partials/header.php'); ?>

<div class="container">
    <h1>Dados RPG</h1>
    <fieldset class="choose">
        <form method="post" id="form-dice">

            <label>Escolha o Dado</label>
            <select name="selopcao">
                <option value="d4">D4</option>
                <option value="d6">D6</option>
                <option value="d8">D8</option>
                <option value="d10">D10</option>
                <option value="d12">D12</option>
                <option value="d20">D20</option>
            </select>

            <input type="text" name="txtqtd" placeholder="Quantidade">

            <input type="submit" value="Rolar" id="dice_roll">

        </form>
    </fieldset>

    <fieldset class="result">

        <h4 class="title-result">Resultado:</h4>

        <div class="dice-result">
            <!-- Resultados injetados aqui via AJAX, ver javascript/app.js -->
        </div>

    </fieldset>
</div>

<!-- include footer -->
<?php include('partials/footer.php'); ?>