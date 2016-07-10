@extends('article::main')
@section('content')
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
        <div class="inline fields" value="{{$article->couleur}}">
        <label for="fruit">Selectionner la couleur:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" name="couleur" value="noir" tabindex="5" class="hidden">
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
  @endsection