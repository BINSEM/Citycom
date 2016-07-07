@extends('layouts.main')
@section('content')

<div class="ui medium form">
  <div class="four fields">
    <div class="field">
      <label>Nom de l'article</label>
      <input placeholder="article" type="text">
    </div>
    <div class="field">
      <label>Identifiant de l'article</label>
      <input placeholder="Id" type="text">
    </div>
    <div class="field">
    <label>Description</label>
    <input type="text" name="description" placeholder="Description">
  </div>
  <div class="field">
    <label>Prix</label>
    <input type="text" name="prix" placeholder="Prix">
  </div>
  </div>
  <div class="field">
    <label>Référence</label>
    <input type="text" name="reference" placeholder="Référence">
  </div>
  <div class="field">
    <label>Catégorie</label>
    <input type="text" name="categorie" placeholder="Catégorie">
  </div>
  <div class="field">
    <label>Image</label>
    <input type="text" name="image" placeholder="Image">
  </div>
  <div class="field">
    <label>Stock</label>
    <input type="text" name="stock" placeholder="Stock">
  </div>
  <div class="ui submit button">Submit</div>
</div>
@endsection