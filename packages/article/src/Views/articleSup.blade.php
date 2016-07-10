@include('parts.header')
<div class="ui vertical pointing menu">
	<a href="/listeArticles" class="item">Liste des articles </a>
	<a href="/ajoutArticle" class="item">Ajouter un article </a>
	<a href="/articlesSupprimes" class="item">Articles supprimés </a>
</div>
<!-- champ détail de l'article -->
<h1>{{$articleSup->nom}}</h1>

<div class="ui centered internally celled grid">
	<div class="row">
		<div class="three wide column">
			<div class="ui medium rounded image">
				<img width="250" src="/images/{{$articleSup->img}}">
			</div>
		</div>
		<div class="height wide column">
			<p>{{$articleSup->description}}</p>
		</div>
		<div class="three wide column">
			<div class="meta">
				Identifiant: {{$articleSup->id}}
			</div>
			<div class="meta">
				Référence: {{$articleSup->ref}}
			</div>
			<div class="meta">
				Prix: {{$articleSup->prix}}
			</div>
			<div class="meta">
				Catégorie: {{$articleSup->categorie}}
			</div>
			<div class="meta">
				Stock: {{$articleSup->stock}}
			</div>
		</div>
	</div>
			<div class="ui button red">
				<a href="/suppression/{{$articleSup->id}}"><i class="delete icon"></i>Supprimer</a>
			</div>
			<div class="ui button">
				<a href="/editerArticle/{{$articleSup->id}}">Modifier</a>
			</div>