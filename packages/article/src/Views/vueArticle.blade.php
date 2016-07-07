@include('parts.header')
<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
</div>
<!-- champ détail de l'article -->
<h1>Nouvel article enregistré</h1>
<label for="id">Id</label>
<div class="ui field">{{$article->id}}</div>
<label for="nom">Nom</label>
<div class="ui field">{{$article->nom}}</div>
<label for="description">Description</label>
<div class="ui field">{{$article->description}}</div>
<label for="prix">Prix</label>
<div class="ui field">{{$article->prix}}</div>
<label for="ref">Référence</label>
<div class="ui field">{{$article->ref}}</div>
<label for="stock">Stock</label>
<div class="ui field">{{$article->stock}}</div>
<label for="categorie">Catégorie</label>
<div class="ui field">{{$article->categorie}}</div>


<!-- menu vertical de modification des données -->
<div class="ui vertical pointing menu">
  <a href="/editerArticle/{{$article->id}}" class="item">Editer </a>
  <a href="/suppression/{{$article->id}}" class="item">Supprimer </a>
</div>