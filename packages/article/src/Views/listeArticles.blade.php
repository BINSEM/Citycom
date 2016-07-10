@include('parts.header')
<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
  <a href="/articlesSupprimes" class="item">Articles supprimés </a>
</div>
<div class="ui form">
  <div class="field">
      <label>Type</label>
      <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
          <div class="default text">Type</div>
          <div class="menu">
              <div class="item" data-value="1">Galet</div>
              <div class="item" data-value="0">Caillou</div>
              <div class="item" data-value="0">Roche</div>
              <div class="item" data-value="0">Autres</div>
          </div>
      </div>
  </div>
</div>

<h1>Liste des articles</h1>
<div class="ui stackable grid">
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
          <th>Type</th>
          <th>Couleur</th>
          <th>Image</th>
          <th>Détails</th>
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
          <td>{{$article->type}}</td>
          <td>{{$article->couleur}}</td>
          <td><img src="/images/{{$article->img}}" width="60" alt="{{$article->description}}"></td>
          <td>
            <a href="/vueArticle/{{$article->id}}" class="ui button"><i class="list layout icon"></i></a>
          </td>
          <td>
            <a href="/supprimer/{{$article->id}}" class="ui button red"><i class="remove icon"></i></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>