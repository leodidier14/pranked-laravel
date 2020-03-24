@extends('layouts.menu', ['title' => 'Mes commandes'])

@section('content')
                    @foreach (Auth()->user()->orders as $order)
                        <div class="card">
                            <div class="card-header">
                            Commande passée le {{ Carbon\Carbon::parse($order->payment_created_at)->format('d/m/Y à H:i:s') }} d'un montant de <strong>{{ getPrice($order->amount) }}</strong>
                            </div>
                            <div class="card-body">
                                <h6>Liste des produits</h6>
                                @foreach (unserialize($order->products) as $product)
                                    <div>Nom du produit : {{ $product[0] }}</div>
                                    <div>Prix : {{ getPrice($product[1]) }}</div>
                                    <div>Quantité : {{ $product[2] }}</div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

@endsection

