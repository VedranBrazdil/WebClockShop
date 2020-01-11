<?php
  include_once 'header.php';

  $sql = "SELECT * FROM comments";
  $komentari_result = $conn->query($sql);

?>
<!-- ############################### Naslov i ########################################### -->
<!-- ############################## Kontakt gore desno ################################## -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Clockwise</a></h1>
    </div>
    <div id="quickinfo" class="fl_right">
      <ul class="nospace inline">
        <li><strong>Contact:</strong><br>
          +00 (123) 456 7890</li>
        <!-- <li><strong>Lobortis:</strong><br>
          +00 (123) 456 7890</li> -->
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ####################### Pocetna slika i tekst ################################# -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/prva.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">Welcome</h2>
      <p>To the Clockwise homepage</p>
      <p>Don't rush, take your time</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="pages/gallery.html">Our clock gallery</a></li><!-- tipka jen -->
          <li><a class="btn" href="pages/full-width.html">About us</a></li><!-- tipka dva class="btn inverse" -->
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################# sales, service i repairs icons and text ###################################### -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <p class="nospace"><a href="pages/sidebar-left.html">we have all you need</a></p> <!-- DODAJ LINK ZA RADNO VRIJEME -->
      <h2 class="heading font-x3">Services</h2>
    </div>
    <div class="group center">
      <article class="one_third first"><a href="pages/gallery.html"><i class="icon fa fa-clock-o fa-pulse fa-3x fa-fw"></i></a>
        <h4 class="font-x1 uppercase"><a href="pages/gallery.html">Clock sales</a></h4>
        <p>We have different types of designed modern clocks for your home. Their price is cheap, but they are priceless.</p>
      </article>
      <article class="one_third"><a href="pages/sidebar-left.html"><i class="icon fa fa-battery-quarter"></i></a>
        <h4 class="font-x1 uppercase"><a href="pages/sidebar-left.html">Clock servicing</a></h4><!-- SERVICE -->
        <p>Servicing your clock will allow it to run smoothly for many more years to come. Somethimes all your clock needs is little bit of oil.</p>
      </article>
      <article class="one_third"><a href="pages/sidebar-left.html"><i class="icon fa fa-cog fa-spin fa-fw"></i></a>
        <h4 class="font-x1 uppercase"><a href="pages/sidebar-left.html">Clock repairs</a></h4><!-- REPAIR -->
        <p>If your clock is beyond servicing, our engineers can fix your clock in no time. Just bring it.</p>
      </article>
    </div>
    <!-- ############################  one_quarter  /// za 4 u redu ################## -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->

<!-- ######################### Dio sa 2 sata i kvoutovima I IMENIMA ################################# -->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/druga21.png');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <!-- <p class="nospace"><a href="#">Venenatis odio ornare magna</a></p> CRVENI TEKST IZNAD-->
      <h2 class="heading font-x3">Everyone needs to know what time it is</h2>
      <p>These are some of the words said about our shop.</p>
    </div>
    <ul id="testimonials" class="nospace group">
      <li class="one_third first">
        <figure class="clear"><img src="images/demo/60x601.png" alt="">
          <figcaption><strong>Mr. John Johanesy</strong><br>
            <em>Worker, BigCompany.Co</em></figcaption>
        </figure>
        <blockquote>“The Clock Shop is truly a great place.”</blockquote>
      </li>
      <li class="one_third">
        <figure class="clear"><img src="images/demo/60x601.png" alt="">
          <figcaption><strong>Marijan Marinović</strong><br>
            <em>Driver, DriverCompany</em></figcaption>
        </figure>
        <blockquote>Polite workers and great atmosphere. I wish I had more time to stay there.</blockquote>
      </li>
      <li class="one_third">
        <figure class="clear"><img src="images/demo/60x601.png" alt="">
          <figcaption><strong>Peter Peterson</strong><br>
            <em>CEO, GlobalSales</em></figcaption>
        </figure>
        <blockquote>Fun place.</blockquote>
      </li>
    </ul>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="group">
      <section class="one_half first">
        <h6 class="heading font-x3 btmspace-50">All of the comments</h6>
        <ul class="nospace">

        <?php while($komentar = mysqli_fetch_assoc($komentari_result)) : ?>
          <li class="btmspace-30">
            <article>
              <p class="font-xs" style="font-size:18px;"><?= $komentar['name']; ?></p>
              <p class="nospace" style="font-size:23px;"><a><?= $komentar['comment']; ?></a></p>
              <time class="font-xs" datetime="2017-25-06"><?= $komentar['date']; ?></time>
            </article>
          </li>
        <?php endwhile; ?>
<!--
          <li class="btmspace-30">
            <article>
              <p class="font-xs">George</p>
              <p class="nospace" style="font-size:23px;"><a>Could have been better</a></p>
              <time class="font-xs" datetime="2017-17-06">Saturday, 17<sup>th</sup> April 2017</time>
            </article>
          </li>

          <li>
            <article>
              <p class="font-xs">Karl</p>
              <p class="nospace" style="font-size:23px;"><a>Great experience in shop but it needs more space</a></p>
              <time class="font-xs" datetime="2017-14-06">Thursday, 14<sup>th</sup> April 2017</time>
            </article>
          </li>
-->
        </ul>
      </section>
      <section class="one_half">
        <h6 class="heading font-x3 btmspace-50">Leave yours here</h6>
        <p>Did you like or did you hate your visit to our store? Leave your opinion down below.</p>
        <p class="btmspace-30">All inappropriate comments will be deleted, so please behave.</p>
<!-- ################################################################################################ -->
<!-- ######################################### POST POST POST ####################################### -->
<!-- ################################################################################################ -->


        <form action="komentari.php" method="post">
          <div class="block clear">
            <label for="name">Name</label>
            <input type="text" name="name" value="" size="22">
            <input type="hidden" name="date" value="<?= date("Y-m-d"); ?>">
          </div>
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea name="comment" type="text" value="" cols="25" rows="10"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </section>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="title">About us</h6>
      <p>We sell highly designed and high quality house clocks. We have stores around the world and we hope you will visit one of them in case you did not visit one yet.</p>
      <p>If you need more information you can call our phone or contact us by email.</p>
    </div>
    <div class="one_third">
      <h6 class="title">Contact</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Main Street 12, BigTown, zipcode 345000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7899</li>
        <li><i class="fa fa-envelope-o"></i> clockwiseinfo@email.com</li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="title">Working hours</h6>
      <ul class="nospace linklist">
        <li><a>Monday 7:00 - 20:00</a></li>
        <li><a>Tuesday 7:00 - 20:00</a></li>
        <li><a>Wednesday 7:00 - 20:00</a></li>
        <li><a>Thursday 7:00 - 20:00</a></li>
        <li><a>Friday 7:00 - 20:00</a></li>
        <li><a>Saturday 7:00 - 11:00</a></li>
      </ul>
    </div>
    
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ############################### Tipka za scrolanje natrag gore  ################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>