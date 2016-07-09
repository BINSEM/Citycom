@extends('layouts.main')
@section('content')
<div id="arriere" >
	<div id="text">
		Venus du bout du monde, 
		Pour vous, <br />
		les plus beaux cailloux
	</div>
	<div id="centertitre" >
		<h3 id="titre">
			au royaume de la caillasse
		</h3>
		<a href="#articlemag" id="admirez">admirer notre collection de cailloux</a>
	</div>
	<div class="ui yellow segment">
		<div class="ui centered grid">
			<div class="doubling four column row" id="articlemag">
				<div class=" four wide column" id="cardori">
					<div class="ui card">
						<div class="image">
							<img id="imageori" src="/images/rock.jpg">
						</div>
						<div class="content">
							<a class="header">Beau Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<a>
								<i class="shop icon"></i>
								Ajouter au panier
							</a>			
							<br />			
							<a>
								<i class="zoom icon"></i>
								Plus d'informations
							</a>
						</div>
					</div>	
				</div>
				<div class="four wide column" id="cardori">
					<div class="ui card">
						<div  class="image">
							<img id="imageori" src="/images/waterrocks.jpg">
						</div>
						<div class="content">
							<a class="header">Joli Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<a>
								<i class="shop icon"></i>
								Ajouter au panier
							</a>			
							<br />			
							<a>
								<i class="zoom icon"></i>
								Plus d'informations
							</a>

						</div>
					</div>
				</div>			
				<div class="four wide column" id="cardori">
					<div class="ui card">
						<div class="image">
							<img id="imageori"  src="/images/rock.jpg">
						</div>
						<div class="content">
							<a class="header">Beau Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<a>
								<i class="shop icon"></i>
								Ajouter au panier
							</a>			
							<br />			
							<a>
								<i class="zoom icon"></i>
								Plus d'informations
							</a>
						</div>
					</div>
				</div>
				<!-- <div class="four wide column" id="cardori">
					<div class="ui card">
						<div  class="image">
							<img id="imageori" src="/images/waterrocks.jpg">
						</div>
						<div class="content">
							<a class="header">Joli Caillou</a>
							<div class="description">
								Le plus beau!
							</div>
						</div>
						<div class="extra content">
							<a>
								<i class="shop icon"></i>
								Ajouter au panier
							</a>			
							<br />			
							<a>
								<i class="zoom icon"></i>
								Plus d'informations
							</a>

						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>


<!-- 
		<div class="field">
			<label>File</label>
			<div class="ui action input">
				<input type="text" id="_attachmentName">
				<label for="attachmentName" class="ui icon button btn-file">
					<i class="fa fa-upload"></i>
					<input type="file" id="attachmentName" name="attachmentName" style="display: none">
				</label>
			</div>
		</div>
	</div>
</div> -->


@endsection
