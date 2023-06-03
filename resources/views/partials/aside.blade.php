  <div id="sidebar">

<aside>
<h1 class="bg-primary">Newsletter</h1>
<div class="content">
@if ($errors->any())
  @foreach ($errors->all() as $error)
 <div class="alert alert-danger">{{ $error }}</div>
  @endforeach 
  @endif
<p>S'inscrire à la newsletter.</p>
<form action="#" method="post">
@csrf
<div class="form-group">
    <input type="email" name="mail" id="mail" 
placeholder="Entrez votre adresse email" class="form-control" />
</div>
<p><input type="submit" value="Souscrire" class="bg-primary text-white"/></p>
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