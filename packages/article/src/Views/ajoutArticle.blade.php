@extends('article::main')
@section('content')
<h1>Enregistrement d'un nouvel article</h1>
<div class="ui grid">
  <div class="seven wide centered column">
    <form method="POST" action="/nouvelArticle/" class="ui huge form">
      {{csrf_field()}}
      <div class="field">
        <label>Nom de l'article</label>
        <input name="nom" placeholder="Nom de l'article" type="text">
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
      <div class="inline fields">
        <label for="fruit">Selectionner la couleur:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="noir" tabindex="0" class="hidden">
            <label>noir</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="gris" tabindex="4" class="hidden">
            <label>gris</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="rose" tabindex="3" class="hidden">
            <label>rose</label>
          </div>
        </div>    
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="marron" tabindex="2" class="hidden">
            <label>marron</label>
          </div>
        </div>    
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="multicolor" tabindex="1" class="hidden">
            <label>multicolor</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="bleu" tabindex="0" class="hidden">
            <label>bleu</label>
          </div>
        </div>
      </div>
            <div class="inline fields">
        <label for="fruit">Selectionner le type:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="type" value="caillou" tabindex="3" class="hidden">
            <label>caillou</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="type" value="galet" tabindex="2" class="hidden">
            <label>galet</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="type" value="roche" tabindex="1" class="hidden">
            <label>roche</label>
          </div>
        </div>    
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="type" value="autre" tabindex="0" class="hidden">
            <label>autre</label>
          </div>
        </div>    
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
@endsection