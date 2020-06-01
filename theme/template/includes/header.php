<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <a href="<?php echo HB_URL; ?>" class="brand">
                    <img src="<?php echo HB_PATH_IMG_URL; ?>logo.png" alt="Korova" title="Korova">
                </a>
            </div>
            <div class="col-9">
                <div class="search-login-cart">
                    <div class="search">
                        <form name="search" autocomplete="off">
                            <input type="text" name="q" placeholder="BUSCAR" value="" required="">
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="facebook-login">
                        <a class="fb_button" onclick="login();return false;" href="javascript:void(0)">
                            <span>Entrar</span>
                        </a>
                    </div>
                    <div class="account">
                        <a href="https://korova.com.br/customer/account/" title="Minha conta">
                            <img src="https://korova.com.br/skin/frontend/korova/default/images/svg/user.svg">
                        </a>
                    </div>
                    <div class="cart">
                        <a href="javascript:;" onclick="abrirCarrinho()" class="bt_carrinho" title="Abrir carrinho">
                            <img class="tra" height="19" src="https://korova.com.br/skin/frontend/korova/default/images/carrinho.png">
                        </a>
                    </div>
                </div>
                <nav class="menu-wrapper">
                    <ul>
                        <li class="destaque"><a class="color1" href="https://korova.com.br/novidades/c">Novidades</a></li>
                        <li><a href="https://korova.com.br/krvart/c">KRV ART</a></li>
                        <li class="destaque"><a class="color2" href="https://korova.com.br/liquida/c">LIQUIDA</a></li>
                        <li><a href="https://korova.com.br/basics/c">BASICS</a></li>
                        <li class="dropdown">
                            <a href="https://korova.com.br/produtos/c">Produtos</a>
                            <div class="submenu">
                                <div class="sub_menu row">
                                    <div class="col-4">
                                        <a class="tra" href="https://korova.com.br/produtos/camisetas/c">
                                            Camisetas </a>
                                        <a class="tra" href="https://korova.com.br/produtos/moletons/c">
                                            Moletons </a>
                                        <a class="tra" href="https://korova.com.br/produtos/calcas/c">
                                            Calças </a>
                                        <a class="tra" href="https://korova.com.br/produtos/tops/c">
                                            Tops </a>
                                        <a class="tra" href="https://korova.com.br/produtos/camisas/c">
                                            Camisas </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="tra" href="https://korova.com.br/produtos/bermudas/c">
                                            Bermudas </a>
                                        <a class="tra" href="https://korova.com.br/produtos/tall-tees/c">
                                            Tall Tees </a>
                                        <a class="tra" href="https://korova.com.br/produtos/vestidos/c">
                                            Vestidos </a>
                                        <a class="tra" href="https://korova.com.br/produtos/shorts/c">
                                            Shorts </a>
                                        <a class="tra" href="https://korova.com.br/produtos/acessorios/c">
                                            Acessórios </a>
                                    </div>
                                    <div class="col-4">
                                        <a class="tra" href="https://korova.com.br/produtos/underwear/c">
                                            Underwear </a>
                                        <a class="tra" href="https://korova.com.br/produtos/beachwear/c">
                                            Beachwear </a>
                                        <a class="tra" href="https://korova.com.br/produtos/korova-basic-packs/c">
                                            Basic Packs </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="https://korova.com.br/kustom/c">Kustom</a></li>
                        <li><a href="https://korova.com.br/colecoes-233/c">Coleções</a></li>
                        <li><a href="/blog">BLOG</a></li>
                    </ul>
                </nav>
            </div>
            <div id="menuToggle">
                <input id="vertical-menu" type="checkbox" />
                <label for="vertical-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <ul id="menu">
                    <li><img src="<?php echo HB_PATH_IMG_URL; ?>logo.png" alt="Korova" title="Korova"></li>
                    <li class="destaque"><a class="color1" href="https://korova.com.br/novidades/c">Novidades</a></li>
                    <li><a href="https://korova.com.br/krvart/c">KRV ART</a></li>
                    <li class="destaque"><a class="color2" href="https://korova.com.br/liquida/c">LIQUIDA</a></li>
                    <li><a href="https://korova.com.br/basics/c">BASICS</a></li>
                    <li><a href="https://korova.com.br/produtos/c">Produtos</a></li>
                    <li><a href="https://korova.com.br/kustom/c">Kustom</a></li>
                    <li><a href="https://korova.com.br/colecoes-233/c">Coleções</a></li>
                    <li><a href="/blog">BLOG</a></li>
                    <li class="facebook-login">
                        <a class="fb_button" onclick="login();return false;" href="javascript:void(0)">
                            <span>Entrar</span>
                        </a>
                    </li>
                    <li class="account">
                        <a href="https://korova.com.br/customer/account/" title="Minha conta">
                            <img src="https://korova.com.br/skin/frontend/korova/default/images/svg/user.svg">
                        </a>
                    </li>
                    <li class="cart">
                        <a href="javascript:;" onclick="abrirCarrinho()" class="bt_carrinho" title="Abrir carrinho">
                            <img class="tra" height="19" src="https://korova.com.br/skin/frontend/korova/default/images/carrinho.png">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>