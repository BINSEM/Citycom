<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
  <a href="/articlesSupprimes" class="item">Articles supprimés </a>
</div>
@include('parts.header')
<div class="ui grid">
  <div class="ten wide centered column">
    <form method="POST" action="/nouvelArticle/" class="ui huge form">
      <form method="POST" action="/vueArticle/{{$article->id}}" class="ui huge form">
        {{csrf_field()}}
          <input name="id" placeholder="article" type="hidden" value="{{$article->id}}">    
          <div class="field">
            <label>Nom de l'article</label>
            <input name="nom" placeholder="article" type="text" value="{{$article->nom}}">
          </div>
          <div class="field">
            <label>Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$article->description}}">
          </div>
          <div class="field">
            <label>Prix</label>
            <input type="text" name="prix" placeholder="Prix" value="{{$article->prix}}">
          </div>
        <div class="field">
          <label>Référence</label>
          <input type="text" name="ref" placeholder="Référence" value="{{$article->ref}}">
        </div>
        <label>Catégories</label>
      <div class="two fields">
        <div class="field">
          <label>Couleur</label>
          <input type="text" name="couleur" placeholder="Catégorie">
        </div>
        <div class="field">
          <label>Type</label>
          <input type="text" name="type" placeholder="Catégorie">
        </div>
      </div> 
        <div class="field">
          <label>Image</label>
          <input type="text" name="img" placeholder="Image" value="{{$article->img}}">
        </div>
        <div class="field">
          <label>Stock</label>
          <input type="text" name="stock" placeholder="Stock" value="{{$article->stock}}">
        </div>
        <input class="ui submit button" value="Enregister" type="submit"/>
      </form>
    </div>
  </div>