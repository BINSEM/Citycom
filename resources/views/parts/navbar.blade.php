
<div class="ui grid">
	<div class="computer tablet only row" id="oriheader">
		<div class="ui fixed menu grid">
			<a class="item" href="/">Accueil</a>
			<div class="ui dropdown item">
				Catégories
				<i class="dropdown icon"></i>
				<div class="ui menu">
					<a class="item">Gros Cailloux</a>
					<a class="item">Moyens Cailloux</a>
					<a class="item">Petits Cailloux</a>
				</div>
			</div>
			<a class="item">Aide</a>
			<div class="right menu">
				<!-- <form class="ui form">
					<div class="item">
						&nbsp;
						&nbsp;
						<div class="shake-little">
							<input type="button" onClick="parent.location='/login'" class="ui fluid yellow button" value="Connexion" />
						</div>
					</div>
				</form> -->
				<form class="ui form">
					@if (Auth::guest())
					<div class="item">
						<div class="shake-chunk">
							<input type="button" onClick="parent.location='/register'" class="ui fluid yellow button" value="Inscription" />
						</div> 
						<!-- <input type="button" onClick="parent.location='/register'" class="ui fluid primary button" value="Inscription" /> -->
						&nbsp;
						&nbsp;
						<input type="button" onClick="parent.location='/login'" class="ui fluid teal button" value="Connection" />
					</div>
					@else
					<div class="item">
					<input type="button" onClick="parent.location='/logout'" class="ui fluid teal button" value="Déconnection" />
					</div>
					@endif
				</form>
			</div>
		</div>
	</div>
</div>







