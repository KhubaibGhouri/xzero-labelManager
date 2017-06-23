<div class="backtoTop">
    <div class="btnSurround">
        <span><small>Scroll<br />Top</small></span>
    </div>
</div>
<footer id="footer">
    <ul class="social-networks">
        
        <li class="instagram"><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
    </ul>
    <p>2008 Copyright EDVA Models | Designed by <a target="_blank" href="http://www.synorixco.com/">Synorix</a></p>
</footer>
<!-- EXECUTE SCRIPTS -->
<div class="hidden scripts">
    <script type="text/javascript" src="<?php echo SITE_MEDIA ?>js/jquery.main.js"></script>
    
    <div class="genStyles"></div>
    <link href="<?php echo SITE_MEDIA ?>js/scrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />
    <script src="<?php echo SITE_MEDIA ?>js/scrollbar/jquery.mCustomScrollbar.js"></script>
    <script>
    // Delay stops continous scripts running unneccessarily
    // ////////////////////////////////////////////////////
    var delay = (function () {
    var timer = 0;
    return function (callback, ms) {
    clearTimeout(timer);
    timer = setTimeout(callback, ms);
    };
    })();
    var contW, resultW, resultAmnt
    function resultFit() {
    // INSTAGRAM RESULTS CREATE
    // ////////////////////////
    if ($(window).width() < 771) {
    contW = $('.newsHolder').width();
    resultW = 150
    }
    else {
    contW = $('.newsHolder').width() // .height() - 20;
    resultW = 206
    }
    
    resultAmnt = Math.floor(contW / resultW)
    if (resultAmnt % 2 == 1) {
    resultAmnt = resultAmnt + 1
    }
    if (resultAmnt <= 1) {
    resultAmnt = 1
    resultNW = contW - 20
    }
    else {
    if (resultAmnt <= 3) { resultNW = (contW / resultAmnt) - 7 }
    else {resultNW = Math.floor((contW / resultAmnt))  }
    }
    
    // INSTAGRAM RESULTS APPLY
    // ///////////////////////
    var getCSSresize;
    getCSSresize = '<style>'
    console.log($(window).width())
    if ($(window).width() < 1024) {
    //resultNW = (contW / resultAmnt) - 7
    getCSSresize += ' .instagramHolder  .item { '
    getCSSresize += ' width: ' + resultNW + 'px; !important'
    getCSSresize += ' height: ' + resultNW + 'px; !important }'
    getCSSresize += ' .instagramHolder  .item:nth-child(3) { '
    getCSSresize += ' width: ' + (resultNW * 2) + 'px; !important'
    getCSSresize += ' height: ' + (resultNW * 2) + 'px; !important }'
    }
    else if ($(window).height() < 850) {
    getCSSresize += ' .instagramHolder  .item { '
    getCSSresize += ' width: ' + resultNW + 'px; !important'
    getCSSresize += ' height: ' + resultNW + 'px; !important }'
    getCSSresize += ' .instagramHolder  .item:nth-child(3) { '
    getCSSresize += ' width: ' + (resultNW * 2) + 'px; !important'
    getCSSresize += ' height: ' + (resultNW * 2) + 'px; !important }'
    }
    else {
    getCSSresize += ' .instagramHolder  .item { '
    getCSSresize += ' width: ' + resultNW + 'px; '
    getCSSresize += ' height: ' + resultNW + 'px; }'
    if (resultAmnt == 1) { }
    else {
    getCSSresize += ' .instagramHolder .item.wider {'
    getCSSresize += ' width: ' + (resultNW * 2) + 'px; '
    getCSSresize += ' height: ' + (resultNW * 2) + 'px; }'
    }
    }
    /*getCSSresize += ' .instagramHolderCase { '
    getCSSresize += ' max-height: ' + ($(window).height() - 260) + 'px; }'*/
    // NEWS RESULTS CREATE
    // ///////////////////
    contW = $('.newsHolder').width();
    resultW = 300
    resultAmnt = Math.floor(contW / resultW)
    if (resultAmnt <= 1) {
    resultAmnt = 1
    resultNW = contW
    }
    else {
    if (resultAmnt <= 3) { resultNW = (contW / resultAmnt) }
    else { resultNW = (contW / resultAmnt) }
    }
    // NEWS RESULTS APPLY
    // //////////////////
    getCSSresize += ' .newsHolder .item { '
    getCSSresize += ' width: ' + resultNW + 'px !important; '
    getCSSresize += ' min-width: ' + resultNW + 'px !important; }'
    if (resultAmnt == 1) { }
    else {
    getCSSresize += ' .newsHolder .stamp {'
    getCSSresize += ' width: ' + Math.floor(resultNW * 2) + 'px  !important; }'
    }
    getCSSresize += '</style>'
    $('.genStyles').html(getCSSresize)
    }
    // GET OPTIMUM LAYOUT : INSTAGRAM
    // //////////////////////////////
    var getItem, heightCheck, widthCheck, CurLayout
    function arrangeLayout() {
    $('.masonry-holder').each(function () {
    CurLayout = $(this)
    CurLayout.children('.item').each(function () {
    if ($(this).hasClass('taken') || $(this).hasClass('checked') || $(this).hasClass('wider') || $(this).hasClass('size-large') || $(this).height() < 20) {
    return;
    }
    else {
    $(this).addClass('checking');
    getItem = $(this)
    heightCheck = $(this).height()
    widthCheck = $(this).width()
    console.log(heightCheck)
    CurLayout.children('.item').each(function () {
    if ($(this).hasClass('taken') || $(this).hasClass('checking') || $(this).hasClass('wider') || $(this).height() < 20) {
    return;
    }
    else if (
    $(this).height() < (heightCheck + 20) &&
    $(this).height() > (heightCheck - 20) &&
    $(this).height() == widthCheck) {
    console.log($(this).height() + ' / ' + heightCheck)
    $(this).insertAfter(getItem);
    $(this).addClass('taken');
    getItem.addClass('taken');
    heightCheck = 0
    return false;
    }
    });
    if (heightCheck == 0) { $(this).addClass('checked').removeClass('checking'); }
    else { $(this).removeClass('checking').appendTo(CurLayout); }
    }
    });
    });
    }
    $(document).ready(function () {
    
    // IF USER IS COMING FROM AN INSIDE PAGE, RETURNING USER, NO ENTER CLICK REQUIRED
    
    $('.homePage .btn').click(function () {
    $('.homePage').addClass('hide');
    $('#main').removeClass('sticky');
    if (grabMasonary) {
    grabMasonary.isotope('layout');
    }
    
    setTimeout(function () {
    $('#header').addClass('show');
    //$('.instagramHolderCase').css('visibility', '');
    resultFit();
    grabMasonary.isotope('layout');
    }, 600);
    });
    setTimeout(function () {
    $('.slideset').css('opacity', '1');
    $('.text-block .btn').css('opacity', '');
    }, 600);
    
    var getImg, getCroppedPic, nextResults
    // GET INSTAGRAM FEED
    $.ajax({
    type: "GET",
    dataType: "jsonp",
    cache: false,
    url: "https://api.instagram.com/v1/users/self/media/recent/?access_token=330665510.1677ed0.058a23a07ae44bddbc8210744e8c305e",
    success: function (data) {
    //alert(data);
    if (data.meta.code != 200) {
    console.log(data)
    $('.twocolumns').hide();
    }
    else {
    $('.twocolumns h2').text('Instagram').css('height', '');
    //getNewResultID = data.pagination.next_url
    //arr = getNewResultID.split('recent?');
    //nextResults = arr[1];
    //console.log(data);
    var getClass;
    for (var i = 0; i < 20; i++) {
    if (i == 2 || i == 6 || i == 8) { getClass = "item wider" }
    else { getClass = "item" }
    getImg = data.data[i].images.thumbnail.url
    getCroppedPic = getImg.replace("s150x150/index.html", "")
    $('.instagramHolder').append('<div class="' + getClass + '"><div class="item-inner"><a target="_blank" href="' + data.data[i].link + '" class="link-holder"><div class="img-holder"><img src="' + getCroppedPic + '" alt="' + data.data[i].caption.from.full_name + '" /><div class="options"><div class="info"><p>' + data.data[i].caption.text + '</p></div></div></div></a><a href="' + data.data[i].link + '" target="_blank" class="like-icon"><i class="fa fa-heart"></i><span class="number">' + data.data[i].likes.count + '</span></a></div></div>');
    }
    $('.instagramHolder').append('<div class="item loadMore"><div class="item-inner"><a target="_blank" class="link-holder"><div class="img-holder"><img src="<?php echo SITE_MEDIA ?>images/loadMore.png" /><div class="getVertLine"></div><div class="getHoriLine"></div></div></a></div></div>');
    
    if (grabMasonary) {
    grabMasonary.isotope('destroy');
    resultFit();
    initMasonry();
    }
    }
    }
    });
    
    });
    $(window).resize(function () {
    delay(function(){
    resultFit();
    grabMasonary.isotope('layout');
    },300);
    })
    $(window).load(function () {
    resultFit();
    grabMasonary.isotope('layout');
    });
    $(".homePage").scroll(function () {
    preventDefault();
    });
    //Blog feed
    function getpost(data) {
    var item = "";
    var i = 0
    var articleClass = ""
    console.log(data)
    $.each(data.posts, function (key, val) {
    if (i < 80) {//only take first 5
    
    var getTypePost = val.categories[0].slug
    
    if (getTypePost.indexOf("vision") > -1) {
    var thisImg = val.thumbnail_images
    var thisURL = val.url;
    var thisTitle = val.title;
    var thisDate = val.date;
    var thisContent = val.excerpt;
    var imgW, imgH
    if (thisImg === undefined) {
    thisImg = ""
    imgW = 285
    imgH = 70
    } else {
    thisImg = val.thumbnail_images.full.url;
    imgW = val.thumbnail_images.full.width
    imgH = val.thumbnail_images.full.height
    }
    // build articles
    if (getTypePost == "videos") {
    //video article
    var frame, vidUrl
    if (i == 0) {
    item += '<div class="stamp size-large"><div class="item-inner">'
        }
        else {
        item += '<div class="item size-small03"><div class="item-inner">'
            }
            item += '<a href="' + thisURL + '" class="link-holder">'
                item += '<div class="img-holder"><img src="' + thisImg + '" alt="The EdVa LA Blog" /></div>'
            item += '</a>'
            item += '<div class="description">'
                item += '<time class="time">' + thisDate + '</time>'
                item += '<strong class="title"><span class="title-block">' + thisTitle + '</span></span></strong>'
            item += '</div>'
        item += '</div></div>'
        } else {
        if (i == 0) {
        item += '<div class="stamp size-large"><div class="item-inner">'
            }
            else {
            item += '<div class="item size-small03"><div class="item-inner">'
                }
                item += '<a href="' + thisURL + '" class="link-holder">'
                    item += '<div class="img-holder"><img src="' + thisImg + '" alt="The EdVa LA Blog" /></div>'
                item += '</a>'
                item += '<div class="description">'
                    item += '<time class="time">' + thisDate + '</time>'
                    item += '<strong class="title"><span class="title-block">' + thisTitle + '</span></span></strong>'
                item += '</div>'
            item += '</div></div>'
            }
            i++
            articleClass = ""
            }
            } else {
            return false
            }
            });
            $("#getBlogRoll").html(item)
            }
            </script>
            <script src="http://blog.visionlosangeles.com/?json=get_recent_posts&amp;date_format=l,%20F%20j,%20Y&amp;count=80&amp;callback=getpost" type="text/javascript"></script>
            
            <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-56260884-39', 'auto');
            ga('send', 'pageview');
            </script>
            <link href="<?php echo SITE_MEDIA ?>js/autocomplete/jquery-ui.css" rel="stylesheet" />
            <script src = "<?php echo SITE_MEDIA ?>js/autocomplete/jquery-ui.min.js"></script>
            <script>
            $("#autocomplete").autocomplete({
            source: '/ashx/autocomplete.ashx',
            appendTo: ".ajax-drop",
            select: function (event, ui) {
            document.location.href = ui.item.url;
            return false;
            }
            }).autocomplete("instance")._renderItem = function (ul, item) {
            var subCount = item.subCount - 1;
            var subLink = "";
            var Urls = item.urls;
            var SubPortfolios = item.subname;
            var TalentName = item.label
            var SearchTerm = TalentName.toLowerCase().split("" + $("#autocomplete").val().toLowerCase() + "")
            var getTalentName = SearchTerm[0] + '<em>' + $("#autocomplete").val() + '</em>' + SearchTerm[1]
            var SubImage = item.image;
            var SplitUrls = Urls.split(",");
            var SplitSubPortfolios = SubPortfolios.split(",");
            if (SplitUrls.length > 2) {
            for (i = 0; i <= subCount; i++) {
            subLink += '<a class="autoImg" href="' + SplitUrls[i] + '">- ' + SplitSubPortfolios[i] + '</a><br />';
            }
            return $("<li>")
                .append('<a><div class="img-wrap" style="background-image: url(' + SubImage + ')"></div><span>' + getTalentName + '<br><small>' + subLink + '</small></span></a>')
                .appendTo(ul);
                }
                else {
                return $("<li>")
                    .append('<a href="' + item.url + '"><div class="img-wrap" style="background-image: url(' + SubImage + ')"></div><span>' + getTalentName + '<br><small>' + SplitSubPortfolios[0] + '</small></span></a>')
                    .appendTo(ul);
                    }
                    };
                    // GET DEFAULT VALUES
                    $('#autocomplete').each(function () {
                    if ($(this).val() == "") { $(this).val($(this).parent().attr('rel')) }
                    else { }
                    });
                    $('#autocomplete').click(function () {
                    // CHECK FOR EMPTY FIELDS
                    $('#autocomplete').each(function () {
                    if ($(this).val() == "") { $(this).val($(this).parent().attr('rel')) }
                    else { }
                    });
                    // REMOVE DEFAULT TEXT
                    if ($(this).val() == $(this).parent().attr('rel')) { $(this).val(''); }
                    else { }
                    $('.ajax-drop').addClass('showBox');
                    });
                    $('.ajax-drop').mouseenter(function () {
                    // CHECK FOR EMPTY FIELDS
                    if ($(this).val() == "") { $(this).val($(this).parent().attr('rel')) }
                    else { }
                    $('.ajax-drop').mouseleave(function () {
                    $('.ajax-drop').removeClass('showBox');
                    });
                    });
                    </script>
                </div>
            </body>
        </html>