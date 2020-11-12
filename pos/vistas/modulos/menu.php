<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		/*if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>';

		}*/

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Docente"){

			echo '<li>

				<a href="docentes">

					<i class="fa fa-users"></i>
					<span>Docentes</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Supervisor"){

			echo '<li>

				<a href="supervisor">

					<i class="fa fa-user"></i>
					<span>Supervisor</span>

				</a>

			</li>';

		}

		/*if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Docente"){

			echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Incapacidades</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Admin incapacidades</span>

						</a>

					</li>

					<li>

<!--Se debe cambiar este crear venta-->

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear Incapacidad</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de Incapacidad</span>

						</a>

					</li>';

					}

				

				echo '</ul>

			</li>';

		}*/

		?>

		</ul>

	 </section>

</aside>