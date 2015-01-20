<!DOCTYPE html>
<html lang="en">
<head>
    <title>Native Roots</title>
    <link rel="stylesheet" href="css/styles.css"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            if (!$.cookie('verified')) {
                $('.age').show();
            }

            $('.age .yes').click(function() {
                $.cookie('verified', true);
                $('.age').fadeOut();
            });

            $('.age .no').click(function() {
                alert('Sorry, you must be at least 21 years old, or a valid medical marijuana patient.');
            });

            $('form').submit(function(e) {
                $.post('post.php', {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    message: $('#message').val()
                }).done(function(done) {
                    alert('Thank you! Your message has been sent.');
                });
                event.preventDefault();
            });

            $('.locations').click(function() {
                window.scrollTo(0,1125);
            });

        });
    </script>
</head>
<body>
    <div class="age" style="display: none;">
        <div class="age-modal"></div>
        <div class="age-content">
            <img class="age-logo" src="./images/logo.png"/>
            <h2>Welcome to Native Roots!</h2>
            <p>Native Roots operates in accordance to compliance with state laws regarding access to cannabis. You must be at least 21 years old, or a valid medical marijuana patient. Are you eligible to visit Native Roots?</p>
            <button name="age-button-yes" class="yes">Yes</button>
            <button name="age-button-no" class="no">No</button>
        </div>
    </div>
    <div class="carousel">
        <ul class="panes">
            <li><img src="./images/slide-1.jpg"/></li>
            <li><img src="./images/slide-2.jpg"/></li>
            <li><img src="./images/slide-3.jpg"/></li>
            <li><img src="./images/slide-4.jpg"/></li>
            <li><img src="./images/slide-5.jpg"/></li>
        </ul>
        <img class="logo" src="./images/logo.png"/>
    </div>
    <div class="main-div">
        <div class="locations">
            <img src="./images/locations.png"/>
        </div>

        <div class="categories">
            <div class="variety">
                <img src="./images/massive_variety.png"/>
            </div>
            <div class="category">
                <img src="./images/extracts.png"/>

            </div>
            <div class="category edibles">
                <img src="./images/edibles.png"/>
            </div>
            <div class="category">
                <img src="./images/topicals.png"/>
            </div>
            <div class="category">
                <img src="./images/flower.png"/>
            </div>
            <div class="category-name">
                <img src="./images/categories.png"/>
            </div>
        </div>
        <div class="video-line">
            <!-- use: ?autoplay=1 in the src string -->

            <div class="video">
                <iframe width="560" height="325" src="http://www.youtube.com/embed/TNqwtqMFDC4" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="how-to">
                <img src="./images/how_to_buy_pot_legally.png"/>
            </div>
        </div>
        <div class="tree-house">
            <img src="./images/tree_house_banner.png"/>
        </div>

        <div class="stores" id="stores">
            <div class="store store-denver">
                <img src="./images/location_denver.png" usemap="#map-denver"/>
                <map name="map-denver" id="map-denver">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-apotherary-adult-use" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/NativeRoots" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativerootsapothecary" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-boulder-rec">
                <img src="./images/location_boulder.png" usemap="#map-boulder"/>
                <map name="map-boulder" id="map-boulder">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-boulder" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/nativerootsboulder" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativeroots_boulder" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>

            <div class="store store-boulder-med">
                <img src="./images/location_dandelion.png" usemap="#map-dandelion"/>
                <map name="map-dandelion" id="map-dandelion">
                    <area title="menu" href="//weedmaps.com/dispensaries/colorado/boulder/the-dandelion-locally-owned-grown-best-of-boulder-county-2010-2011" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/thedandelionco" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/thedandelionco" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-eagle-vail">
                <img src="./images/location_vail.png" usemap="#map-vail"/>
                <map name="map-vail" id="map-vail">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-vail" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/nativerootseaglevail" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativerootseaglevail" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-frisco">
                <img src="./images/location_frisco.png" usemap="#map-frisco"/>
                <map name="map-frisco" id="map-frisco">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-frisco-silverthorne-mmj-recreational" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/nativerootssummit" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativerootsapothecary" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-longmont">
                <img src="./images/location_longmont.png" usemap="#map-longmont"/>
                <map name="map-longmont" id="map-longmont">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-longmont" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/nativerootslongmont" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativerootslongmont" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-south-denver">
                <img src="./images/location_south_denver.png" usemap="#map-south"/>
                <map name="map-south" id="map-south">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-apotherary-adult-use" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/NativeRoots" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativerootsapothecary" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-aspen">
                <img src="./images/location_aspen.png" usemap="#map-aspen"/>
                <map name="map-aspen" id="map-aspen">
                    <area title="menu" href="//weedmaps.com/dispensaries/native-roots-aspen" target="_blank" shape="rect" coords="2,244,206,304"/>
                    <area title="facebook" href="//www.facebook.com/nativerootsaspen" target="_blank" shape="rect" coords="215,248,269,305"/>
                    <area title="instagram" href="//instagram.com/nativerootsapothecary" target="_blank" shape="rect" coords="276,249,331,304"/>

                </map>
            </div>
            <div class="store store-coming-soon">
                <img src="./images/location_coming_soon.png"/>
            </div>

        </div>
        <div class="footer">
            <div class="footer-header">
                <div class="affiliates-header">
                    <img src="./images/affiliates.png"/>
                </div>
                <div class="contact-header">
                        <img src="./images/contact_us.png"/>
                </div>
            </div>
            <div class="more">
                <div class="affiliates">
                    <ul>
                        <li><a href="//www.facebook.com/RastaBubble" target="_blank"><img src="./images/rasta_bubble.png"/></a></li>
                        <li><a href="//www.facebook.com/nativerootsextracts" target="_blank"><img src="./images/native_roots.png"/></a></li>
                        <li><a href="//www.facebook.com/imedicate" target="_blank"><img class="imedicate" src="./images/imedicate.png"/></a></li>
                        <li><a href="//www.thedandelionco.com" target="_blank"><img src="./images/the_dandelion.png"/></a></li>
                        <li><a href="//www.marqaha.com" target="_blank"><img src="./images/marqaha.png"/></a></li>
                        <li><a href="//www.foriapleasure.com" target="_blank"><img class="foria" src="./images/foria_lockup.png"/></a></li>
                        <li><a href="//www.facebook.com/nativeroots" target="_blank"><img class="n-pen" src="./images/n_pen.png"/></a></li>
                    </ul>
                </div>
                <div class="contact">
                    <form>
                        <img src="./images/name.png"/><br>
                        <input id="name" name="name" type="text" required><br>
                        <img src="./images/email.png"/><br>
                        <input id="email" name="email" type="email" required><br>
                        <img src="./images/message.png"/><br>
                        <input id="message" name="message" type="text" required><br>
                        <button class="submit" type="submit"></button>
                    </form>
                </div>

            </div>
        </div>

    </div>

</body>
</html>
