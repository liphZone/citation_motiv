@extends('layout.quote.index')
@section('title','Citation Unique')
@section('content')

<div style="margin-top: 10px;">
  Thèmes de citations en rapport : <a style="text-decoration: none" href="{{ route('single_subject',$quote->categorie) }}"> #{{ $quote->categorie }}</a>
</div>

<div class="card mt-4">
  <div> 
    <img src="{{$watermark}}" alt="{{ $quote->auteur }}" height="auto;" width="auto;">
  </div>
  <div>
    <small class="text-muted"> 
      <i class="fa fa-heart" aria-hidden="true"></i>
    </small>
    <div style="float: right;">
      <i title="Liker" class="fa fa-heart" aria-hidden="true"></i>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i title="Facebook" class="fa fa-facebook" aria-hidden="true"></i> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i title="Twitter" class="fa fa-twitter" aria-hidden="true"></i>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i title="What's App" class="fa fa-whatsapp" aria-hidden="true"></i>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i title="Pinterest" class="fa fa-pinterest" aria-hidden="true"></i>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <i title="Télécharger" class="fa fa-download" aria-hidden="true"></i>
    </div>
  </div>
</div> 
<hr>
<div>
  <h3> Citations similaires </h3>
  <div class="row">
    <div class="col-md-5">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <div class="col-md-7">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.card -->
 
@endsection