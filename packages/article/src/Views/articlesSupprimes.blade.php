@include('parts.header')
<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
  <a href="/articlesSupprimes" class="item">Articles supprimés </a>
</div>

<h1>Liste des articles supprimés</h1>
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
          <th>Type</th>
          <th>Couleur</th>
          <th>Image</th>
          <th>Détails</th>
          <th>Restaurer</th>
          <th>Supprimer Définitivement</th>
        </tr>
      </thead>
      <tbody>
        @foreach($articlesSup as $articleSup)
        <tr>
          <td>{{$articleSup->id}}</td>
          <td>{{$articleSup->nom}}</td>
          <td>{{$articleSup->description}}</td>
          <td>{{$articleSup->prix}}</td>
          <td>{{$articleSup->ref}}</td>
          <td>{{$articleSup->stock}}</td>
          <td>{{$articleSup->type}}</td>
          <td>{{$articleSup->couleur}}</td>
          <td>{{$articleSup->categorie}}</td>
          <td><img src="/images/{{$articleSup->img}}" width="60" alt="{{$articleSup->description}}"></td>
          <td><a href="/articleSup/{{$articleSup->id}}" class="ui button"><i class="list layout icon"></i></a></td>
          <td><a href="/restaurer/{{$articleSup->id}}" class="ui button"><i class="reply icon"></i></a></td>
          <td><a href="/supprDef/{{$articleSup->id}}" class="ui button red"><i class="remove icon"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>