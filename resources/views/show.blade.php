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
    <h1 class="text-center text-success">Big Billion Offer</h1>
    <hr class="text-primary">
    <div class="container">
        <div class="row">
            @if (count($products) > 0)
                @foreach ($products as $product)
                    <div class="col-lg-3  border " style="height: 400px">
                        <div class="cart m-3">
                            <div class="card-header" style="height: 200px">
                                <img src="{{ $product->image }}" alt="Image 1" class="w-100 h-100 card-img-top">

                            </div>
                            <div class="caption" style="height: 120px; overflow-y: hidden;">
                                <h3>{{ $product->name }}</h3>
                                <p>{{ $product->description }}</p>

                            </div>
                            <div class="btn">
                                <span>₹{{ $product->price }}</span>
                                <a href="{{ route('addcart', [$product->id]) }}" class="btn btn-success float-right">Add
                                    to Cart</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>


</body>

</html>
