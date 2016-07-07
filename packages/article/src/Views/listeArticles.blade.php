@include('parts.header')
<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
</div>

<h1>Liste des articles</h1>
<table class="ui selectable celled table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nom</th>
      <th>Description</th>
      <th>Prix</th>
      <th>Référence</th>
      <th>Stock</th>
      <th>Categorie</th>
      <th>Image</th>
    </tr>
  </thead>
  <tbody>
    	@foreach($articles as $article)
    <tr>
      <td>{{$article->id}}</td>
      <td>{{$article->nom}}</td>
      <td>{{$article->description}}</td>
      <td>{{$article->prix}}</td>
      <td>{{$article->ref}}</td>
      <td>{{$article->stock}}</td>
      <td>{{$article->categorie}}</td>
      <td>{{$article->img}}</td>
    </tr>
      	@endforeach
  </tbody>
</table>