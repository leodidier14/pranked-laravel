<!DOCTYPE html>
<html>

<head>
    <title>Pranked</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df589c232d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ url('/js/app.js') }}"></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="menu-navbar">
        <div class="navbar-collapse collapse w-100 order-1 order-lg-0 dual-collapse" id="left-menu-navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products.index') }}">
                        <span class="red-textoverlay-link">SHOP</span>SHOP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="red-textoverlay-link">QUI SOMMES NOUS ?</span>QUI SOMMES NOUS ?
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        <span class="red-textoverlay-link">CONTACT</span>CONTACT
                    </a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0" id="mid-menu-navbar">
            <a class="navbar-brand mx-auto" href="#">
                <img class="brandlogo-img" src="" alt="Pranked">
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target=".dual-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </a>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse" id="right-menu-navbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="red-textoverlay-link">S'IDENTIFIER</span>S'IDENTIFIER
                    </a>
                </li>
                <li class="nav-item">
                    <span class="open-shoppingcart" data-menu="#main-nav">
								<a class="nav-link" href="#" id="navbar-shoppingcart">
									<i class="fas fa-shopping-cart" id="nb-shoppingcart">[2]</i>
								</a>
								 </span>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>

<div class="container text-center">
  <div class="row align-items-shop page-banner">
    <div class="col banner">
      Pranked
    </div>
 </div>

<div class="page-title">
	  <div class="row align-items-center underline-title-category">
	    <div class="col">
	    <span class="underline-title">{{ $title }}</span>
	    </div>
	  </div>
</div>

<div class="page-content">
    @yield('content')
</div>

<div style="background-color: white; height: 100px;">

</div>

    <div class="right-menu-shoppingcart">

        <div id="main-nav" class="shoppingcart right-shoppingcart">

            <div class="header-shoppingcart">
                <span class="close-shoppingcart">✕</span>
                <span class="menu-shopping-cart">PANIER</span>
            </div>

            <table class="table" id="table-shoppingcart">
                <thead>
                    <tr>
                        <th class="text-center" id="item-title-shoppingcart"></th>
                        <th class="text-center" id="size-title-shoppingcart">Taille</th>
                        <th class="text-center" id="quantity-title-shoppingcart">Quantité</th>
                        <th class="text-center" id="price-title-shoppingcart">Prix</th>
                        <th class="text-center" id="delete-title-shoppingcart"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><img class="text-center item-content-shoppingcart" src="https://cdn.shopify.com/s/files/1/0277/2202/2987/products/TEE_360x.png?v=1573687645"></th>
                        <td class="text-center td-table-shoppingcart size-content-shoppingcart">S</td>
                        <td class="td-table-shoppingcart price-content-shoppingcart">
                            <input type="text" class="form-control text-center">
                        </td>
                        <td class="text-center td-table-shoppingcart price-content-shoppingcart">€35</td>
                        <td class="text-center td-table-shoppingcart delete-content-shoppingcart">X</td>
                    </tr>
                    <tr>
                        <th><img class="text-center item-content-shoppingcart" src="https://cdn.shopify.com/s/files/1/0277/2202/2987/products/TEE_360x.png?v=1573687645"></th>
                        <td class="text-center td-table-shoppingcart size-content-shoppingcart">S</td>
                        <td class="td-table-shoppingcart price-content-shoppingcart">
                            <input type="text" class="form-control text-center">
                        </td>
                        <td class="text-center td-table-shoppingcart price-content-shoppingcart">€35</td>
                        <td class="text-center td-table-shoppingcart delete-content-shoppingcart">X</td>
                    </tr>
                </tbody>
            </table>

            <div>
                <div style="text-align: right">
                    <span>SOUS-TOTAL</span><span>€105</span>
                    <br>
                    <br>
                    <a href="" class="blackred-btn text-center">PROCEDER AU PAIEMENT</a>
                </div>
                <br>
                <br> Les codes promo, les frais d'envoi et les taxes seront ajoutés à la caisse.
            </div>

        </div>

    </div>

</body>

<footer>
    <ul>
        <li>
            <a href="">Conditions de vente</a>
        </li>
        <li>
            <a href="">Expédition</a>
        </li>
        <li>
            <a href="">Retour</a>
        </li>
        <li>
            <a href="">Confidentialité</a>
        </li>
    </ul>
    <a href="" class="red-copyright-link">@2020 PRANKED</a>
</footer>

</html>








