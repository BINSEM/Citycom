@include('parts.header')
<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
</div>

<h1>Liste des articles</h1>
<div class="ui grid">
  <div class="twelve wide centered column">
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
          <th>Détail</th>
          <th>Supprimer</th>
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
          <td><img src="../images/{{$article->img}}" alt="{{$article->description}}"></td>
          <td>
            <a href="/vueArticle/{{$article->id}}" class="ui button">Détails</a>
          </td>
          <td>
            <a href="/suppressionArticle/{{$article->id}}" class="ui button red"><i class="remove icon"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>