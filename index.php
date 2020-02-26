<?php get_header();?>
		

		<?php
	      //args
	      $my_args_indicador = array(
	          'post_type' => 'indicadores',
	          'post_per_page' => 1,
	      );

	      //query

	      $my_query_indicador = new WP_Query ($my_args_indicador);
	    ?>
    	<section>
    		<div class="indicadores">
    			<div class="container">
    				 <?php if($my_query_indicador->have_posts()) : while($my_query_indicador->have_posts() ) : $my_query_indicador->the_post();?>
    				<h2>Indicadores</h2>
					<div class="row">
		    			<div class="col-md-4 col-lg-4">

		    				<div class="content-indicadores">
		    					<h3><?php the_title();?></h3>
		    					<?php the_post_thumbnail();?>
		    				</div>
		    		
		    			</div>

		    			<div class="col-md-2 col-lg-2">
		    				<div class="porcent">
								<h3><?php the_field('porcentagem'); ?></h3>	    				
		    				</div>
		    			</div>

		    			<div class="col-lg-6 col-md-6">
		    				<div class="text-indicadores">
			    				<p><?php the_content()?></p>
			    			</div>
		    			</div>
		    		</div>
    			</div>
			 <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
    		</div>
    	</section>


		<?php
	      //args
	      $my_args_contrato = array(
	          'post_type' => 'contrato',
	          'post_per_page' => 1,
	      );

	      //query

	      $my_query_contrato = new WP_Query ($my_args_contrato);
	    ?>
    	<section>
    		<?php if($my_query_contrato->have_posts()) : while($my_query_contrato->have_posts() ) : $my_query_contrato->the_post();?>
    		<div class="contrato">
    			<h2><?php the_title();?></h2>
    			<div class="content-contrato">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-8 col-lg-8 text-contrato">
    					<p><?php the_content()?></p>

    				</div>
    				<div class="col-md-4 col-lg-4 img-contrato">
    					<?php the_post_thumbnail();?>
    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		 <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>

    	</section>
		

		<section>
			<div class="investidores-atuais">
					<?php
				      //args
				      $my_args_investidores = array(
				          'post_type' => 'investidores',
				          'post_per_page' => 20,
				          'order'=>'asc'
				      );

				      //query

				      $my_query_investidores = new WP_Query ($my_args_investidores);
				    ?>
				<div class="container">
					<h2>Investidores Atuais</h2>
					<div class="content-investidores">
						
						<?php if($my_query_investidores->have_posts()) : while($my_query_investidores->have_posts() ) : $my_query_investidores->the_post();?>	
						
						<?php $link = get_field('linkedin'); ?>

						<a href="<?php echo $link; ?>" target="_blank">
							<div class="box-avatar">
								<?php 

								$image = get_field('investidores');

								if( !empty($image) ): ?>

									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

								<?php endif; ?>
								<h3><?php the_title();?></h3>
								<h4><?php the_content()?></h4>
							</div>
						</a>
							 <?php endwhile; endif; ?>
					        <?php wp_reset_query(); ?>
						
					</div>
					 

					<div class="botao">
							<?php
						      //args
						      $my_args_invista = array(
						          'post_type' => 'invista-agora',
						          'post_per_page' => 1,
						      );

						      //query

						      $my_query_invista = new WP_Query ($my_args_invista);
						    ?>
						<?php if($my_query_invista->have_posts()) : while($my_query_invista->have_posts() ) : $my_query_invista->the_post();?>
						<?php $link = get_field('link_investir');?>

						<a href="<?php echo $link; ?>" target="_blank">investir agora</a>
						<p><?php the_field('valor_minimo');?></p>
						
						<?php endwhile; endif; ?>
					    <?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</section>

		<section>
				<?php
			      //args
			      $my_args_numeros = array(
			          'post_type' => 'numeros',
			          'post_per_page' => 1,
			      );

			      //query

			      $my_query_numeros = new WP_Query ($my_args_numeros);
			    ?>
			<div class="numeros">
				<?php if($my_query_numeros->have_posts()) : while($my_query_numeros->have_posts() ) : $my_query_numeros->the_post();?>

				<h2><?php the_title();?></h2>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-6 numeros-img">
							<?php the_post_thumbnail();?>
						</div>
						<div class="col-md-6 col-lg-6 numeros-text">
							<?php the_content()?>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
		</section>

		<section>
			<div class="oportunidade">
				<?php
			      //args
			      $my_args_oportunidade = array(
			          'post_type' => 'oportunidade',
			          'post_per_page' => 1,
			      );

			      //query

			      $my_query_oportunidade = new WP_Query ($my_args_oportunidade);
			    ?>

			    <?php if($my_query_oportunidade->have_posts()) : while($my_query_oportunidade->have_posts() ) : $my_query_oportunidade->the_post();?>

				<h2><?php the_title();?></h2>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 oportunidade-img">
							<?php the_post_thumbnail();?>
						</div>

						<div class="col-lg-6 col-md-6 oportunidade-text">
							<p><?php the_content()?></p>
						</div>

					</div>
				</div>

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>

			</div>
		</section>

		<section>
			<div class="mobilitee">
				<div class="container">
					<?php
				      //args
				      $my_args_mobiletee = array(
				          'post_type' => 'mobiletee',
				          'post_per_page' => 1,
				      );

				      //query

				      $my_query_mobiletee = new WP_Query ($my_args_mobiletee);
				    ?>
					
					<?php if($my_query_mobiletee->have_posts()) : while($my_query_mobiletee->have_posts() ) : $my_query_mobiletee->the_post();?>

					<h2><?php the_field('titulo_um');?></h2>
					<p><?php the_field('texto1');?></p>

					<h2 class="right"><?php the_field('titulo2');?></h2>
					<p class="right"><?php the_field('texto2');?></p>

					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</section>

		<section>
			<div class="escalabilidade">
				<div class="container">

					<?php
				      //args
				      $my_args_escalabilidade = array(
				          'post_type' => 'escalabilidade',
				          'post_per_page' => 1,
				      );

				      //query

				      $my_query_escalabilidade = new WP_Query ($my_args_escalabilidade);
				    ?>

					<?php if($my_query_escalabilidade->have_posts()) : while($my_query_escalabilidade->have_posts() ) : $my_query_escalabilidade->the_post();?>

					<h2><?php the_title();?></h2>
					<p><?php the_content()?></p>

					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>

					<div class="row">
						<div class="col-lg-8 col-md-8 escalabilidade-text">
							<h2>Vantagens</h2>

								<?php
							      //args
							      $my_args_vantagens = array(
							          'post_type' => 'vantagens',
							          'post_per_page' => 1,
							      );

							      //query

							      $my_query_vantagens = new WP_Query ($my_args_vantagens);
							    ?>
							<ul>
								<?php if($my_query_vantagens->have_posts()) : while($my_query_vantagens->have_posts() ) : $my_query_vantagens->the_post();?>
								<li><?php the_field('vantagem');?></li>

								<?php endwhile; endif; ?>
								<?php wp_reset_query(); ?>
							</ul>

						</div>
						<div class="col-lg-4 col-md-4 escalabilidade-img">
							<img src="img/vantagens.svg" alt="">
						</div>

						<div class="boxes">

							<?php
						      //args
						      $my_args_qualidades = array(
						          'post_type' => 'qualidades',
						          'post_per_page' => 1,
						      );

						      //query

						      $my_query_qualidades = new WP_Query ($my_args_qualidades);
						    ?>
							<?php if($my_query_qualidades->have_posts()) : while($my_query_qualidades->have_posts() ) : $my_query_qualidades->the_post();?>
									    
							<div class="yellow-box">
								<h3><?php the_title();?></h3>
								<p><?php the_content()?></p>
							</div>

							<?php endwhile; endif; ?>
							<?php wp_reset_query(); ?>
							
						</div>
					</div>

				</div>
			</div>
		</section>

		<section>
			<div class="nosso-time">
				<div class="container">
					<h2>Nosso Time</h2>
			
					<div class="box-profile">

							<?php
						      //args
						      $my_args_nosso_time = array(
						          'post_type' => 'nosso_time',
						          'post_per_page' => 1,
						      );

						      //query

						      $my_query_nosso_time = new WP_Query ($my_args_nosso_time);
						    ?>
							<?php if($my_query_nosso_time->have_posts()) : while($my_query_nosso_time->have_posts() ) : $my_query_nosso_time->the_post();?>
							
							<?php $link = get_field('linkedin');?>

							<a href="<?php echo $link; ?>" target="_blank">
								<div class="profile">
									<?php the_post_thumbnail();?>
									<h3><?php the_title();?></h3>
									<p><?php the_content()?></p>
								</div>
							</a>

							<?php endwhile; endif; ?>
							<?php wp_reset_query(); ?>

						
					</div>


				</div>
			</div>
		</section>

		<section>
			<div class="roadmap">
				<div class="container">
					<h2>Roadmap</h2>
					<div class="row">
						
						<?php
					      //args
					      $my_args_roadmap = array(
					          'post_type' => 'roadmap',
					          'post_per_page' => 1,
					      );

					      //query

					      $my_query_roadmap = new WP_Query ($my_args_roadmap);
					    ?>

						<?php if($my_query_roadmap->have_posts()) : while($my_query_roadmap->have_posts() ) : $my_query_roadmap->the_post();?>

						<div class="col-md-12 col-lg-12 <?php the_field('lado');?>">
							<div class="dados">
								<span></span>
								<h3><?php the_title();?></h3>
								<h4><?php the_field('subtitulo');?></h4>
								<p><?php the_content()?></p>
							</div>
						</div>


						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>

					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="direcionamento">
				<div class="container">
					
						<?php
					      //args
					      $my_args_direcionamento = array(
					          'post_type' => 'direcionamento',
					          'post_per_page' => 1,
					      );

					      //query

					      $my_query_direcionamento = new WP_Query ($my_args_direcionamento);
					    ?>
					<?php if($my_query_direcionamento->have_posts()) : while($my_query_direcionamento->have_posts() ) : $my_query_direcionamento->the_post();?>

					<h2><?php the_title();?></h2>
					<?php the_post_thumbnail();?>
					<?php the_content()?>

					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</section>

		<section>
			<div class="investiu">
				<div class="container">
					<h2>Porque investir na Mobilite?</h2>

					<div class="investidores">

							<?php
						      //args
						      $my_args_investiu = array(
						          'post_type' => 'investiu',
						          'post_per_page' => 1,
						      );

						      //query

						      $my_query_investiu = new WP_Query ($my_args_investiu);
						    ?>
						<?php if($my_query_investiu->have_posts()) : while($my_query_investiu->have_posts() ) : $my_query_investiu->the_post();?>

						<div class="perfil">
							<?php the_post_thumbnail();?>
							<h2><?php the_title();?></h2>
						</div>

						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
						
					</div>

					<div class="botao">
						<a href="">ver mais documentos</a>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="sobre-investimento">
				
				<div class="container">
					<h2>Dúvidas sobre o investimento</h2>


					<?php
				      //args
				      $my_args_duvidas = array(
				          'post_type' => 'duvidas',
				          'posts_per_page' => -1,
				      );

				      //query

				      $my_query_duvidas = new WP_Query ($my_args_duvidas);
				    ?>

					

					
					

					<div class="question">
						<div class="accordion" id="question-acc">
							<?php if($my_query_duvidas->have_posts()) : while($my_query_duvidas->have_posts() ) : $my_query_duvidas->the_post();?>
						  <div class="card">
						    <div class="card-header" id="headingOne">
						      <h2 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#<?php the_title();?>" aria-expanded="false" aria-controls="<?php the_title();?>">
						          <?php the_field('pergunta');?>
						        </button>
						      </h2>
						    </div>

						    <div id="<?php the_title();?>" class="collapse" aria-labelledby="headingOne" data-parent="#question-acc">
						      <div class="card-body">
						        <p><?php the_field('resposta');?></p>
						      </div>
						    </div>
						  </div>

						  <?php endwhile; endif; ?>
						  <?php wp_reset_query(); ?>
						 

						</div>
					</div>
				</div>

			</div>
		</section>

		<section>
			<div class="contato">
				<div class="container">
					<h2>Entre em contato</h2>
					<?php echo do_shortcode( '[contact-form-7 id="134" title="Contato"]' ); ?>
				</div>

			</div>
		</section>

<?php get_footer();?>

