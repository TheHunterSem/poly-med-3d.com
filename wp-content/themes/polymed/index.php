<?php
/*
  Template Name: Template for "Main page"
*/
?>

<!-- Include Header -->
<?php get_header();

the_post();

?>


<div class="main-top-banner-wrapper">
    <div class="img-block">
        <img src="<?php echo get_template_directory_uri(); ?>/images/HeroShot-1.png" alt="">
    </div>
    <div class="content-block">
        <h1 class="header">POLY-MED 3D <br> TECHNOLOGIES</h1>
        <p class="text">Poly-Med provides fully traceable, medical grade polymers and filaments for additive
            manufacturing, along
            with in-house fused filament printing services. Our materials offer distinct advantages by their unique
            properties based on their composition, architecture, and desired performance. Poly-Med’s bioresorbable
            materials are not only guaranteed to be medical-grade, they also provide innovative properties that
            yield a
            better printing experience, coupled with enhanced part functionality. With over 910 polymer solutions,
            we
            are continuously developing the next bioresorbable materials for your device needs.
        </p>
    </div>
</div>

<div class="centered-container">

    <div class="content">
        <h2 class="header-content-general fix-pd-bt">POLY-MED 3D SOLUTIONS & SERVICES</h2>
        <p class="text-content-general">We produce medical-grade, high quality materials for your 3D printing
            operations. If you need a particular material to enable your 3D printing application, we can customize our
            materials to fit your need. Poly-Med 3D is the leading partner for the supply and additive manufacturing of
            bioresorbable materials.</p>
        <p class="text-content-general">Having served a large number of innovators and industrial clients in the
            biotechnology space, Poly-Med 3D is your trusted partner in 3D printing bioresorbable materials for
            first-in-class medical devices. Contact US at <a href="mailto:sales@poly-med3d.com">sales@poly-med3d.com</a>
        </p>
    </div>

    <section class="what_we_provide">
        <h2 class="header-content-general">What we Provide</h2>
        <div class="what_we_provide-wrapper">

            <div class="item">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/what-we-provide-1.png" alt="">
                </div>
                <h4 class="header">3D PRINTING MATERIALS</h4>
                <p class="description">MEDICAL GRADE</p>
            </div>

            <div class="item">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/what-we-provide-2.png" alt="">
                </div>
                <h4 class="header">3D PRINTING SERVICES</h4>
                <p class="description">QUALITY PRINTING</p>
            </div>

            <div class="item">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/what-we-provide-3.png" alt="">
                </div>
                <h4 class="header">CONTRACT MANUFACTURING</h4>
                <p class="description">MANUFACTURING USING 3D PRINTING</p>
            </div>

        </div>
    </section>

    <section class="vertically-integrated">
        <h2 class="header-content-general">VERTICALLY INTERGRATED SOLUTIONS</h2>

        <?php

        $video_id = get_field('video_id');

        if ($video_id) {

            ?>

            <div class="video-block-wrapper">

                <div class="video-block">

                    <div class="youtube" id="<?php echo $video_id; ?>"
                         data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720">
                    </div>

                </div>

            </div>

        <?php } ?>

    </section>

    <section class="printing-services">
        <div class="left-side">
            <img src="<?php echo get_template_directory_uri(); ?>/images/printing-services.png" alt="">
        </div>
        <div class="right-side">
            <div class="content">
                <h3 class="header-content-general">3D PRINTING SERVICES</h3>
                <img src="<?php echo get_template_directory_uri(); ?>/images/what-we-provide-2-black.png" alt="">
                <p class="text-content-general">Poly-Med provides a variety of materials for 3D-printing applications,
                    along with in-house 3D printing services. Our materials and services are supported by an ISO
                    13485-certified quality system of where we have fully traceable materials and processes for your 3D
                    printing needs.</p>
                <p class="text-content-general">
                    Poly-Med filaments are synthesized, extruded, inspected, packaged, and shipped using fully traceable
                    processes.</p>
                <p class="text-content-general">Poly-Med offers in-house 3D printing using fused filament technologies.
                    <a href="mailto:sales@poly-med3d.com">Contact us</a> at sales@poly-med3d.com to learn more!
                </p>
            </div>
            <a href="/3d-printing-services/" class="see-services-link purple-btn" target="_blank">SEE SERVICES</a>
        </div>
    </section>

</div>

<!--YouTube custom play button, and image preview-->
<script type="text/javascript">
    "use strict";

    function r(f) {
        /in/.test(document.readyState) ? setTimeout('r(' + f + ')', 9) : f()
    }

    r(function () {
        if (!document.getElementsByClassName) {
            // IE8 support
            var getElementsByClassName = function (node, classname) {
                var a = [];
                var re = new RegExp('(^| )' + classname + '( |$)');
                var els = node.getElementsByTagName("*");
                for (var i = 0, j = els.length; i < j; i++)
                    if (re.test(els[i].className)) a.push(els[i]);
                return a;
            }
            var videos = getElementsByClassName(document.body, "youtube");
        }
        else {
            var videos = document.getElementsByClassName("youtube");
        }

        var nb_videos = videos.length;
        for (var i = 0; i < nb_videos; i++) {
            // Based on the YouTube ID, we can easily find the thumbnail image
            videos[i].style.backgroundImage = 'url(http://i.ytimg.com/vi/' + videos[i].id + '/sddefault.jpg)';

            // Overlay the Play icon to make it look like a video player
            var play = document.createElement("div");
            play.setAttribute("class", "play");
            videos[i].appendChild(play);

            videos[i].onclick = function () {
                // Create an iFrame with autoplay set to true
                var iframe = document.createElement("iframe");
                var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1";
                if (this.getAttribute("data-params")) iframe_url += '&' + this.getAttribute("data-params");
                iframe.setAttribute("src", iframe_url);
                iframe.setAttribute("frameborder", '0');

                // The height and width of the iFrame should be the same as parent
                iframe.style.width = this.style.width;
                iframe.style.height = this.style.height;

                // Replace the YouTube thumbnail with YouTube Player
                this.parentNode.replaceChild(iframe, this);
            }
        }
    });
</script>


<?php get_footer(); ?>
