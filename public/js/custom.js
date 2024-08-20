!function(v){"use strict";v(window).on("load",function(){v("#preloader")[0]&&v("#preloader").delay(300).fadeTo(300,0,function(){v(this).remove()})}),v(document).ready(function(){var e;v("a[href='#']").on("click",function(t){t.preventDefault()}),v("#site-navigation").length&&(e=v("#site-navigation").offset().top),v(document).scroll(function(){var t=v(document).scrollTop();e<t?v("#site-navigation").addClass("fixed"):v("#site-navigation").removeClass("fixed")}),v(".navbar-collapse").css({maxHeight:v(window).height()-v(".navbar-header").height()+"px"}),v("#main-slide").carousel({pause:!0,interval:5e3}),v(window).scroll(function(){800<v(this).scrollTop()?v("#back-to-top").addClass("show-back-to-top"):v("#back-to-top").removeClass("show-back-to-top")}),v("#back-to-top").on("click",function(){return v("html, body").animate({scrollTop:0},800),!1}),v("#carousel-testimonials").carousel({wrap:!0,pause:!0,interval:5e3}),v("#refresh").on("click",function(){location.reload()});var a=v("#main-slide");a.on("touchstart",function(t){var e=t.originalEvent.touches[0].pageX;v(this).one("touchmove",function(t){t=t.originalEvent.touches[0].pageX;5<Math.floor(e-t)?a.carousel("next"):Math.floor(e-t)<-5&&a.carousel("prev")}),a.on("touchend",function(){v(this).off("touchmove")})});var t,o,n,i,s,r=v("#carousel-testimonials");r.on("touchstart",function(t){var e=t.originalEvent.touches[0].pageX;v(this).one("touchmove",function(t){t=t.originalEvent.touches[0].pageX;5<Math.floor(e-t)?r.carousel("next"):Math.floor(e-t)<-5&&r.carousel("prev")}),r.on("touchend",function(){v(this).off("touchmove")})}),t=document,o="script",n="btcwdgt",window.addEventListener("load",function(){t.getElementById(n)||(i=t.createElement(o),s=t.getElementsByTagName(o)[0],i.src="https://widgets.bitcoin.com/widget.js",i.id=n,s.parentNode.insertBefore(i,s))},!1);navigator.userAgent.toLowerCase();var l={selectFilter:v("#currency-select"),btcCalculator:v("#bitcoin-calculator")};if(l.selectFilter.length)for(var c=0;c<l.selectFilter.length;c++){var u=v(l.selectFilter[c]);u.select2({placeholder:!!u.attr("data-placeholder")&&u.attr("data-placeholder"),minimumResultsForSearch:u.attr("data-minimum-results-search")?u.attr("data-minimum-results-search"):10,maximumSelectionSize:3,dropdownCssClass:u.attr("data-dropdown-class")?u.attr("data-dropdown-class"):""})}function d(t){t=parseFloat(t.replace(/[^\d.]/g,"")).toFixed(2);return v.isNumeric(t)?t:0}function m(t){t=t.replace(/[^\d.]/g,"");return v.isNumeric(t)?t:0}function p(t){t.each(function(){var t=v(this),e=parseInt(t.children(".pricing-features").width(),10),a=parseInt(t.width(),10);t.scrollLeft()>=e-a-1?t.parent("li").addClass("is-ended"):t.parent("li").removeClass("is-ended")})}function h(t,a){v.each(t,function(t,e){t!=a?v(this).removeClass("is-visible is-selected").addClass("is-hidden"):v(this).addClass("is-visible").removeClass("is-hidden is-selected")})}l.btcCalculator.length&&v.getJSON("https://blockchain.info/ticker",function(s){var t,e=[],a=0;for(t in s)e.push({id:a,text:t}),a++;for(var o=0;o<l.btcCalculator.length;o++){var n=v(l.btcCalculator[o]),i=v(n.find('[name="btc-calculator-value"]')),r=v(n.find('[name="btc-calculator-result"]')),n=v(n.find('[name="btc-calculator-currency"]'));n.select2({placeholder:!!n.attr("data-placeholder")&&n.attr("data-placeholder"),minimumResultsForSearch:n.attr("data-minimum-results-search")?n.attr("data-minimum-results-search"):50,maximumSelectionSize:3,dropdownCssClass:n.attr("data-dropdown-class")?n.attr("data-dropdown-class"):"",data:e}),i.length&&r.length&&function(a,o,n){var i="btc";a.on("input",function(){var t=this.selectionStart,e=this.selectionEnd;this.value=m(this.value),this.setSelectionRange(t,e),o.val(d(""+s[n.select2("data")[0].text].buy*this.value)),i="btc"}),o.on("input",function(){var t=this.selectionStart,e=this.selectionEnd;this.value=d(this.value),this.setSelectionRange(t,e),a.val(m(""+this.value/s[n.select2("data")[0].text].sell)),i="currency"}),a.trigger("input"),o.blur(),n.on("change",function(){"btc"===i?o.val(d(""+s[n.select2("data")[0].text].buy*a.val())):a.val(m(""+o.val()/s[n.select2("data")[0].text].sell))})}(i,r,n)}}).fail(function(){console.log("Error while fetching data from https://blockchain.info/ticker")}),p(v(".pricing-body")),v(window).on("resize",function(){window.requestAnimationFrame(function(){p(v(".pricing-body"))})}),v(".pricing-body").on("scroll",function(){var t=v(this);window.requestAnimationFrame(function(){p(t)})}),v(".pricing-container").each(function(){var a=v(this),t=a.children(".pricing-switcher").find("input[type='radio']"),o=a.find(".pricing-wrapper"),n={};t.each(function(){var t=v(this).val();n[t]=o.find("li[data-type='"+t+"']")}),t.on("change",function(t){t.preventDefault();var e=v(t.target).val();n[e].addClass("is-selected"),Modernizr.cssanimations?o.addClass("is-switched").eq(0).one("webkitAnimationEnd oanimationend msAnimationEnd animationend",function(){h(n,e),o.removeClass("is-switched"),a.find(".pricing-list").hasClass("bounce-invert")&&o.toggleClass("reverse-animation")}):(h(n,e),o.removeClass("is-switched"))})}),jQuery(".mfp-youtube").magnificPopup({type:"iframe",mainClass:"mfp-fade",removalDelay:0,preloader:!1,fixedContentPos:!1,iframe:{patterns:{youtube:{src:"https://youtube.com/embed/%id%?autoplay=1&rel=0"}}}});var f;v("#team-carousel").owlCarousel({items:3,loop:!0,margin:10,autoplay:!0,center:!0,autoplayTimeout:2e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:2},1e3:{items:3}}}),v("#img-carousel").owlCarousel({items:4,loop:!0,margin:10,autoplay:!0,center:!0,autoplayTimeout:2e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:2},1e3:{items:4}}}),v("#video-carousel").owlCarousel({items:4,loop:!0,margin:10,autoplay:!0,center:!0,autoplayTimeout:2e3,autoplayHoverPause:!0,responsive:{0:{items:1},600:{items:2},1e3:{items:4}}}),v(".navbar-nav .fa-search").on("click",function(){v(".site-search .container").toggleClass("open")}),v(".site-search .close").on("click",function(){v(".site-search .container").removeClass("open")}),v(".form-contact").on("submit",function(){v(".output_message").text("Loading...");var t=v(this);return v.ajax({url:t.attr("action"),method:t.attr("method"),data:t.serialize(),success:function(t){"success"==t?(v(".form-contact").find(".output_message_holder").addClass("d-block"),v(".form-contact").find(".output_message").addClass("success"),v(".output_message").text("Your message has been sent successfully!")):(v(".form-contact").find(".output_message_holder").addClass("d-block"),v(".form-contact").find(".output_message").addClass("error"),v(".output_message").text("Error while Sending email! try later"))}}),!1}),v(".qtyplus").on("click",function(t){t.preventDefault(),f=v(this).attr("data-field");t=parseInt(v("input[name="+f+"]").val(),10);isNaN(t)?v("input[name="+f+"]").val(0):v("input[name="+f+"]").val(t+1)}),v(".qtyminus").on("click",function(t){t.preventDefault(),f=v(this).attr("data-field");t=parseInt(v("input[name="+f+"]").val(),10);!isNaN(t)&&1<t?v("input[name="+f+"]").val(t-1):v("input[name="+f+"]").val(1)}),v("[data-toggle='tooltip']").tooltip()})}(jQuery);