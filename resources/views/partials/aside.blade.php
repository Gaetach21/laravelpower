  <div id="sidebar">
  <aside>
<h1 class="bg-primary">Catégories</h1>
<ul>
<a href="#" id="actual">première catégorie</a><br />
<a href="#" id="actual">deuxième catégorie</a><br />
</ul>
</aside>

<aside>
<h1 class="bg-primary">Newsletter</h1>
<p>S'inscrire à la newsletter.</p>
<form action="#" method="post">
@csrf
<p> 
<input type="email" name="mail" id="mail" 
placeholder="Entrez votre adresse email" size="24" maxlength="20" />
</p>
<p><input type="submit" value="Souscrire" class="bg-primary text-white"/></p>
</form>
</aside>

<aside>
<h1 class="bg-primary">À propos de l'auteur</h1>
<p id="photo_gaetan"><img src="{{ asset('images/gaetan.jpg') }}" 
alt="Photo de Gaetan" /></p>
<p>Je m'appelle Gaetan, je suis ingénieur et passionné 
des technologies du web.<br />
Ma passion du web m'a permis de créer plusieurs sites web 
    dynamiques dont laravelpower fait partie.<br />
La vocation de ce site est de permettre à toute personne 
désireuse de maitriser le framework Laravel d'atteindre son objectif.</p>
</aside>
</div>