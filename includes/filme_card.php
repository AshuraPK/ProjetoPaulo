
<div class="col col-3">
                    <figure>
                        <!-- se começa primeiro a tag  figure para prossegir com o figcapture  -->
                        <img src="./assets/img/poster/<?=$value['poster'] ?>"
                            alt="Poster do filme Avatar o caminho da agua" class="foto-produto">
                        <figcaption>
                            <!-- conteudo do card colocar o que esta logo abaixo da foto; -->
                            <h4><?php echo $value['nome'] ?></h4>
                            <!-- o span é o elemento de value, adequado para aplicar estilos aocontrario da div que é um elemento em bloco  -->
                            <span class="preco"><?php echo $value['valor_ingresso'] ?></span>
                            <p class="descricao"><?php echo $value['descricao'] ?></p>
                        </figcaption>
                        <span class="genero">
                            <label style="<?php echo $value['nome'] ?>">Fantasia</label>
                            <label style="background-color: #580259;">Drama</label>
                            <label style="background-color: #D966BA;">Ficção</label>
                        </span>
                    </figure>
                </div>
