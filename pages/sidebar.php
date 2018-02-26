<?php
	$page='pages/Accueil';
	if(isset($_GET['path']))
	{
	    $page=$_GET['path'];
	}
	else
	{
	    $page='pages/Accueil';
	}
?>

	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="index.php">
					<i class="icon-home"></i>
					<span class="title">Accueil</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Paramètre</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							<i class="icon-home"></i>
							Entreprise</a>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-home"></i>
								<span class="title">Employé</span>
								<span class="arrow "></span>
							</a>

								<ul class="sub-menu">
									<li>
										<a href="index.php?path=pages/ajouter_agent"><i class="icon-power"></i> Ajouter un Employé</a>
									</li>
									<li>
										<a href="#"><i class="icon-paper-plane"></i> Liste des Employés</a>
									</li>
								</ul>
						</li>
						
						<li>
							<a href="javascript:;">
								<i class="icon-tag"></i>
								<span class="title">Message</span>
								<span class="arrow "></span>
							</a>

								<ul class="sub-menu">
									<li>
										<a href="index.php?path=pages/ajouter_agent"><i class="icon-power"></i> Ajouter un nouveau message</a>
									</li>
									<li>
										<a href="#"><i class="icon-paper-plane"></i> Listing des messages</a>
									</li>
								</ul>
						</li>
						<li>
							<a href="javascript:;">
								<i class="icon-tag"></i>
								<span class="title">Compte</span>
								<span class="arrow "></span>
							</a>

								<ul class="sub-menu">
									<li>
										<a href="index.php?path=pages/ajouter_agent"><i class="icon-power"></i> Créer un compte</a>
									</li>
									<li>
										<a href="#"><i class="icon-paper-plane"></i> Listing des comptes</a>
									</li>
								</ul>
						</li>
					
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-rocket"></i>
					<span class="title">Gestion messagerie</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="javascript:;">
							Envoyer un message d'aniversaire</a>
						</li>
						<!--<li>
							<a href="layout_sidebar_closed.html">
							Formation</a>
						</li>-->
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-diamond"></i>
					<span class="title">Etats</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="ui_general.html">
							Listing les employés éligible</a>
						</li>
						<li>
							<a href="ui_colors.html">
							Nombre d'employés ayant reçu le message avec succès</a>
						</li>
						<li>
							<a href="ui_typography.html">
							Nombre d'employé pour qui l’envoi a échoué</a>
						</li>
					</ul>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->