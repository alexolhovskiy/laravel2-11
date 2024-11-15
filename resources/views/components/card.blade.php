@props(['name', 'price', 'description'])

<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm">
      <div class="card-header py-3">
        <h4 class="my-0 fw-normal">{{$name}}</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">${{$price}}</h1>
        <p>{{$description}}</p>
        <button type="button" class="w-100 btn btn-lg btn-primary">Buy Now</button>
      </div>
    </div>
</div>