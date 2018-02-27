'use strict';
+(function ($) {
  $(document).ready(function () {
    var scrollClicked;
    if ($('.carousel-inner .container').length > 0 && $(window).width() >= '992') {
      // add "Certs" to carousel images
    }

    if ($(window).width() >= '992') {
      // add "Certs" to carousel images
      
      $('#contact-button').click(function (e) {
        e.preventDefault();
        scrollClicked = false;
        if ($(this).hasClass('selected')) {
          $('#contact-button').find('.glyphicon').removeClass('glyphicon-minus');
          $('#contact-button').find('.glyphicon').addClass('glyphicon-plus');
          $(this).removeClass('selected');
          $('#contact-info').hide();
        } else {
          $(this).addClass('selected');
          $('#contact-button').find('.glyphicon').removeClass('glyphicon-plus');
          $('#contact-button').find('.glyphicon').addClass('glyphicon-minus');
          $('#contact-info').show();
        }
      });
      scrollClicked = false;
      $(window).scroll(function () {
        if (!scrollClicked) {
          $('#contact-button').click();
          scrollClicked = true;
        }
      });

    }

    // timeline
    if ($('.timeline').length > 0 && $(window).width() >= '992') {
      $('.events').hide();
      $('.timeline .container').append('<div class="row"><div class="col-md-6 col-md-offset-3 js-timeline-text">Test</div></div><div class="js-timeline"><div class="line"></div></div>');
      var $events = $('.events .event');
      var percentage = 100 / $events.length;
      var subPercentage = percentage / $events.length;
      $events.each(function (index, event) {
        var $event = $(event);
        var $point = $('<div class="point"></div>');
        if (index === 0) {
          $point.append('<div class="text">1993</div>');
        } else if (index === $events.length - 1) {
          $point.append('<div class="text">Present</div>');
        }
        if (index === $events.length - 1) {
          $point.css({
            left: '100%'
          });
        } else {
          $point.css({
            left: (index * (percentage + subPercentage))  + '%'
          });
        }
        $('.js-timeline').append($point);
        $point.click(function () {
          $('.js-timeline-text').html('<h3>' + $event.find('h4').text() + '</h3><h5>' + $event.find('.date').text() + '</h5><p>' + $event.find('.text').text() + '</p>');
          $('.point').removeClass('active');
          $point.addClass('active');
        });
      });
      $('.point').first().click();
    }

    // handle ajax content loading
    $('.load-in-place a').click(function (e) {
      // only for mobile (screen < 992)
      // this is currently where the top menu goes mobile
      if ($(window).width() >= '992') {
        e.preventDefault();
        var $link = $(e.target).closest('a');
        var $heading = $link.closest('h4');
        var $icon = $link.find('.glyphicon');

        if ($link.hasClass('active')) {

          // if the clicked link
          // hasn't already loaded content
          // remove it
          $icon.removeClass('glyphicon-minus');
          $icon.addClass('glyphicon-plus');
          $link.removeClass('active');
          $heading.siblings('.loaded-content').remove();
        } else {

          // otherwise get the url of the link
          // and load it into a newly created container
          // then, animate to show the container
          var url = $link.attr('href');
          $icon.removeClass('glyphicon-plus');
          $icon.addClass('glyphicon-minus');
          $heading.after('<div class="loaded-content"></div>');
          var $loadedContentContainer = $heading.siblings('.loaded-content');
          $loadedContentContainer.load(url + ' .entry-content', function () {
            // content loaded
            var $loadedContent = $loadedContentContainer.find('.entry-content');
            $loadedContent.find('h1').remove();
            var height = $loadedContent.height();
            //$loadedContent.animate({height: height});
            //$loadedContentContainer.animate({height: height});
            $loadedContent.css({
              visibility: 'hidden'
            });
            setTimeout(function () {
              height = $loadedContent.height();
              $loadedContent.css({
                visibility: 'visible',
                height: 0
              });
              $loadedContent.animate({height: height});
              $loadedContentContainer.animate({height: height});
            }, 100);
          });
          $link.addClass('active');
        }
      }
    });
    $("#subscribe").submit(function (e) {
      var $email = $('#email'),
        clearForm = function() {
          for (var i = 0; i < arguments.length; i++) {
            arguments[i].val('');
          }
        };
        
      e.preventDefault();
      $.ajax({
        type: 'POST',
        url: "subscribe.php",
        data: {
          email: $email.val()
        },
        success: function (data) {
          var $message, $errors, i;
          //$('.result').html(data);
          data = $.parseJSON(data);
          $errors = $("<ul></ul>");
          if (data.errors.length > 0) {
            for (i = 0; i < data.errors.length; i += 1) {
              $errors.append("<li>" + data.errors[i] + "</li>");
            }
            $message = $('<div class="fade in alert alert-danger alert-block"><button class="close" data-dismiss="alert">x</button></div>');
            $message.append($errors);
          } else if (data.response === "success") {
            $message = $('<div class="fade in alert alert-success alert-block"><button class="close" data-dismiss="alert">x</button><p>Thanks for subscribing.</p></div>');
            clearForm($email);
          } else {
            $message = $('<div class="fade in alert alert-danger alert-block"><button class="close" data-dismiss="alert">x</button><p>Something went wrong. Please email us directly.</p></div>');
          }
          $("#subscribe").prepend($message);
          $(".alert").alert();
          setTimeout(function () {
            $(".alert").alert('close');
          }, 3000);
        }
      });
      return false;
    });
    
    // when any field is clicked with 
    // data-contact-form="..."
    // launch the contact form modal
    $('body').delegate('[data-contact-form]', 'click', function (e) {
      e.preventDefault();
      var subject = $(e.target).data('contact-form');
      //alert(subject);
      $.ajax('/form-modal.html').done(function (html) {
        var $html = $(html);
        $html.find('#subject').val(subject);
        $html.modal();
        // handle form popup
        $html.find('form').submit(function (e) {
          e.preventDefault();
          $.ajax({
            type: 'POST',
            url: "/contact.php",
            data: $html.find('form').serialize(),
            success: function (data) {
              var $message, $errors, i;
              //$('.result').html(data);
              data = $.parseJSON(data);
              $errors = $("<ul></ul>");
              if (data.errors.length > 0) {
                for (i = 0; i < data.errors.length; i += 1) {
                  $errors.append("<li>" + data.errors[i] + "</li>");
                }
                $message = $('<div class="fade in alert alert-danger alert-block"><button class="close" data-dismiss="alert">x</button></div>');
                $message.append($errors);
                $(".modal-body").prepend($message);
              } else if (data.response === "success") {
                $message = $('<div class="fade in alert alert-success alert-block"><button class="close" data-dismiss="alert">x</button><p>Thanks for your message. We\'ll be sure to get back to you as soon as possible.</p></div>');
                $html.find('.modal-body').html($message);
                setTimeout(function () {
                  $html.modal('hide');
                }, 2000);
              } else {
                $message = $('<div class="fade in alert alert-danger alert-block"><button class="close" data-dismiss="alert">x</button><p>Something went wrong. Please email us directly.</p></div>');
                setTimeout(function () {
                  $html.modal('hide');
                  $html.remove();
                }, 2000);
              }
            }
          });
          return false;
        });
      });
    });
  });
}(jQuery));
