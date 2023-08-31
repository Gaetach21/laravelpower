  <div id="sidebar">

<aside>
<h1 class="bg-primary">Newsletter</h1>
<div class="container mt-2 mb-4">
 <h1 class="text-primary">Abonnement à notre newsletter</h1>
  @if (Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ Session::get('failure') }}</p>
      </div>
  @endif

  @if (Session::has('success'))
      <div class="alert alert-success">
        <p>{{ Session::get('success') }}</p>
      </div>
  @endif
	
<form action="{{ route('newsletter.store') }}" method="post" >
	@csrf
  <label for="mail" class="form-label px-2">Email</label><br> 
<div class="row">
    <div class="form-group col-md-8">
      <input type="text" class="form-control" id="mail" placeholder="Entrez votre adresse email" name="mail">
      @error('mail') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group col-md-4">
      <button type="submit" class="btn btn-primary">Souscrire</button>
    </div>
</div>
</form>

</div>
</aside>

<aside>
  <h1 class="bg-primary">À propos de l'auteur</h1>
  <p id="photo_gaetan"><img src="{{ asset('images/gaetan.jpg') }}" 
  alt="Photo de Gaetan" /></p>
  <p>Je m'appelle Gaetan, je suis ingénieur et passionné 
  des technologies du web.
  Ma passion du web m'a permis de créer plusieurs sites web 
      dynamiques dont laravelpower fait partie.
  La vocation de ce site est de permettre à toute personne 
  désireuse de maitriser le framework Laravel d'atteindre son objectif.</p>
</aside>
</div>