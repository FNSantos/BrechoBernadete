<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>CMS Bernadete | Cadastro de Funcionário</title>
        <link type="text/css" rel="stylesheet" href="CSS/style.css">
        <script src="JavaScript/jquery-3.3.1.js" charset="utf-8"></script>
        <script src="JavaScript/ajax_funcionario_crud.js" charset="utf-8"></script>
    </head>
    <body>
        <?php require_once("cabecalho.php")?>
        <div id="main">
            <div id="main_content">
                <?php require_once("menu.php") ?>
                <div id="content">
                    <div class="title_content" style="float:none;">
                        Postagem Blog
                    </div>
                    <div class="line_input">
                        <div class="content_input">
                            <div class="title_input">
                                Titulo
                            </div>
                            <input type="text" name="txt_nome" id="txt_nome" placeholder="Digite o nome do funcionário." class="input_text">
                        </div>
                        
                    </div>
                    
                    
                    <div class="line_input">
                        <div class="content_input" style="width:500px; heght:500px;">
                            <div class="title_input">
                                Descrição
                            </div>
                            <textarea name="slt_estado" id="slt_estado" class="input_textarea" >
                            </textarea>
                        </div>
                        
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="width:500px;">
                            <div class="title_input">
                                Categoria
                            </div>
                            <select name="slt_nivel" id="slt_nivel" class="input_select">
                                <option value="0">Selecione o Nível</option>
                            </select>
                        </div>
                           
                    </div>
                    <div class="line_input">
                        <div class="content_input" style="width:450px;">
                            <div class="title_input">
                                Senha
                            </div>
                            <input type="password" name="txt_senha" id="txt_senha" placeholder="Digite o nome do funcionário." class="input_text" style="width:440px;">
                        </div>
                        <div class="content_input" style="width:450px;margin-left:50px;">
                            <div class="title_input">
                                Confirmar Senha
                            </div>
                            <input type="password" name="txt_confirmar" id="txt_confirmar" placeholder="Digite o CPF do funcionário." class="input_text" style="width:440px;">
                        </div>
                    </div>
                    <div class="line_input">
                        <button name="btn_salvar" id="btn_salvar" class="buttons" style="margin-left:830px;">Salvar</button>
                        <a href="adm_funcionario.php">
                            <button name="btn_cancelar" class="buttons">Cancelar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("rodape.php") ?>
    </body>
</html>
