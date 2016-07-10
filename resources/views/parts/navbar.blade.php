
<div class="ui stackable grid">
	<div class="computer tablet only row" id="oriheader">
		<div class="ui stackable fixed menu grid">
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
			<a href="/panier" class="item">
				<i class="shop icon"></i>
				Panier
			</a>
			<div class="right menu">

				<form class="ui form">
					<div class="item">
					@if (Auth::guest())
						<div class="shake-chunk">
							<input type="button" onClick="parent.location='/register'" class="ui fluid yellow button" value="Inscription" />
						</div> 
						&nbsp;
						&nbsp;
						<div class="shake-little">
							<input type="button" onClick="parent.location='/login'" class="ui fluid yellow button" value="Connection" />
						</div>
					</div>
					@else
						@if(Auth::check() && (Auth::user()->roles->contains('nom', 'admin')))
						<div class="item">
							<input type="button" onClick="parent.location='/admin'" class="ui fluid red button" value="Administration" />
						</div>
						@endif
					<div class="item">
						<input type="button" onClick="parent.location='/logout'" class="ui fluid yellow button" value="Déconnection" />
					</div>
					@endif
				</form>
			</div>
		</div>
	</div>
</div>