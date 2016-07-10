
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
			<a class="item" href="/cart">
			    <i class="shop icon"></i>
			Panier</a>

			<div class="right menu">

				@if (Auth::guest())
				<form class="ui form">
					<div class="item">
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
					<div class="item">
						<input type="button" onClick="parent.location='/logout'" class="ui fluid teal button" value="Déconnection" />
					</div>
				</form>
				@endif

			</div>
		</div>
	</div>
</div>

<div class="ui stackable grid">
	<div class="mobile only row">
		<div class="ui fixed menu">
			<div class="ui vertical menu" >
				<div class="ui menu ori ">
					<a class="item" href="/">Accueil</a>
					<div class="ui dropdown item">
						<i class="dropdown icon"></i>
						Catégories
						<div class="ui menu">
							<a class="item">Gros Cailloux</a>
							<a class="item">Moyens Cailloux</a>
							<a class="item">Petits Cailloux</a>
						</div>
					</div>
					<a class="item">Panier</a>
					<div class="right menu">

						@if (Auth::guest())
						<form class="ui form">
							<div class="item">
							<div class="ui vertical buttons">
								<div class="shake-chunk">
									<input type="button" onClick="parent.location='/register'" class="ui mini yellow button" value="Inscription" />
								</div> 
								&nbsp;
								&nbsp;
								<div class="shake-little">
									<input type="button" onClick="parent.location='/login'" class="ui fluid mini yellow button" value="Connection" />
								</div>
							</div>
							</div>
							@else
							<div class="item">
								<input type="button" onClick="parent.location='/logout'" class="ui fluid mini yellow button" value="Déconnection" />
							</div>
						</form>
						@endif

					</div>
				</div>
			</div>
		</div>
	</div>
</div>








