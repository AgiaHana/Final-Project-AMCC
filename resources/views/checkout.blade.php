<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="icon" href="{{asset('img/logo.png')}}" type="gambar/tipe ikon">
</head>
<body>

<div id="snap-button" data-token="{{ $snapToken }}"></div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
<script>
    window.snap.pay('{{ $snapToken }}');
</script>

</body>
</html>
