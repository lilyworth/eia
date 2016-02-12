<?php
// Currently hard coded template for Tiger campign - aim to convert in to page builder
 get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">


      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- MASTHEAD -->
      <div class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/_/img/tiger-campaign__banner.jpg');">
        <div class="masthead__gradient"></div>
        <!-- masthead__gradient -->

        <div class="wrapper">

          <div class="masthead__title">
            <h1><?php the_title(); ?></h1>
            <h2>End tiger farming to protect wild tigers</h2>
          </div>
        <!-- masthead__title -->

      </div>
      <!-- wrapper -->


      </div>
      <!-- masthead -->
      <!-- ////////////////////////////////////////////////////////////////// -->

      <div class="share-bar-wrapper">
      <div class="share-bar wrapper">

        <ul class="share-bar__share-list">
            <li class="share-bar__share-list__facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"><i class="icon-facebook"></i>Share</a></li>

            <li class="share-bar__share-list__twitter"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo urlencode(wp_get_shortlink()); ?>&amp;via=Eiainvestigator"><i class="icon-twitter"></i>Tweet</a></li>

        </ul>


  <a class="share-bar__donate" href="/donate">Donate</a>

      </div>
      <!-- share-bar -->
      </div>
      <!-- share-bar-wrapper -->

      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- EMBED -->
      <div class="wrapper wrapper--embed">
      <div class="embed">

        <iframe id="iframe_container" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="550" height="300" src="https://prezi.com/embed/tvtadatlzsoh/?bgcolor=ffffff&amp;lock_to_path=1&amp;autoplay=1&amp;autohide_ctrls=1&amp;landing_data=bHVZZmNaNDBIWmlSa1k1MmNRK3VoaXFhTktOYzU5Ynl1M2d3RmxIcTEya1lPR1VNQkE3VFBxdDN2eFpOS2Z5MkUvc25SK1ArSElHMU1sb0FrMTRCVVJiMWJ0d2IvUT09&amp;landing_sign=JAxvJgp-APjn2W_0K1jne5kqFtLaYmxCgSe37LORho4#"></iframe>

      </div>
      </div>
      <!-- embed -->
      <!-- ////////////////////////////////////////////////////////////////// -->



      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- TEXT BLOCK -->
      <div class="wrapper">
      <div class="text-block">
      <p>Tigers are highly endangered – there are as few as 3,200 remaining in the wild. One of the most significant threats for the survival of tigers is trade in their body parts. Almost every body part of the tiger is traded by criminals for massive profit and the trade is fuelled by corruption. The main market for tiger products is China, with other markets in Vietnam and Laos.
      </p>

      <p>The trade threat is exacerbated by a marked increase in tiger 'farms' in China, Laos, Vietnam and Thailand where tigers are kept, and are often intensively bred, for trade. Facilities keeping tigers include not just large tiger farms but also circuses and smaller facilities with fewer animals which are used as a front for laundering illegal tiger parts and products. Such trade stimulates further demand for tiger parts and products and undermines enforcement operations and demand-reduction efforts.
      </p>

    </div>
  </div>

      <div class="image image--large">
      <img src="<?php echo get_template_directory_uri(); ?>/_/img/tiger-campaign__graph--parts.png" alt="Diagram showing the uses of tiger body parts" />
      </div>


      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- TEXT BLOCK -->
      <div class="wrapper">
      <div class="text-block">

      <p><strong>In 2007, the international community decided tigers should not be bred for their parts and products but, despite these international commitments, tiger farming has increased at a rapid pace because some countries have not done enough to follow through. Consequently, operations replicating the tiger farming model have spread across South-East Asia and China, with new facilities reportedly being established.</strong></p>

      <p><a href="https://prezi.com/opf9afenvcai/tigers-behind-bars-china-lang/" target="_blank">点击阅读中文Prezi幻灯</a></p>

      <p>The interactive map below provides a glimpse into the murky world of tiger farming, highlighting its rapid growth in China, Laos, Vietnam and Thailand. The vast majority of these facilities have no conservation value whatsoever – it’s all about the money and price tags that tigers represent for them. There now are over 7,000 captive tigers in facilities in China and South-East Asia. Not every facility identified on the map has been known to trade.</p>
    </div>
    <!-- text-block -->
      </div>
      <!-- wrapper -->

      <!-- ////////////////////////////////////////////////////////////////// -->


      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- EMBED -->
      <div class="embed">

        <!-- title / intro -->
        <div class="wrapper">



          <h2>#whereRthetigers?</h2>
          <p>Explore the map to find tigers in captivity, facilities implicated in trade and planned facilities.</p>
        </div>
        <!-- wrapper -->

        <?php if (is_mobile()): ?>

            <iframe width='100%' height='300' frameborder='0' src='https://eia-uk.cartodb.com/viz/a9eb8112-351a-11e5-8ac5-0e6e1df11cbf/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>  

        <?php else: ?>

        <iframe width='100%' height='520' frameborder='0' src='https://eia-uk.cartodb.com/viz/a9eb8112-351a-11e5-8ac5-0e6e1df11cbf/embed_map' allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>

        <?php endif; ?>



        <p class="note">The map is based on openly available information and is not an exhaustive list of facilities with captive tigers. Note that not all facilities are implicated in trade.</p>

      </div>
      <!-- embed -->
      <!-- ////////////////////////////////////////////////////////////////// -->

      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- TEXT BLOCK -->
      <div class="wrapper">
      <div class="text-block">

<div class="caption alignright"> <img src="<?php echo get_template_directory_uri(); ?>/_/img/tiger-campaign__graph--population--500.png" alt="Tiger population graph" />
<p class="note"><a href="<?php echo get_template_directory_uri(); ?>/_/img/EIA-Tiger-Farming-Timeline_until-July-2015.pdf">Download our Tiger Farming Timeline</a></p>
  </div>


          <p>Since the early 1990s, EIA has conducted several investigations and comprehensive research into trade in tiger and other Asian big cat body parts and products, uncovering a wealth of information on the nature of trade, the criminals and corrupt officials perpetuating it, trade routes, methods of trafficking and profiles of consumers. Below is a selection of video clips extracted from covert footage obtained from EIA investigations in China and Laos, the latter in partnership with Education for Nature Vietnam. </p>




          <p>The timeline below goes back in time to illustrate the dire state of decline of wild tigers and the parallel growth of captive tigers in tiger farms and other facilities. For example, in China, from an estimated 4,000 wild tigers in 1949 the population as declined to an estimated 40-50 wild tigers surviving today. As wild tigers declined, the tiger farming industry in China expanded exponentially and there are now reportedly between 5,000 to 6,000 tigers in more than 200 facilities.
          </p>



          <p>It is clear that trade in captive-bred tigers has not alleviated pressure on wild animals and instead stimulates demand, drives poaching and undermines enforcement. On the other hand, tiger populations recover when protected with a zero-tolerance approach to domestic trade, as evidenced in India, Nepal and in the Russian Far East.
          </p>


          <p>The graph and additional information below show that from 2000 until July 16, 2015, at least 387 tigers were seized in China, Thailand, Vietnam and Laos. The number seized in trade across the region is likely to be higher. Based on a review of circumstances around these seizures, it is possible that 54 per cent of the 387 tigers shown here may have been sourced from captive facilities (either wild-caught and laundered through captive facilities or bred in captivity).
        </p>




      </div>
      <!-- text-block -->
      </div>
      <!-- wrapper -->

      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- LARGE IMAGE -->
      <div class="wrapper">
      <div class="image image--large">

          <div class="caption">
          <img src="<?php echo get_template_directory_uri(); ?>/_/img/tiger-campaign__graph--seizures.png" alt="Tiger population graph" />
          <p class="note"><a href="<?php echo get_template_directory_uri(); ?>/_/img/EIA_Table-of-Tiger-Crime-Incidents_until-16-July-2015.pdf">Download our Table of Tiger Crime Incidents</a></p>
          </div>
      </div>
      </div>



      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- TEXT BLOCK -->
      <div class="wrapper">
      <div class="text-block">

        <h2>ACTION ALERT: What can you do to help end tiger farming and tiger trade?</h2>

        <p>Tigers continue to be bred for trade in their body parts. In China, the Government issues permits so that anyone can legally buy and sell tiger skins from captive tigers.</p>

        <p><strong>Here are several simple but important ways in which you can contribute towards ending tiger farming and tiger trade:</strong></p>

          <ol>
            <li>
              <p><strong>Send an email.</strong> China's Head of State, President Xi Jinping, will soon be visiting Prime Minister David Cameron in the UK. Send an email to Prime Minister Cameron to actively call upon China to end all tiger trade. You can compose your own message or use/adapt the sample email below. Please be respectful.</p>

              <p>You can directly email the Prime Minister from https://email.number10.gov.uk/ (fewer than 1,000 characters max).</p>

              <p><em>SAMPLE EMAIL:</em></p>

              <p><em>Dear Mr. Cameron</em></p>

              <p><em>I am writing to express my deepest concern about the ongoing legal trade in China of tiger skins obtained from captive tigers bred in nefarious tiger ‘farms’. With fewer than 3,200 tigers remaining in the wild, it is shocking that the largest end-destination market of tiger parts and products, i.e., China, continues to promote such trade.</em></p>

              <p><em>Investigations conducted by the Environmental Investigation Agency (EIA), a UK-based NGO, found that China issues permits for captive tiger skins to be traded as rugs for luxury home décor. Such trade stimulates demand for tiger products, undermines enforcement efforts to end tiger trade and poses a serious threat to tigers in the wild.</em></p>

              <p><em>I respectfully request that you raise this issue during President Xi Jinping’s upcoming visit to the UK and urge him to announce a total ban on all trade in tiger parts from captive or wild tigers, to end tiger farming and destroy stockpiles tiger parts and products.</em></p>

              <p><em>Yours sincerely,</em></p>

              <p><em>[Your name]</em></p>

              <p>For additional impact, if you live in the UK you can also write to your local MP requesting that this issue be raised in the UK Parliament and with relevant Ministries such as the UK Foreign and Commonwealth Office. You can find the contact details of your local MP by entering your postcode at <a href="http://www.theyworkforyou.com/">theyworkforyou.com</a>.</p>

              <p>If you live outside the UK, you can also write to the British and/or Chinese embassy in your country, urging it to support a total ban on all tiger trade.</p>

            </li>

              <li>

                <p><strong>Holiday responsibly.</strong> When on vacation, avoid the temptation to give tiger farms your money to pose and play with captive tigers. Be especially wary of such facilities in China, Thailand, Vietnam and Laos, where there is illegal trade in tiger parts. Explore our interactive map above to learn more about facilities implicated in the tiger trade.</p>
            </li>

            <li>
              <p><strong>Say NO! to tiger trade.</strong> Join the international community in celebrating International Tiger Day on July 29, 2015 by <a href="https://twitter.com/intent/tweet?text=Say%20NO!%20to%20tiger%20trade!%20%23whereRthetigers%20%40Number10gov%20%40POTUS" target="_blank">tweeting &quot;Say NO! to tiger trade!&quot; with #whereRthetigers to @Number10gov (UK Prime Minister David Cameron) @POTUS (to US President Barack Obama)</a>. You can also follow EIA's Twitter account <a target="_blank" href="https://twitter.com/intent/user?screen_name=EIAinvestigator">@EIAinvestigator</a> and reTweet our messages about this issue.
              </p>
            </li>

            <li><strong>Spread the message</strong>. Share the above images and link to this webpage on Facebook, Twitter, Google+, Instagram, Pinterest and other social media platforms.</li>


            <li><strong>Join us at the Save Wild Tigers Gala Dinner.</strong> Raise vital funds for tigers by attending this magnificent evening at the Savoy Hotel London on October 9, 2015. More information is available at <a href="https://eia-international.org/events/save-wild-tigers-gala-dinner">eia-international.org/events/save-wild-tigers-gala-dinner</a></li>

            <li><strong>Support EIA's work.</strong> Find out how you can help EIA at <a href="https://eia-international.org/get-involved"> eia-international.org/get-involved</a>.</li>


          </ol>

      </div>
      <!-- text-block -->
      </div>
      <!-- wrapper -->



      <div class="embed">
        <div class="wrapper">

          <h2>To learn more about tiger farms watch this video:</h2>

          <iframe src="https://player.vimeo.com/video/51996183?color=ffffff&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

        </div>
<!-- wrapper -->
      </div>
      <!-- embed -->


      <!-- ////////////////////////////////////////////////////////////////// -->
      <!-- TEXT BLOCK -->
      <div class="wrapper">
      <div class="text-block">


          <p>Thank you for your help and action!</p>

        </div>
        <!-- text-block -->
        </div>
        <!-- wrapper -->


        <div class="share-bar-wrapper">
        <div class="share-bar wrapper">

          <ul class="share-bar__share-list">
              <li class="share-bar__share-list__facebook"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"><i class="icon-facebook"></i>Share</a></li>

              <li class="share-bar__share-list__twitter"><a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo urlencode(wp_get_shortlink()); ?>&amp;via=Eiainvestigator"><i class="icon-twitter"></i>Tweet</a></li>

          </ul>


      <a class="share-bar__donate" href="/donate">Donate</a>

        </div>
        <!-- share-bar -->
        </div>
        <!-- share-bar-wrapper -->


  <!-- ////////////////////////////////////////////////////////////////// -->
  <!-- LARGE IMAGE -->

      <!-- <div class="wrapper">
      <div class="image image--left">



      </div>
      </div> -->

  <!-- ////////////////////////////////////////////////////////////////// -->


				<?php // wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>



				<!-- <div class="post-tags">
				<?php // the_tags( __('View all our content on: '), ', ', ''); ?>
				</div> -->




			<?php // edit_post_link(__('Edit this entry'),'','.'); ?>

		</article>

	<?php //  comments_template(); ?>

	<?php endwhile; endif; ?>





<?php get_footer(); ?>
