@extends('layouts.app')

@section('content')
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="thumbnail-img">
                                            <a href="#">
                                                <img class="img-fluid" src="{{ $item->product->image }}" alt="" />
                                            </a>
                                        </td>
                                        <td class="name-pr">
                                            <a href="#">
                                                {{ $item->product->title }}
                                            </a>
                                        </td>
                                        <td class="price-pr">
                                            <p>Rp @money($item->product->price)</p>
                                        </td>
                                        <td class="quantity-box">
                                            <input type="number" value="{{ $item->qty }}" disabled
                                                class="c-input-text qty text">
                                        </td>
                                        <td class="total-pr">
                                            <p>Rp @money($item->total)</p>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <form action="{{ route('cart.reset') }}" method="POST">
                                @csrf
                                <div class="input-group-append">
                                    <button class="btn btn-theme p-3" type="submit">Reset Pesanan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            @if ($header != null)
                                <div class="ml-auto font-weight-bold">Rp @money($header->total)</div>
                            @endif
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold">Rp 0 </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            @if ($header != null)
                                <div class="ml-auto h5">Rp @money($header->total) </div>
                            @endif
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-11 d-flex shopping-box">
                    @if ($header != null)
                        <a href="{{ route('cart.proses', $header) }}" class="btn btn-success ml-auto">Checkout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
