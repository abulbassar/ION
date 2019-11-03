<?php global $redux_icon;?>	
	<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row double">
						<div class="6u">
							<div class="row collapse-at-2">
								<div class="6u">
										<?php 
										dynamic_sidebar('footer-1');
										?>
								</div>
								<div class="6u">
									<?php 
										dynamic_sidebar('footer-2');
										?>
								</div>
							</div>
						</div>
						<div class="6u">
						
							<?php 
										dynamic_sidebar('footer-3');
										?>
							<ul class="icons">
								<?php if(!empty($redux_icon['footer-social']['twitter'])):?>
									<li><a href="<?php echo $redux_icon['footer-social']['twitter'];?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<?php endif;?>
								<?php if(!empty($redux_icon['footer-social']['facebook'])):?>
									<li><a href="<?php echo $redux_icon['footer-social']['facebook'];?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<?php endif;?>
								<?php if(!empty($redux_icon['footer-social']['instagram'])):?>
									<li><a href="<?php echo $redux_icon['footer-social']['instagram'];?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<?php endif;?>
								<?php if(!empty($redux_icon['footer-social']['linkedIn'])):?>
									<li><a href="<?php echo $redux_icon['footer-social']['linkedIn'];?>" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<?php endif;?>
								<?php if(!empty($redux_icon['footer-social']['pinterest'])):?>
									<li><a href="<?php echo $redux_icon['footer-social']['pinterest'];?>" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
								<?php endif;?>
							</ul>
						</div>
					</div>
					<ul class="copyright">
						<li>&copy; <?php echo esc_html($redux_icon['copyright']);?></li>
						<li>Design: <a href="<?php echo esc_html($redux_icon['designby_url']);?>" style="text-decoration:none"><?php echo esc_html($redux_icon['designby']);?></a></li>
						
					</ul>
				</div>
			</footer>

	</body>
</html>