<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>show offer</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-success">Cart Page</h1>
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <th width="50%">Product</th>
                    <th width="10%">price</th>
                    <th width="8%">Quantity</th>
                    <th width="22%">Sub Total</th>
                    <th width="10%"></th>
                </thead>
                <tbody>

                    @php $total = 0; @endphp
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $product)
                            @php
                                $sub_total = $product['price'] * $product['quantity'];
                                $total += $sub_total;
                            @endphp
                            <tr>
                                <td>
                                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid"
                                        width="150">
                                    <span>{{ $product['name'] }}</span>
                                </td>
                                <td>₹{{ $product['price'] }}</td>
                                <td>{{ $product['quantity'] }}</td>
                                <td>₹{{ $sub_total }}</td>
                                <td><a href="{{ route('remove', [$id]) }}" class="btn btn-danger">X</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <a href="{{ route('products') }}" class="btn btn-warning">Continue Shoping</a>
                        </td>
                        <td colspan="2"></td>
                        <td><strong>Total :- ₹{{ $total }}</strong></td>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>


</body>

</html>
