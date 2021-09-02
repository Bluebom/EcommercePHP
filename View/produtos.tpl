<h3>{$PRODUTOS}<h3>
<hr>
<!-- paginacao superior -->
<section id="paginacaoS" class="container">
    Paginas
</section>
<!-- começa a lista dos produtos -->
<section id="produtos">
    <ul class="container lista">
        {foreach from=$PRO item=P}
        <li>
            <div class="thumbnail">
                <a href="#">
                    <img src="{$CAMINHO_IMG}{$P.pro_img}" alt="{$P.pro_desc}" width="200">
                    <article>
                        
                        <h4 class="name">
                            {$P.pro_nome}
                        </h4>
                        <h3 class="price">
                            R${number_format($P.pro_valor, 2, '.','')}
                        </h3>
                    </article>
                </a>
            </div>
        </li>
        {/foreach}
    </ul>
</section>
<!-- paginacao inferior -->
<section id="paginacaoI" class="container">
    Paginas
</section>