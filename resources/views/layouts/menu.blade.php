<!DOCTYPE html>
<html>

<head>
    <title>Pranked</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('extra-meta')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />

    @yield('extra-script')


</head>

<header>
    <nav class="navbar navbar-expand-lg fixed-top" id="menu-navbar">
        <div class="navbar-collapse collapse w-100 order-1 order-lg-0 dual-collapse" id="left-menu-navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('products.index') ? 'active' : '' }}" href="{{ route('products.index') }}">
                        <span class="red-textoverlay-link">SHOP</span>SHOP
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="red-textoverlay-link">QUI SOMMES NOUS ?</span>QUI SOMMES NOUS ?
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::currentRouteNamed('contact.index') ? 'active' : '' }}" href="{{ route('contact.index') }}">
                        <span class="red-textoverlay-link">CONTACT</span>CONTACT
                    </a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0" id="mid-menu-navbar">
            <a class="navbar-brand mx-auto" href="#">
                <a href="{{ route('products.index') }}"><img class="brandlogo-img" src="https://www.zupimages.net/up/20/05/uaef.png"></a>
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
                <li class="nav-item"  id="refresh3">
                    <span class="open-shoppingcart" data-menu="#main-nav" id="refresh2">
								<a class="nav-link" href="#" id="navbar-shoppingcart">
									<i class="fas fa-shopping-cart" id="nb-shoppingcart">[{{ Cart::count() }}]</i>
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


    @if(session('success'))
    <div class="modal" id="getCodeModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Info</h5>
            </div>
            <div class="modal-body">
              <p>{{ session('success') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="blackred-btn text-center" id="btn-modal-shop" data-dismiss="modal">PANIER</button>
                <a type="button" class="blackred-btn text-center" href="{{ route('products.index') }}">SHOP</a>
            </div>
          </div>
        </div>
      </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif


    @yield('content')


<div style="background-color: white; height: 100px;">

</div>

    <div class="right-menu-shoppingcart" id="right-menu-shoppingcart">

        <div id="main-nav" class="shoppingcart right-shoppingcart">

            <div class="header-shoppingcart">
                <span class="close-shoppingcart">✕</span>
                <span class="menu-shopping-cart">PANIER</span>
            </div>
            <div id="refresh">
            @if (Cart::count() > 0)
            <table class="table" id="table-shoppingcart">
                <thead>
                    <tr>
                        <th class="text-center" id="item-title-shoppingcart"></th>
                        <th class="text-center" id="size-title-shoppingcart">Taille</th>
                        <th class="text-center" id="quantity-title-shoppingcart">Quantité</th>
                        <th class="text-center" id="price-title-shoppingcart">Prix</th>
                        {{-- <th class="text-center" id="delete-title-shoppingcart"></th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $product)
                    <tr>

                        <th><img class="text-center item-content-shoppingcart" src="{{ $product->model->image }}"></th>
                        <td class="text-center td-table-shoppingcart size-content-shoppingcart">S</td>
                        <td class="td-table-shoppingcart quantity-content-shoppingcart">
                            <select name="quantity" class="custom-select text-center quantity" data-id="{{ $product->rowId }}">
                                @for ($i = 0; $i < 5 + 1 ; $i++)
                                <option {{ $product->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
                            </select>
                        </td>
                        <td class="text-center td-table-shoppingcart price-content-shoppingcart">{{ getPrice($product->subtotal()) }}</td>

                    </tr>
            @endforeach
                </tbody>
            </table>
            @else
            <p>Votre panier est vide</p>
            @endif

            <div>
                <div style="text-align: right">
                    <span>SOUS-TOTAL</span><span id="subtotal"> {{ getPrice(Cart::subtotal()) }}</span>
                    <br>
                    <br>
                    <a href="{{ route('stripe.index') }}" class="blackred-btn text-center" id="submitButton">PROCEDER AU PAIEMENT</a>
                </div>
                <br>
                <br> Les codes promo, les frais d'envoi et les taxes seront ajoutés à la caisse.
            </div>

        </div>
    </div>
    </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/df589c232d.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('/js/app.js') }}"></script>
<script>

$(document).on('change', '.quantity', function(){
    let id = $(this).attr('data-id') // $(this) is an instance of the current select changed
    let quantityvalue = $(this).val()
    axios.post(`/panier/${id}`, {
        quantity: quantityvalue,
        _method: 'patch'

        })
        .then(function (response) {
           // console.log(response);
           console.log("refresh");
            $("#refresh").load(location.href + " #refresh");
            $("#refresh2").load(location.href + " #refresh3");
        })
        .catch(function (error) {
            console.log("erreur");
           // console.log(error);
        });
    });

</script>
@yield('extra-js')

</body>

</html>








