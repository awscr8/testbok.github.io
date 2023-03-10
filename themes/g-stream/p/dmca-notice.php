<?php 
/**
 * The template for displaying page dmca
 *
 * @package www.ocimscripts.com
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>
<div id="main">
																						<div class="container">
<div class="row">
	<section id="primary" class="col-md-12">
		<article>
			<header class="page-header">
				<h1 class="page-title">DMCA Policy</h1>
			</header>
			<div class="page-content">
				<p><?php echo config('sitename') ?> respects the intellectual property rights of all content creators, whether their work is affiliated with our site or not. </p>

                        <p>If you have reason to suspect that your intellectual property rights have been infringed in any way that connects to our site, we strongly advise that you contact our copyright agent with a complaint as soon as possible. We take all violations of the Digital Millennium Copyright Act of 1998 extremely seriously. In order to ensure your complaint remains legitimate under the DCMA, please ensure your copyright complaint contains all of the following information:</p> 

                        <ul style="text-align: left;">
				<li>A signature, electronic or physical, of an individual who has been authorized to represent you, the copyright holder</li>
				<li>Clear identification of the copyrighted item(s) in question, as well as identification of the work(s) infringing on the copyright holder’s intellectual property rights</li>
				<li>Contact information for you, the copyright holder, that <?php echo site_path() ?> can use to contact you, including your full name, telephone number, physical address and e-mail address</li>
				<li>A written letter stating that you, the copyright holder, “in good faith believes that the use of the material in the manner complained of is not authorized by the copyright owner, its agent or the law”</li>
				<li>A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed"</li>
                        </ul>

                        <p>The statement of complaint that you provide us, containing all of the above information, should be sent to our Designated Copyright Agent by post, fax or email to one of the respective contact addresses below:</p>
                        <p>
                                <table>
                                        <tr>
                                                <td>Contact Page</td>
                                                <td width="1">&nbsp;:&nbsp; </td>
                                                <td>http://www.watchdogsecurity.online</a></td>
                                        </tr>
                                </table>
                        </p>

                        <p>PLEASE REMEMBER THAT IF YOU CHOOSE TO MISREPRESENT ANY OF THE DETAILS REGARDING AN ALLEGED COPYRIGHT INFRINGEMENT, YOU WILL BE SUBJECT TO SERIOUS CIVIL PENALTIES UNDER FEDERAL LAW, INCLUDING ANY MONETARY DAMAGES, COURT COSTS AND LAWYERS FEES ACCRUED BY US, AND ANY COPYRIGHT HOLDERS OR COPYRIGHT HOLDER’S LICENSEES WHO ARE INJURED IN ANY CAPACITY FOLLOWING OUR RELIANCE ON THE VERACITY OF YOUR REPRESENTATION. YOU COULD ALSO BE CRIMINALLY PROSECUTED FOR ACTS OF PERJURY. </p>

                        <p>Do not take anything outlined in this document as formal legal advice. For further information on the details required to lodge a formal DMCA notification, please refer to 17 U.S.C. 512(c)(3).</p> 
                </div>
			<footer class="page-footer"></footer>
		</article>
	</section>
</div>
																						</div>
																						<div id="dmca-modal" class="modal fade">
<div class="modal-dialog">
	<div class="modal-content">
		<form id="dmca-form" method="POST" action="/dmca/">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="text-center">
					<strong>DMCA Notice</strong>
				</h3>
			</div>
			<div class="modal-body">
				<div class="input-group">
					<span class="input-group-addon" id="sizing-addon1">
						<span class="icon-user"></span>
					</span>
					<input type="text" class="form-control required" name="dmca-name" placeholder="Real Name" aria-describedby="sizing-addon1" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon2">
							<span class="icon-envelope"></span>
						</span>
						<input type="text" class="form-control required" name="dmca-email" placeholder="Valid Email Address" aria-describedby="sizing-addon2" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3">
								<span class="icon-link"></span>
							</span>
							<input type="text" class="form-control required" name="dmca-url" placeholder="Infringing Material URL" aria-describedby="sizing-addon3" required>
							</div>
							<div class="input-group">
								<textarea class="form-control required" name="dmca-claim" rows="5" placeholder="Claim..." required></textarea>
							</div>
							<div class="input-group">
								<div class="checkbox">
									<label>
										<input class="required" type="checkbox" name="dmca-agree" required> I have read and agree with 
											<strong>Privacy</strong> and 
											<strong>DMCA Policy</strong>
										</label>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<div class="pull-right">
									<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
									<button class="btn btn-primary" name="dmca-submit" type="submit">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<div id="featured">
		<div class="container">
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-film"></span>
				</div>
				<div class="ft-title ease">Unlimited Access</div>
				<div class="ft-text">Unlimited access to over 20 million titles. Free. You'll never be bored again.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-magnifier"></span>
				</div>
				<div class="ft-title ease">Search for anything</div>
				<div class="ft-text">Search easily. Whether it's a new release or a golden oldie, we've got you covered.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-ban"></span>
				</div>
				<div class="ft-title ease">No Ads</div>
				<div class="ft-text">No one likes ads. Enjoy your films the way they were meant to be experienced: ad-free.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-screen-desktop"></span>
				</div>
				<div class="ft-title ease">All platforms</div>
				<div class="ft-text">Be entertained anywhere, anytime. Optimized for PC, Mac, mobile, PS4, Xbox One, and Smart TVs.</div>
			</div>
		</div>
	</div>
</div>
<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="site-links col-md-12 text-center">
				<ul>
					<li>
						<a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'dmca-notice' );?>">DMCA Policy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'contact-us' );?>">Contact</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a>
					</li>
				</ul>
			</div>
			<div class="site-credit col-md-12 text-center"> &copy;<?php echo date('Y') ?> 
				<a href="<?php echo site_url() ?>""><?php echo config('sitename') ?></a> - All rights reserved. 
			</div>
			<div class="site-note col-md-12 text-center">Disclaimer: All of the free movies found on this website are hosted on third-party servers that are freely available to watch online on <?php echo config('sitename') ?> for all internet users. Any legal issues regarding the free online movies on this website should be taken up with the actual file hosts themselves. <?php echo config('sitename') ?> is not responsible for the accuracy, compliance, copyright, legality, decency, or any other aspect of the content of other linked sites. In case of any copyright claims, Please contact the source websites directly file owners or host sites.
By accessing this site you agree to be bound by our Privacy Policy.</div>
			<div id="counter" data-min="12234" data-max="12733">
				<span class="globe">
					<span class="fa fa-globe"></span>
				</span>
				<span class="counter-value">12,617</span> Users Online
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js" defer></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js" defer></script>
<script type="text/javascript" src="/assets/js/scripts.min.js" defer></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-591b0a77843f2b33" defer></script>
<?php echo histats_write() ?>
</body>
								</html>