@include('parts.header')
<div class="ui vertical pointing menu">
	<a href="/listeArticles" class="item">Liste des articles </a>
	<a href="/ajoutArticle" class="item">Ajouter un article </a>
	<a href="/articlesSupprimes" class="item">Articles supprimés </a>
</div>
<!-- champ détail de l'article -->
<h1>{{$article->nom}}</h1>

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui medium rounded image">
				<img width="250" src="/images/{{$article->img}}">
			</div>
		</div>
		<div class="height wide column">
			<p>{{$article->description}}</p>
		</div>
		<div class="three wide column">
			<div class="meta">
				Identifiant: {{$article->id}}
			</div>
			<div class="meta">
				Référence: {{$article->ref}}
			</div>
			<div class="meta">
				Prix: {{$article->prix}}
			</div>
			<div class="meta">
				Catégorie: {{$article->categorie}}
			</div>
			<div class="meta">
				Stock: {{$article->stock}}
			</div>
		</div>
	</div>
			<div class="ui button red">
				<a href="/suppression/{{$article->id}}"><i class="delete icon"></i>Supprimer</a>
			</div>
			<div class="ui button">
				<a href="/editerArticle/{{$article->id}}">Modifier</a>
			</div>