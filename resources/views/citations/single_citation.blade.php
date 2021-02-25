@extends('layout.quote.index')
@section('title','Citation Unique')
@section('content')

<div style="margin-top: 10px;">
  Thèmes de citations en rapport : <a style="text-decoration: none" href="{{ route('single_subject',$quote->categorie) }}"> #{{ $quote->categorie }}</a>
</div>

<div class="card mt-4 mb-4">
  <div> 
    <img src="{{$watermark}}" alt="{{ $quote->auteur }}" height="auto;" width="auto;">
  </div>
  <div>
    <small class="text-muted"> 
      <i class="fa fa-heart" aria-hidden="true"></i>
    </small>
    <div style="float: right;">
      <a href="{{ route('download',$quote->id) }}"> <i title="Télécharger" class="fa fa-download" aria-hidden="true"></i> </a>
      
    </div>
  </div>
</div> 
  <h3> Citations similaires </h3>

  <div class="card-columns">

    @foreach ($other_quote as $quote)

      <div class="card border-dark mb-3" style="max-width: 18rem;">
        <div class="card-body text-dark">
          <h5 class="card-title"> 
            <a href="{{ route('single_citation',$quote->id) }}" style="text-decoration:none;color:black;"> 
              &#96;&#96;{{ $quote->citation }}&#180;&#180; 
            </a>  
          </h5>
          <p class="card-text">
             <a href="#" class="text-decoration-none text-primary"> 
              - {{ $quote->auteur }}
             </a></p>
        </div>
      </div>

    @endforeach

  </div>

<!-- /.card -->
 
@endsection