<?php
    session_start();
	include "conexao.php";
	$titlePage = "Costumizar Conta";
	include "cabecalho.php";
    //include "admteste.php";

    if(isset($_SESSION['id_usuario']) and $_SESSION['id_usuario'] != ''){
        $sql_conta="SELECT * FROM `usuario` JOIN `pessoa` ON `id_pessoa` = `fk_id_pessoa`;";
        $query_envia= mysqli_query($mysql,$sql_conta);
        $fetch_organiza = mysqli_fetch_assoc($query_envia);
    }else{
        //header('location: home.php');
    }
    echo "<pre>";
    var_dump($fetch_organiza);
    echo "</pre>";
?>
<body>
    <div class="container">
        <div class="row">
        <?php 
                include 'admmenu.php';
            ?>
            <div class="col-10">
                <span class="text center-align "><h4><b>ALTERANDO INFORMAÇÕES:</b></h4></span>
                <form method="post" action="costumizar.php">
                    <div class="row flex">
                        <div class="col-6">
                            <!----Email--->
                            <label for="estampa">Atualizar Email:</label>
                            <input type="text" class="form-control" placeholder="email..." id="email" value="<?php echo $fetch_organiza['email']?>" name="email" required>
                        </div>
                        <div class="col-6">
                            <!----Senha--->
                            <label for="marca">Trocar senha:</label>
                            <input type="password" class="form-control" name="senha" id="senha" value="<?php echo $fetch_organiza['senha']?>" required>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-4 mb-3">
                            <!----Endereço--->
                            <label for="avaliação">Atualizar endereço:</label>
                            <input type="text" class="form-control" placeholder="endereço..." id="endereço" value="<?php echo $fetch_organiza['endereço']?>" name="endereço" required>
                        </div>
                        <div class="col-6 mb-3">
                            <!----Telefone--->
                            <label for="imagem">Altualiza telefone:</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $fetch_organiza['telefone']?>" required>
                            <input type="hidden" name="telefone" id="telefone" value="<?php echo $fetch_organiza['telefone']?>">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-dark" > Atualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php 
	include "footer.php";
?>