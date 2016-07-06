@include('parts.header')
<form method="POST" action="/updateArticle/{{$article->id}}" class="ui huge form">
  {{csrf_field()}}
  {{method_field('PUT')}}
  <div class="two fields">
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
  </div>
  <div class="field">
    <label>Référence</label>
    <input type="text" name="ref" placeholder="Référence" value="{{$article->ref}}">
  </div>
  <div class="field">
    <label>Catégorie</label>
    <input type="text" name="categorie" placeholder="Catégorie" value="{{$article->categorie}}">
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