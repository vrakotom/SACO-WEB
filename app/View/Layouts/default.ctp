<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
</title>
	<?php
		echo $this->Html->meta('icon');
		// echo $this->Html->css('cake.generic');

		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('bootstrap.min');

		echo $this->Html->css('sb-admin-2');
		echo $this->Html->css('style');


		echo $this->Html->script('sb-admin-2');
		echo $this->Html->script('jquery-1.11.0');

		echo $this->Html->script('metisMenu');

		echo $this->fetch('meta');
		// echo $this->fetch('css');
		// echo $this->fetch('script');
	?>
</head>
<body>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SACO - Interface Web</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profil Utilisateur</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Paramètres Utilisateur</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Déconnexion</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" id="leftCol">
                    <ul class="nav nav-stacked" id="sidebar">

                        </li>
                        <li>
                            <a href="#communication"><i class="fa fa-dashboard fa-fw"></i> Communication</a>
                        </li>

                        <li>
                            <a href="#fichiers"><i class="fa fa-files-o fa-fw"></i> Fichiers reçus</a>
                        </li>

                        <li>
                            <a href="#mains-courantes"><i class="fa fa-list-alt fa-fw"></i> Mains Courantes</a>
                        </li>

                        <li>
                            <a href="#parametres"><i class="fa fa-wrench fa-fw"></i> Paramètres</a>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">

            <div class="row" id="communication">
                <div class="col-lg-12">
                    <h1 class="page-header">Communication</h1>
                </div>
            </div>

            <div class="separator"></div>

        <div class="row">
            <div class="col-lg-6">
            			<?php echo $this->fetch('content'); ?>


                <img src="http://fakeimg.pl/470x580/?text=WebRTC&font=lobster">

                <div class="separator"></div>

                <button type="button" class="btn btn-default center-block">Arrêter session WebRTC</button>

            </div>
            <!-- /.col-lg-6 -->

            <div class="col-lg-6">


                    <div class="chat-panel panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-comments fa-fw"></i>
                            Conversation en temps réel
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-chevron-down"></i>
                                    Choix conversation
                                </button>
                                <ul class="dropdown-menu slidedown">
                                    <li>
                                        <a href="#">
                                            Equipe Alpha
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Equipe Delta <i class="fa fa-envelope fa-fw"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Equipe Sierra
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Equipe Omega
                                        </a>
                                    </li>

                               <li class="divider"></li>

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-refresh fa-fw"></i> Rafraîchir
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="chat">
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Equipe Alpha</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            A vos ordres boss.
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                            <strong class="pull-right primary-font">Docteur X</strong>
                                        </div>
                                        <p>
                                            Envoie un snap d'abord.
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                    <span class="chat-img pull-left">
                                        <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Equipe Alpha</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                        </div>
                                        <p>
                                            Non il est train de crever, on l'achève?
                                        </p>
                                    </div>
                                </li>
                                <li class="right clearfix">
                                    <span class="chat-img pull-right">
                                        <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                    </span>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                            <strong class="pull-right primary-font">Docteur X</strong>
                                        </div>
                                        <p>
                                            Alors, Papi tient le choc ou pas?
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="input-group">
                                <input id="btn-input" type="text" class="form-control input-sm" placeholder="Taper votre message ici..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-warning btn-sm" id="btn-chat">
                                        Envoyer
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->


            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->




            <div class="separator"></div>



            <div class="row" id="fichiers">
                <div class="col-lg-12">
                    <h1 class="page-header">Fichiers reçus</h1>
                </div>
            </div>






            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#"><h4><span class="glyphicon glyphicon-refresh"></span> Rachaîchir</h4></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Type de fichier</th>
                                            <th>Equipe</th>
                                            <th>Heure</th>
                                            <th>Date</th>
                                            <th>...</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Image</td>
                                            <td>Equipe Alpha</td>
                                            <td>11h53 33s</td>
                                            <td class="center">03/11/2014</td>
                                            <td class="center">X</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Vidéo</td>
                                            <td>Equipe Sierra</td>
                                            <td>11h53 10s</td>
                                            <td class="center">02/11/2014</td>
                                            <td class="center">C</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Son</td>
                                            <td>Equipe Omega</td>
                                            <td>11h53 58s</td>
                                            <td class="center">04/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Image</td>
                                            <td>Equipe Omega</td>
                                            <td>07h23 45s</td>
                                            <td class="center">04/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Son</td>
                                            <td>Equipe Alpha</td>
                                            <td>12h51 32s</td>
                                            <td class="center">04/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Son</td>
                                            <td>Equipe Alpha</td>
                                            <td>11h53 45s</td>
                                            <td class="center">02/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Vidéo</td>
                                            <td>Equipe Omage</td>
                                            <td>08h31 21s</td>
                                            <td class="center">01/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Vidéo</td>
                                            <td>Equipe Sierra</td>
                                            <td>11h44 55s</td>
                                            <td class="center">05/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Image</td>
                                            <td>Equipe Sierra</td>
                                            <td>18h13 44s</td>
                                            <td class="center">05/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>son</td>
                                            <td>Equipe Alpha</td>
                                            <td>11h53 41s</td>
                                            <td class="center">01/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Vidéo</td>
                                            <td>Equipe Delta</td>
                                            <td>19h00 42s</td>
                                            <td class="center">02/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Son</td>
                                            <td>Equipe Sierra</td>
                                            <td>21h09 05s</td>
                                            <td class="center">05/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Son</td>
                                            <td>Equipe Omega</td>
                                            <td>23h44 24s</td>
                                            <td class="center">03/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Image</td>
                                            <td>Equipe Alpha</td>
                                            <td>00h23 05s</td>
                                            <td class="center">03/11/2014</td>
                                            <td class="center">A</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->



            <div class="separator"></div>






            <div class="row" id="mains-courantes">
                <div class="col-lg-12">
                    <h1 class="page-header">Mains Courantes</h1>
                </div>
            </div>




                        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#"><h4><span class="glyphicon glyphicon-refresh"></span> Rachaîchir</h4></a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                                    <thead>
                                        <tr>
                                            <th>Nom et prénom de la victime</th>
                                            <th>Equipe</th>
                                            <th>Heure</th>
                                            <th>Date</th>
                                            <th>Incident</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Merlin l'enchanteur</td>
                                            <td>Equipe Alpha</td>
                                            <td>11h53 33s</td>
                                            <td class="center">03/11/2014</td>
                                            <td class="center">Brulure à la barbe</td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>Capitaine Haddock</td>
                                            <td>Equipe Sierra</td>
                                            <td>11h53 10s</td>
                                            <td class="center">02/11/2014</td>
                                            <td class="center">Ivresse</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Dark Vador</td>
                                            <td>Equipe Omega</td>
                                            <td>11h53 58s</td>
                                            <td class="center">04/11/2014</td>
                                            <td class="center">Emputation</td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>Nicolas Sarkozy</td>
                                            <td>Equipe Omega</td>
                                            <td>07h23 45s</td>
                                            <td class="center">04/11/2014</td>
                                            <td class="center">Menteur</td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>Jacques Chirac</td>
                                            <td>Equipe Alpha</td>
                                            <td>12h51 32s</td>
                                            <td class="center">04/11/2014</td>
                                            <td class="center">Truant</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>George Bush</td>
                                            <td>Equipe Omage</td>
                                            <td>08h31 21s</td>
                                            <td class="center">01/11/2014</td>
                                            <td class="center">Incapable</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Jésus Christ</td>
                                            <td>Equipe Sierra</td>
                                            <td>11h44 55s</td>
                                            <td class="center">05/11/2014</td>
                                            <td class="center">Cruxifié</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Ben Laden</td>
                                            <td>Equipe Sierra</td>
                                            <td>18h13 44s</td>
                                            <td class="center">05/11/2014</td>
                                            <td class="center">Assassiné</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Mao Zedong</td>
                                            <td>Equipe Alpha</td>
                                            <td>11h53 41s</td>
                                            <td class="center">01/11/2014</td>
                                            <td class="center">Tout rouge</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Dieudonné Mbla Mbla</td>
                                            <td>Equipe Delta</td>
                                            <td>19h00 42s</td>
                                            <td class="center">02/11/2014</td>
                                            <td class="center">Quenelle</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Jules César</td>
                                            <td>Equipe Sierra</td>
                                            <td>21h09 05s</td>
                                            <td class="center">05/11/2014</td>
                                            <td class="center">Veni vedi vici</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Jérôme Cahuzac</td>
                                            <td>Equipe Omega</td>
                                            <td>23h44 24s</td>
                                            <td class="center">03/11/2014</td>
                                            <td class="center">menteur avéré</td>
                                        </tr>
                                        <tr class="gradeA">
                                            <td>Dominique Strauss-Kahn</td>
                                            <td>Equipe Alpha</td>
                                            <td>00h23 05s</td>
                                            <td class="center">03/11/2014</td>
                                            <td class="center">2017</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->





            <div class="separator"></div>




            <div class="row">
                <div class="col-lg-12" id="parametres">
                    <h1 class="page-header">Paramètres</h1>
                </div>
            </div>





        </div>
        <!-- /#page-wrapper -->

    </div>


	<div id="container">
		<div id="header">
			<h1><?php // echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
	<script>

    $('#sidebar').affix({
          offset: {
            top: 245
          }
    });

    var $body   = $(document.body);
    var navHeight = $('.navbar').outerHeight(true) + 10;

    $body.scrollspy({
        target: '#leftCol',
        offset: navHeight
    });


        $(document).ready(function() {
        $('#dataTables-example').dataTable( {
            "language": {
                "url": "resources/fr_FR.txt"
            }
        } );
    } );

        $(document).ready(function() {
        $('#dataTables-example1').dataTable( {
            "language": {
                "url": "resources/fr_FR.txt"
            }
        } );
    } );

        </script>

</body>
</html>
