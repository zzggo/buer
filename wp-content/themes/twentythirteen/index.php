<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<body <?php body_class(); ?>>
	<div class="content">
		<section id="top" class="top">
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen'); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			<div class="inside">
				<h1>BU ER</h1>
				<h2>MAGAZINE</h2>
				<h3>YOUNG VOICES OF CHINA</h3>
			</div>
		
		</section>
		<section id="second" class="second">
			<h2>Bu Er Magazine discusses what China is and what China could offer,<br>from our perspective <br> as a new generation of young students.<br><br> Discover A New and Immersive Reading Experience.</h2>
			<img class="secondbg" src="wp-content/themes/twentythirteen/images/painting.jpg" alt="">
		</section>
		<section id="sixth" class="sixth">
			<div class="sixthtop" data-0="background-position:0px 500px;" data-10000="background-position:0px -2800px;">
				<h1>About Us</h1>
				<div class="line"></div>	
				<p>We Are A New Generation of Young Students.</p>
			</div>
			<div class="sixthbot">
				<div class="sixthright">
					<h3>What?</h3>
					<p>Bu Er Magazine is an innovative and immersive reading experience. At our core is the desire to pioneer a unique scoop on China. We are in the business of breaking the mould of status quo journalism and bringing about new forms of cross-cultural dialogue. Our information and analysis cannot be found on the high streets or news outlets, because we are one of a kind.</p>
					<h3>Why?</h3>
					<p>Living in a time of global exchange, we wish to move away from a narrative of the world that is divided into sequestered countries, and away from an ‘East versus West’ paradigm. Most of us are students with no ulterior agenda except to understand China in its own right and on its own terms. In doing so, we hope to allow ourselves and our readers to reconceptualise and remap the world we live in, one in which the positioning of China is increasingly important. </p>
					<h3>How?</h3>
					<p>As an independent journal, we are committed to presenting China in her multifocal complexity. We hope to engage with you via our magazine, our society workshops, and our digital contents. </p>
					<h3>Who We Are?</h3>
					<p>Bu Er Magazine was founded as the collaborative work of a group of overseas Chinese students and friends from different cultures with an interest in China. We like to think ourselves as a collective. That means you, too, can be a part of our team. If you, like us, are interested in China and in building new narratives and cultures of innovative thought, join the conversation, be part of our journey <a>here</a></p>
				</div>
				<div class="sixthleft">
					<div class="leftleft">
						<div class="leftone">
							<div class="leftonetop"><img src="wp-content/themes/twentythirteen/images/photo/1.jpg" alt=""></div>
							<div class="leftonebot"><a class="fancybox-media" href="https://www.youtube.com/watch?v=B5Fstgcj9wI"><img src="wp-content/themes/twentythirteen/images/photo/2.jpg" alt=""></a></div>		
						</div>
						<div class="lefttwo">
							<div class="lefttwotop"><img src="wp-content/themes/twentythirteen/images/photo/potrait1.jpg" alt=""></div>
							<div class="lefttwomid1"><img src="wp-content/themes/twentythirteen/images/photo/potrait2.jpg" alt=""></div>
							<div class="lefttwomid2"><img src="wp-content/themes/twentythirteen/images/photo/potrait3.jpg" alt=""></div>
							<div class="lefttwobot"><img src="wp-content/themes/twentythirteen/images/photo/potrait4.jpg" alt=""></div>
						</div>
					</div>
					<div class="rightright">
						<div class="righttop">
							<div class="righttopleft"><img src="wp-content/themes/twentythirteen/images/photo/5.jpg" alt=""></div>
							<div class="righttopright">
								<div class="righttoptop"><img src="wp-content/themes/twentythirteen/images/photo/photo-5.jpg" alt=""></div>
								<div class="righttopbot"><img src="wp-content/themes/twentythirteen/images/photo/photo-6.jpg" alt=""></div>
							</div>
						</div>
						<div class="rightbottom">
							<img src="wp-content/themes/twentythirteen/images/photo/photo-3.jpg" alt="">
							<img src="wp-content/themes/twentythirteen/images/photo/photo-4.jpg" alt="">
						</div>	
					</div>
				</div>
			</div>
		</section>
		<section id="third" class="third">
			<div class="thirdtop" data-0="background-position:0px 900px;" data-10000="background-position:0px -2400px;">
				<h1>About Bu Er Magazine</h1>
				<div class="line"></div>	
				<p>Bu Er – “not-two” is an idea</p>
			</div>
			<div class="thirdright">
				<div class="stripetop"></div>
				<h1>What does <br> Bu Er mean?</h1>
				<div class="stripebot"></div>
				<p>Bu Er (不二) is literally translated ‘not-two’.
				</p>
				 <p>
				The term is borrowed from the Hindu-Buddhist concept that challenges the binaries with which we often view the world. Granted that we are not affiliated with any particular political structure, religious ideology or philosophical tradition, we nevertheless believe this concept to be very powerful and apt in describing what this magazine is about. For while we present China through two perspectives (‘Imperial China’ and ‘China Today’), we strongly believe that China as a nation is not confined by these two points of investigation. 
				Similarly, the world is not divided in two between China and the rest of the world. Instead, Bu Er Magazine is interested in breaking these boundaries of thought by bringing multifaceted ideas about China closer to the international community.
				 </p>
			</div>
			<div class="thirdleft">
				<div class="diyiqi">
					<img src="wp-content/themes/twentythirteen/images/cover-1.png" alt="">
					<div class="vol1 vol">
						<h1>Vol.1 Seclected Titles</h1>
						<h2>Tea and the Chinese Tea Culture</h2>
						<p>Tea and the Opium Wars: A Tragic Curtain-raiser in Modern Chinese History</p><p>Tea and the Emperor Huizong of Song: A Dreamland Built on Tea</p>
						<h2>“Shanzhai” Chinese Counterfeit Products</h2>
						<p>Materialism Compared: is China Only Imitating the Western Style? </p><p> An Analysis: The Economic Reality of China’s Counterfeit Production</p>
						<h2>Viewpoints</h2>
						<p>Interviewing Chris Ogden: China and the Pacific, Cooperation or Confrontation?  </p><p>In Pictures: A Day in Life in Beijing</p>
					</div>
				</div>
				<div class="dierqi">
					<img src="wp-content/themes/twentythirteen/images/cover-2.png" alt="">
					<div class="vol2 vol">
						<h1>Vol.2 Seclected Titles</h1>
						<h2>The Moon as a Chinese Cultural Motif</h2>
						<p>‘Valentine’s day’ in the Chinese Calendar </p><p> Good Night: Pillows in Imperial China </p><p>Our Moonlit Lives: Myth of Chang ‘E</p>
						<h2>The Internet in China</h2>
						<p>Infographics: the Great Firewall of China</p><p> Untangling the Web: Control in Chinese Cyberspace</p><p>Reality of Chinese Hackers</p>
						<h2>Viewpoints</h2>
						<p>Interviewing Di Dongsheng: On China’s Economic Policies</p><p> In Pictures: Children of Tibet</p>
					</div>
				</div>
				<div class="disanqi">
					<img src="wp-content/themes/twentythirteen/images/cover-3.png" alt="">
					<div class="vol3 vol">
						<h1>Vol.3 Seclected Titles</h1>
						<h2>Women and Femininity</h2>
						<p>In Search of the Perfect Woman: The Admonitions Scroll </p><p>Mei Lanfang and Beijing Opera: A Male Actor Who Played Female Roles</p><p>Women’s Games: What Games Did Imperial Chinese Women Play?</p>
						<h2>The Chinese Education</h2>
						<p>The Taming of the Youth: Going through High School in China </p><p> A Personal Reflections on Patriotism in China</p><p>Students and “New China”: a Tradition of Student Activism</p>
						<h2>Viewpoints</h2>
						<p>Interviewing Julia Lovell: Opium, War, and Nationhood </p><p>In Pictures: 3 Chinese Bachelors and their Vietnamese Brides</p>
					</div>
				</div>
			</div>
		</section>
		<section id="fourth" class="fourth">
			<div class="topsection"><img src="wp-content/themes/twentythirteen/images/head.jpg" alt=""></div>
			<div class="content">
				<div class="fleft">
					<div class="vol vol1">
						<div class="textwrapper">	
							<h2>IMPERIAL CHINA</h2>
							<p>Interesting ideas from Chinese history that are useful to today's world? Dissected and discussed with pictures and bite-size articles.</p><p>

A specific theme is discussed in each bi-annual issue. </p>
						</div>	
					</div>
				</div>
				<div class="fmid">
					<div class="vol vol2">
						<div class="textwrapper">	
							<h2>CHINA TODAY</h2>
							<p>What problems does China face and what do they mean to the rest of the world?  Find out about our take on the matter as Chinese youths.</p><p>

A specific theme is discussed in each bi-annual issue. </p>
						</div>	
					</div>
				</div>
				<div class="fright">
					<div class="vol vol3">
						<div class="textwrapper">	
							<h2>VIEWPOINTS</h2>
							<p>Interviews, infographics, journalistic photo albums and more! </p>
						</div>	
					</div>
				</div>
			</div>
			<div class="text">
				<div class="tleft">
					<h1>For A China That is Tangible, Accessible and Thought-Provoking</h1>
					<span>Bu Er Magazine </span>
				</div>
				<div class="tright">
					<p>Seeking to remap the Chinese identity and to rediscover its cultural icons, Bu Er Magazine is a completely editorially-driven publication.</p><p>
					For each issue, we choose two different themes for “Imperial China” and “China Today”, with a scope that ranges from art history, literature, to economics, international relations and modern history. </p><p>
					Our use of easy-to-read infographs, original artworks and online audio and visual materials also sets us apart from publications of the same genre.</p>
				</div>
			</div>
		</section>
		<section id="fifth" class="fifth">
			<div class="fifthtop" data-0="background-position:0px 1500px;" data-10000="background-position:0px -1800px;">
				<h1>AN INTERACTION</h1>
				<div class="line"></div>	
				<p>We are a off and on-line student project where a truly global interchange of creative and <br> intellectual ideas is made possible for the first time.</p>
			</div>
			<div class="fifthbot">
				<div class="fifthright">
						<div class="stripetop"></div>
						<h1>We are not only <br> a magazine.</h1>
						<div class="stripebot"></div>
						<p>Through our printed magazine, our website, and our activities at universities, we bring close to you what is far, and engage you with universal questions, on campus and online. We mean to take all of our efforts to a personal level to you. </p><p>Bu Er is only the beginning of a conversation, it’s the dialogue that matters. </p>
				</div>
				<div class="fifthleft">
					<div class="caw">
						<div class="cawdes">
							<img src="wp-content/themes/twentythirteen/images/forum.png" alt="">
							<div class="words">
								<p>A platform where we can address problems which we deem worthwhile, state our opinions and learn from other people's replies.</p>
								<a href="">EXPLORE <span>></span> </a>
							</div>
						</div>
					</div>
					
					<div class="ask">
						<div class="askdes">
							<img src="wp-content/themes/twentythirteen/images/ask.png" alt="">
							<div class="words">
								<p>Whether article-related or concerning China in general, our editors want to answer any question you that springs into your mind. </p>
								<a href="">EXPLORE<span>></span> </a>
							</div>
						</div>	
					</div>
				</div>
				
			</div>
		</section>
		<section id="seventh" class="seventh">
			<div class="seventhtop">
				<h1>SUBSCRIBE</h1>
				<div class="line"></div>	
				<p>Bu Er Magazine - Young Voice of China</p>
			</div>
			<div class="seventhbot">
				<div class="seventhleft">
					<h1>Get The Bu Er Magazine</h1>
					<a href=""><img src="wp-content/themes/twentythirteen/images/free.jpg" alt=""></a>
					<a href=""><img src="wp-content/themes/twentythirteen/images/full.jpg" alt=""></a>
					<a href=""><img src="wp-content/themes/twentythirteen/images/print.jpg" alt=""></a>
				</div>
				<div class="seventhright">
					<h1>Follow Us On:</h1>
					<a href=""><img src="wp-content/themes/twentythirteen/images/facebook.jpg" alt=""></a>
					<a href=""><img src="wp-content/themes/twentythirteen/images/weixin.jpg" alt=""></a>
					<div class="subwrapper">
						<p>Subscribe to our mailing list:</p>
					<?php echo do_shortcode( '[contact-form-7 id="12" title="联系表单 1"]' ); ?>
					</div>

				</div>
			</div>
		</section>
	</div>
</body>
<script>
$(".ask").hover(
    function() {
        $(this).addClass('active');
    }, function() {
        $( this ).removeClass('active');
    }
);
$(".caw").hover(
    function() {
        $(this).addClass('active');
    }, function() {
        $( this ).removeClass('active');
    }
);

skrollr.init({
	forceHeight: false,
	mobileCheck: function() {
        //hack - forces mobile version to be off
        return false;
    }
});
$(document).ready(function() {
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {},
			overlay: {
		      locked: false
		    }
		}

	});
});
$(function() {
    $('.fleft').hover(function() {
        $(this).stop().animate({width: '64%'}, 'fast')
        $('.fmid').not(this).stop().animate({width: '0%'}, 'fast');
    }, function() {
        $('.fleft').stop().animate({width:'32%'},'fast');
        $('.fmid').not(this).stop().animate({width: '32%'}, 'fast');
    });
    $('.fmid').hover(function() {
        $(this).stop().animate({width: '64%'}, 'fast')
        $('.fright').not(this).stop().animate({width: '0%'}, 'fast');
    }, function() {
        $('.fmid').stop().animate({width:'32%'},'fast');
        $('.fright').not(this).stop().animate({width: '32%'}, 'fast');
    });
    $('.fright').hover(function() {
        $(this).stop().animate({width: '64%'}, 'fast')
        $('.fmid').not(this).stop().animate({width: '0%'}, 'fast');
    }, function() {
        $('.fright').stop().animate({width:'32%'},'fast');
        $('.fmid').not(this).stop().animate({width: '32%'}, 'fast');
    });
     $('.caw').hover(function() {
        $(this).stop().animate({width: '90%'}, 'fast')
        $('.caw .words').stop().css({display:'block'},'fast');
    }, function() {
        $('.caw').stop().animate({width:'60%'});
        $('.caw .words').stop().css({display:'none'});
    });
      $('.ask').hover(function() {
        $('.caw').not(this).stop().animate({width: '30%'}, 'fast');
        $('.caw img').stop().css({zIndex: '-1'})
        $('.ask .words').stop().css({display:'block'},'fast');
    }, function() {
        $('.caw').stop().animate({width:'60%'},'fast');
        $('.caw img').stop().css({zIndex: '2'})
        $('.ask .words').stop().css({display:'none'});
    });
});
</script>
