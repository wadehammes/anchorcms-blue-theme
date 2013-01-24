$(document).ready(function() {
    /*$(function() {
        var searchTimeout = setTimeout(function() {
            $("section.search").hide('blind', {}, 500);
            $(".search-icon").attr("src","http://wadehammes.com/images/search.png");
        }, 5000);
        $("input").focus(function() { clearTimeout(searchTimeout) });
        $(".search-icon").click(function() { clearTimeout(searchTimeout) });
    }),*/

    if ($('#search-page').length > 0) {
      $("section.search").show('blind', {}, 500);
      $(".search-icon").attr("src","http://wadehammes.com/images/x.png");
    }

    $("img.search-icon").click(function () {
        $("section.search").toggle('blind', {}, 500, function() {
            if ($("section.search").is(":visible"))
                { $(".search-icon").attr("src","http://wadehammes.com/images/x.png");
                  $("div.search-tab").css('marginTop', '-1px'); }
            else
                { $(".search-icon").attr("src","http://wadehammes.com/images/search.png");
                $("div.search-tab").css('marginTop', '0px'); }
        });
    }),

    placeholderSupport = ("placeholder" in document.createElement("input"));

    if(!placeholderSupport ){

       $('[placeholder]').focus(function() {
          var input = $(this);
          if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
          }
        }).blur(function() {
          var input = $(this);
          if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
          }
        }).blur().parents('form').submit(function() {
          $(this).find('[placeholder]').each(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
              input.val('');
            }
          })
        });
    }
});
