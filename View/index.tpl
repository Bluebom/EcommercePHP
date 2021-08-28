<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet preload" as="style" onload="this.rel = 'stylesheet'" href="{$GET_TEMA}/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet preload prefetch" as="style" onload="this.rel = 'stylesheet'" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Source+Serif+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" crossorigin="anonymous">
    <title>{$TITLE_}</title>
</head>
<body>
    <header class="container"></header>
    <section class="nav">
        <nav class="container">
            <ul class="container">
                <li><a href="{$GET_HOME}"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="{$PAG_MINHACONTA}"><i class="fas fa-user"></i> Minha Conta</a></li>
                <li><a href="{$PAG_CARRINHO}"><i class="fas fa-shopping-cart"></i> Carrinho</a></li>
                <li><a href="{$PAG_CONTATO}"><i class="fas fa-envelope"></i> Contato</a></li>
            </ul>
            <div class="menuHamburguer">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="search-box grid-5">
                <input type="text" name="" class="search-txt" placeholder="Digite para buscar">
                <a href="#" class="search-btn">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </nav>
    </section>
    <section class="secFather container" style="margin-top: 1rem;">
        <aside class="grid-3">
            <ul>
                    <li><h3>Categorias</h3></li>
                    <li><p> <i class="fas fa-angle-right"></i> Presentes</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Brinquedos</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Presentes</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Brinquedos</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Presentes</p></li>
                    <li><p> <i class="fas fa-angle-right"></i> Brinquedos</p></li>
                </ul>
                
        </aside>
        <main class="grid-13">
            <section class="breadcrumbs">
                <span><i class="fas fa-home"></i> Home</span>
                <span>/</span>
                <span>Produtos</span>
                <span>/</span>
                <span>Info</span>
            </section>
            <section class="main">
                {php}
                Rotas::get_page();
                {/php}
            </section>
        </main>
    </section>
    <footer>
        <section class="container">
            <h4>{$TITLE_}</h4>
            <p>Todos os direitos reservados - Franklin Henrique &copy;</p>
        </section>
    </footer>
    <script src="{$GET_TEMA}/assets/js/menuHamburguer.js"></script>
</body>
</html>