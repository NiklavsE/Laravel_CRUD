@component('mail::message')
# New Product: {{ $product->name }}

{{ $product->description }}

@component('mail::button', ['url' => url('/products/' . $product->id)])
View Product
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
