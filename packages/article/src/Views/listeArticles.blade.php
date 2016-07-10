@extends('article::main')
@section('content')
<div class="ui stackable grid">
  <div class="seven wide centered column">
    <form class="ui form" method="get" action="/listeArticles">
      <div class="two fields">
        <div class="field">
          <label>Type</label>
          <div class="ui selection dropdown">
            <input type="hidden" name="type">
            <i class="dropdown icon"></i>
            <div class="default text">Type</div>
            <div class="menu">
              <div class="item" data-value="galet">Galet</div>
              <div class="item" data-value="caillou">Caillou</div>
              <div class="item" data-value="roche">Roche</div>
              <div class="item" data-value="autre">Autres</div>
            </div>
          </div>
        </div>
        <div class="field">
          <label>Couleur</label>
          <div class="ui selection dropdown">
            <input type="hidden" name="couleur">
            <i class="dropdown icon"></i>
            <div class="default text">Type</div>
            <div class="menu">
              <div class="item" data-value="gris">Gris</div>
              <div class="item" data-value="noir">Noir</div>
              <div class="item" data-value="rose">Rose</div>
              <div class="item" data-value="bleu">Bleu</div>
              <div class="item" data-value="multicolor">Multicolor</div>
            </div>
          </div>
        </div>
      </div>   
      <button class="ui button" type="submit">Rechercher</button>
    </form>
  </div>
</div>

<h1>{{count($articles)}} articles</h1>

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

@endsection