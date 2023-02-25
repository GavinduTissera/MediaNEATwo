<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Fonts/gordita-cufonfonts-webfont/style.css">
    <link rel="stylesheet" href="Fonts/futura-std-4-cufonfonts-webfont/style.css">
    <link rel="stylesheet" href="CSS/reset.css">
    <link rel="stylesheet" href="CSS/styles.css">
    <script src="https://kit.fontawesome.com/62b71b12cb.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script>
		ScrollReveal({ 
            distance: "100px",
            duration: 1500,
            delay: 200
        })
	</script>
    <title>Red Balloon Reviews</title>
</head>

<body>
    <header>
        <nav class="NavBar">
            <!--Text that goes to home screen when clicked-->
            <a class="LogoNavBar" href="index.php"><img class="RedBalloonLogo" src="Includes/MediaNEAGraphics/Balloons/redballoonlogolong.png" alt="Red Balloon Reviews Logo"></a>
            <ul class="NavBarList">
                <!--Options that form the navigation bar-->
                <li><a class="NavBarHome" href="index.php">HOME</a></li>
                <!-- lINK TO THE NEWS TIMELINE -->
                <li><a class="NavBarReviews" href="index.php#AboutUsSection">ABOUT US</a></li>
                <li><a class="NavBarNews" href="NewsTimeline.php">NEWS & REVIEWS</a></li>
            </ul>
        </nav>
        <hr>
    </header>
    <main>
        <div class="OpeningSection">
            <div class="FeaturedContent">
                <a href="News/an-insider-look-into-our-lives.php">
                    <div class="RestOfFeaturedContent">
                        <!-- <div class="ImageDiv"> -->
                        <img src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" class="MainPicture" alt="">
                        <!-- </div> -->
                        <div class="FCD TitleTextDiv">
                            <h2 class="FC TitleText">Featured Content</h2>
                        </div>
                        <div class="FeaturedFullContent">
                            <div class="FeaturedContentLabel">
                                <h3 class="ContentTypeLabel Interviews">INTERVIEW</h3>
                            </div>
                            <div class="Featured ContentText">
                                <h2 class="ContentTypeText Title">An insider look into "Our Lives" with director Amirah</h2>
                                <h3 class="ContentTypeText Description">Award-winning director Amirah goes through the process of making critically acclaimed movie "Our Lives", with her record-breaking team of women.</h3>
                            </div>
                        </div>

                    </div>
                </a>

            </div>
            <div class="Clouds">
                <div class="RightTopCloud">
                    <img src="Includes/MediaNEAGraphics/clouds/cloud4-NoBG.png" alt="">
                </div>
                <div class="LeftBottomCloud">
                    <img src="Includes/MediaNEAGraphics/clouds/cloud7-NoBG.png" alt="">
                </div>
            </div>
            <div class="GTD TitleTextDiv SecondaryTitleDiv">
                <div class="GT TitleText SecondaryTitle">Latest Stories</div>
            </div>
            <section class="GallerySection">

                <div class="GalleryContent">
                    <!--Carousel-->
                    <div class="carousel">
                        <div class="radioandslides">
                            <!--Left and right buttons-->
                            <button onclick="DecrementCounter()" class="prev -button" id="prev-button">&#10229;</button>
                            <button onclick="IncrementCounter()" class="next -button" id="next-button">&#10230;</button>
                            <!--Radio Buttons-->
                            <input type="radio" name="radioselectors" id="radio1">
                            <input type="radio" name="radioselectors" id="radio2">
                            <input type="radio" name="radioselectors" id="radio3">
                            <input type="radio" name="radioselectors" id="radio4">
                            <input type="radio" name="radioselectors" id="radio5">
                            <!--Pictures in the gallery-->
                            <div class="slide first">
                                <img src="Includes/MediaNEAGraphics/GalleryPictures/StickmanPicture.png" alt="">
                                <div class="SlideFullContent">
                                    <div class="SlideContentLabel">
                                        <h3 class="ContentTypeLabel Reviews">REVIEW</h3>
                                    </div>
                                    <div class="SlideContentText">
                                        <h2 class="ContentTypeText Title">An insider look into "Our Lives" with director Amirah</h2>
                                        <h3 class="ContentTypeText Description">Award-winning director Amirah goes through the process of making critically acclaimed movie "Our Lives", with her record-breaking team of women.</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <img src="Includes/MediaNEAGraphics/GalleryPictures/BandBackground.png" alt="">
                                <div class="SlideFullContent">
                                    <div class="SlideContentLabel">
                                        <h3 class="ContentTypeLabel Reviews">REVIEW</h3>
                                    </div>
                                    <div class="SlideContentText">
                                        <h2 class="ContentTypeText Title">An insider look into "Our Lives" with director Amirah</h2>
                                        <h3 class="ContentTypeText Description">Award-winning director Amirah goes through the process of making critically acclaimed movie "Our Lives", with her record-breaking team of women.</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <img src="Includes/MediaNEAGraphics/GalleryPictures/basscloseup.png" alt="">
                                <div class="SlideFullContent">
                                    <div class="SlideContentLabel">
                                        <h3 class="ContentTypeLabel Reviews">REVIEW</h3>
                                    </div>
                                    <div class="SlideContentText">
                                        <h2 class="ContentTypeText Title">An insider look into "Our Lives" with director Amirah</h2>
                                        <h3 class="ContentTypeText Description">Award-winning director Amirah goes through the process of making critically acclaimed movie "Our Lives", with her record-breaking team of women.</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <img src="Includes/MediaNEAGraphics/GalleryPictures/fullband.png" alt="">
                                <div class="SlideFullContent">
                                    <div class="SlideContentLabel">
                                        <h3 class="ContentTypeLabel Reviews">REVIEW</h3>
                                    </div>
                                    <div class="SlideContentText">
                                        <h2 class="ContentTypeText Title">An insider look into "Our Lives" with director Amirah</h2>
                                        <h3 class="ContentTypeText Description">Award-winning director Amirah goes through the process of making critically acclaimed movie "Our Lives", with her record-breaking team of women.</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <img src="Includes/MediaNEAGraphics/GalleryPictures/fullbandotherside.png" alt="">
                                <div class="SlideFullContent">
                                    <div class="SlideContentLabel">
                                        <h3 class="ContentTypeLabel Reviews">REVIEW</h3>
                                    </div>
                                    <div class="SlideContentText">
                                        <h2 class="ContentTypeText Title">An insider look into "Our Lives" with director Amirah</h2>
                                        <h3 class="ContentTypeText Description">Award-winning director Amirah goes through the process of making critically acclaimed movie "Our Lives", with her record-breaking team of women.</h3>
                                    </div>
                                </div>
                            </div>
                            <!--Auto Navigation-->
                            <div class="AutoNavigation">
                                <div class="Autobtn1"></div>
                                <div class="Autobtn2"></div>
                                <div class="Autobtn3"></div>
                                <div class="Autobtn4"></div>
                                <div class="Autobtn5"></div>
                            </div>
                        </div>
                        <!--Manual Navigation-->
                        <div class="ManualNavigation">
                            <label for="radio1" class="Manualbtn" id="Manualbtn"></label>
                            <label for="radio2" class="Manualbtn" id="Manualbtn"></label>
                            <label for="radio3" class="Manualbtn" id="Manualbtn"></label>
                            <label for="radio4" class="Manualbtn" id="Manualbtn"></label>
                            <label for="radio5" class="Manualbtn" id="Manualbtn"></label>
                        </div>
                    </div>
                </div>


                <div class="MainArticleSection">
                    <ol class="StoryOrderedList">
                        <li class="StoryOrderedListItem firstList">
                            <h3 class="StoryOrderedListText">"Utterly beautiful" - Feminist movie <br> 'Hey!' gets raving reviews</h3>
                        </li>
                        <li class="StoryOrderedListItem">
                            <h3 class="StoryOrderedListText">The biggest problem with the feminist movement in Hollywood</h3>
                        </li>
                        <li class="StoryOrderedListItem">
                            <h3 class="StoryOrderedListText">What it's like living as a Black woman<br>in America - A short film</h3>
                        </li>
                        <li class="StoryOrderedListItem">
                            <h3 class="StoryOrderedListText">PeoplesFilm: the film studio making<br>huge strides for gender equality</h3>
                        </li>
                        <li class="StoryOrderedListItem">
                            <h3 class="StoryOrderedListText">How do you make your mark<br>as a female director?</h3>
                        </li>
                        <li class="StoryOrderedListItem lastList">
                            <h3 class="StoryOrderedListText">The Best Of Us Season 2 is out now and its better than ever</h3>
                        </li>
                    </ol>

                </div>
            </section>
        </div>

        <div class="ASD TitleTextDiv SecondaryTitleDiv">
            <div class="AS TitleText SecondaryTitle">Popular Articles</div>
        </div>
        <div class="ArticleSection">
            <div class="ArticleContent">
                <div class="FullArticle ArticleOne">
                    <div class="ArticlePic">
                        <img class="ArticleImg ImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                        <div class="PopArtLabel">
                            <h3 class="ContentTypeLabel News">NEWS</h3>
                        </div>
                    </div>
                    <div class="ArticleContents ArtOne">
                        <div class="PopArtFullContent">

                            <div class="PopArtContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="FullArticle ArticleTwo">
                    <div class="ArticlePic">
                        <img class="ArticleImg ImgOne" src="Includes/MediaNEAGraphics/Images/oscarLogo.jpg" alt="">
                        <div class="PopArtLabel">
                            <h3 class="ContentTypeLabel Opinion">OPINION</h3>
                        </div>
                    </div>
                    <div class="ArticleContents ArtTwo">

                    </div>
                </div>
                <div class="FullArticle ArticleThree">
                    <div class="ArticlePic">
                        <img class="ArticleImg ImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/fullband.png" alt="">
                        <div class="PopArtLabel">
                            <h3 class="ContentTypeLabel Interview">INTERVIEW</h3>
                        </div>
                    </div>
                    <div class="ArticleContents ArtThree">

                    </div>
                </div>
                <div class="FullArticle ArticleFive">
                    <div class="ArticlePic">
                        <img class="ArticleImg ImgFive" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                        <div class="PopArtLabel">
                            <h3 class="ContentTypeLabel News">NEWS</h3>
                        </div>
                    </div>
                    <div class="ArticleContents ArtFive">

                    </div>
                </div>
                <div class="FullArticle ArticleSix">
                    <div class="ArticlePic">
                        <img class="ArticleImg ImgSix" src="Includes/MediaNEAGraphics/GalleryPictures/basscloseup.png" alt="">
                        <div class="PopArtLabel">
                            <h3 class="ContentTypeLabel Review">REVIEW</h3>
                        </div>
                    </div>
                    <div class="ArticleContents ArtSix">

                    </div>
                </div>
            </div>
        </div>
        <div class="IWD TitleTextDiv SecondaryTitleDiv">
            <div class="IW TitleText SecondaryTitle">Women of the Week</div>
            <div class="IWInfo SecondaryText">
                <h3 class="IWInfoText">A showcase of the women who are changing the world through film</h3>
            </div>
        </div>
        <section class="CarouselWrapper">
            <ul class="CarouselList">
                <li class="CarouselItem itemStart">
                    <div class="CarouselPic">
                        <img class="CarouselImg CarImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                    </div>
                    <div class="CarouselContents CarouselOne">
                        <div class="CarouselFullContent">

                            <div class="CarouselContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="CarouselItem">
                    <div class="CarouselPic">
                        <img class="CarouselImg CarImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                    </div>
                    <div class="CarouselContents CarouselOne">
                        <div class="CarouselFullContent">

                            <div class="CarouselContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="CarouselItem">
                    <div class="CarouselPic">
                        <img class="CarouselImg CarImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                    </div>
                    <div class="CarouselContents CarouselOne">
                        <div class="CarouselFullContent">

                            <div class="CarouselContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="CarouselItem">
                    <div class="CarouselPic">
                        <img class="CarouselImg CarImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                    </div>
                    <div class="CarouselContents CarouselOne">
                        <div class="CarouselFullContent">

                            <div class="CarouselContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="CarouselItem">
                    <div class="CarouselPic">
                        <img class="CarouselImg CarImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                    </div>
                    <div class="CarouselContents CarouselOne">
                        <div class="CarouselFullContent">

                            <div class="CarouselContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="CarouselItem itemEnd">
                    <div class="CarouselPic">
                        <img class="CarouselImg CarImgOne" src="Includes/MediaNEAGraphics/GalleryPictures/AmirahMainPicture.png" alt="">
                    </div>
                    <div class="CarouselContents CarouselOne">
                        <div class="CarouselFullContent">

                            <div class="CarouselContentText">
                                <h2 class="ContentTypeText Title">The Oscars is becoming less progressive every year</h2>
                                <h3 class="ContentTypeText Description">The shutout of Black Female-led films </h3>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>

        <div class="Spacer SeperatorLayer"></div>

        <section class="AboutUsSection">
            <div class="BalloonSection">
                <div class="MainBalloon">
                    <img class="BalloonImg" src="Includes/MediaNEAGraphics/Balloons/redBalloonNoBGEdited.png" alt="">
                </div>
                <div class="AboutUsClouds">
                    <div class="CloudOne">
                        <img class="CloudOneImg" src="Includes/MediaNEAGraphics/clouds/cloud2-NoBG.png" alt="">
                    </div>
                    <div class="CloudTwo">
                        <img class="CloudTwoImg" src="Includes/MediaNEAGraphics/clouds/cloud4-NoBG.png" alt="">
                    </div>
                    <div class="CloudThree">
                        <img class="CloudThreeImg" src="Includes/MediaNEAGraphics/clouds/cloud7-NoBG.png" alt="">
                    </div>
                </div>
            </div>
            <div class="TextSection">
                <div class="AboutUsFullContent" id="AboutUsSection">
                    <div class="AboutUsTitle">
                        <h2 class="AU TitleText">About Us</h2>
                    </div>
                    <div class="AboutUs ContentText">
                        <h2 class="ContentTypeText Title">We're a group delivering news, interviews and reviews on feminist movies to people across the country!</h2>
                        <h3 class="ContentTypeText Description">W</h3>
                    </div>
                </div>
                <div class="SocialFullContent">
                    <div class="SocialTitle">
                        <h2 class="SO TitleText">Follow us!</h2>
                    </div>
                    <div class="Socials">
                        <div class="YourubeBox"></div>
                        <div class="TweechBox"></div>
                        <div class="InsteegromBox"></div>
                        <div class="TueeterBox"></div>
                        <div class="DescordBox"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======GALLERY SECTION=======-->
    </main>
    <script type="text/javascript" src="Javascript/gallery.js"></script>
    <script type="text/javascript">
        var MainPicture = document.querySelector(".MainPicture")
        var FeaturedContentText = document.querySelector(".Featured.ContentText")
        var ContentTypeTextTitle = FeaturedContentText.querySelector(".ContentTypeText.Title")
        var ContentTypeTextDescription = FeaturedContentText.querySelector(".ContentTypeText.Description")
        console.log(MainPicture)
        MainPicture.addEventListener("mouseover", function() {
            ContentTypeTextDescription.classList.add("hovering")
            ContentTypeTextTitle.classList.add("hovering")
        })

        MainPicture.addEventListener("mouseout", function() {
            ContentTypeTextDescription.classList.remove("hovering")
            ContentTypeTextTitle.classList.remove("hovering")
        })
    </script>
</body>

</html>