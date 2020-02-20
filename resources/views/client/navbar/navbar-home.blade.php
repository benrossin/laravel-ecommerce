<nav>
    <div class="container">
        <div class="content-navbar">
            <h3><a href="{{ route('home') }}" class="logo-navbar"><img src="https://www.bizzbee.com/on/demandware.static/-/Sites/fr_FR/dw01b1b394/Bizzbee-SFRA/Bizzbee-logo.svg" alt="Bizzbee" style="height: 40px;"></a></h3>
            <ul class="menu-navbar">
                <li>
                    <a href="{{ route('products.show', ['sex' => 'homme']) }}">Homme</a>
                    <div class="sub-nav">
                        <div class="container">
                            <div class="content-sub-nav fadeIn animated">
                                <ul class="w25">
                                    <a href="{{ route('products.by-category', ['sex' => 'homme', 'category' => 'vetements']) }}">vêtements</span>
                                    <li><a href="{{ route('products.by-subcategory', ['sex' => 'homme', 'category' => 'vetements', 'subcategory' => 'polos']) }}">Polos</a></li>
                                    <li><a href="{{ route('products.by-subcategory', ['sex' => 'homme', 'category' => 'vetements', 'subcategory' => 'jeans']) }}">Jeans</a></li>
                                    <li><a href="#">Manteaux & Blousons</a></li>
                                    <li><a href="#">Pullovers</a></li>
                                    <li><a href="#">Sweatshirts</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Chemises</a></li>
                                    <li><a href="#">Pantalons & Bermudas</a></li>
                                    <li><a href="#">Vêtements de sport</a></li>
                                    <li><a href="#">Maillot de bain</a></li>
                                    <li><a href="#">Sous-vêtements</a></li>
                                </ul>
                                <ul class="w25">
                                    <span>vêtements</span>
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">Manteaux & Blousons</a></li>
                                    <li><a href="#">Pullovers</a></li>
                                    <li><a href="#">Sweatshirts</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Chemises</a></li>
                                    <li><a href="#">Pantalons & Bermudas</a></li>
                                    <li><a href="#">Vêtements de sport</a></li>
                                    <li><a href="#">Maillot de bain</a></li>
                                    <li><a href="#">Sous-vêtements</a></li>
                                </ul>
                                <ul class="w25">
                                    <span>vêtements</span>
                                    <li><a href="#">Polos</a></li>
                                    <li><a href="#">Manteaux & Blousons</a></li>
                                    <li><a href="#">Pullovers</a></li>
                                    <li><a href="#">Sweatshirts</a></li>
                                    <li><a href="#">T-Shirts</a></li>
                                    <li><a href="#">Chemises</a></li>
                                    <li><a href="#">Pantalons & Bermudas</a></li>
                                    <li><a href="#">Vêtements de sport</a></li>
                                    <li><a href="#">Maillot de bain</a></li>
                                    <li><a href="#">Sous-vêtements</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="{{ route('products.show', ['sex' => 'femme']) }}">Femme</a></li>
                <li><a href="#">Nouveautés</a></li>
                <li><a href="#">Promotions</a></li>
                <li>
                    <a href="#" class="search-icon-navbar"><i class="fas fa-search"></i></a>
                    <div class="sub-nav">
                        <div class="container">
                            <div class="content-sub-nav fadeIn animated">
                                <form class="subnav-searchbar" action="{{ route('products.search') }}" method="get">
                                    <input type="text" name="s" placeholder="Rechercher un produit" autocomplete="off">
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="tools-navbar">
                <li><a href="#"><i class="fas fa-user"></i></a></li>
                <li>
                    <a href="#" class="cart-icon-navbar">
                        <i class="fas fa-shopping-cart"></i>
                        <div class="number-article small-text">0</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>