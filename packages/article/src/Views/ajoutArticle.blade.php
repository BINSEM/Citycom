@include('parts.header')
<div class="ui vertical pointing menu">
  <a href="/listeArticles" class="item">Liste des articles </a>
  <a href="/ajoutArticle" class="item">Ajouter un article </a>
  <a href="/articlesSupprimes" class="item">Articles supprimés </a>
</div>

<h1>Enregistrement d'un nouvel article</h1>
<div class="ui grid">
  <div class="seven wide centered column">
    <form method="POST" action="/nouvelArticle/" class="ui huge form">
      {{csrf_field()}}
      <div class="field">
        <label>Nom de l'article</label>
        <input name="nom" placeholder="article" type="text">
      </div>
      <div class="field">
        <label>Description</label>
        <input type="text" name="description" placeholder="Description">
      </div>
      <div class="field">
        <label>Prix</label>
        <input type="text" name="prix" placeholder="Prix">
      </div>
      <div class="field">
        <label>Référence</label>
        <input type="text" name="ref" placeholder="Référence">
      </div>
      <div class="field">
        <label>Catégorie</label>
        <input type="text" name="categorie" placeholder="Catégorie">
      </div>
      <div class="field">
        <label>Image</label>
        <input type="text" name="img" placeholder="Image">
      </div>
      <div class="field">
        <label>Stock</label>
        <input type="text" name="stock" placeholder="Stock">
      </div>
      <input class="ui submit button" value="Enregister" type="submit"/>
    </form>
  </div>
</div>