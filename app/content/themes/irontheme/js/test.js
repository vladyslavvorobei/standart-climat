jQuery(document).ready(function ($) {
  $('.calculator__block .steps .step .answer .items .item .radio label').on('click', function () {
    $(this).parents('.radio').find('input[type="radio"]').trigger('click');
  });
  $('.calculator__block .steps .step .buttons .button[data-num], .calculator__block .main .button[data-num]').on('click', function(){
    var data_num = $(this).attr('data-num');
    if (data_num==="1") {
      $('.calculator__block .main').fadeOut(0);
      $('.calculator__block .steps').fadeOut(0).fadeIn(300);
    }
    $('.calculator__block .steps > .num .text .caption .current').text(data_num);
    var total = $('.calculator__block .steps > .num .text .caption .total').text();
    $('.calculator__block .steps > .num .line .fill').css('width',data_num*100/total+'%');
    $('.calculator__block .steps .step').fadeOut(0);
    $('.calculator__block .steps .step[data-num="'+data_num+'"]').fadeOut(0).fadeIn(300);
    return false;
  });
  $('.calculator__block .steps .step .answer.image .items .item').on('click', function(){
    var elem = $(this);
    if (elem.hasClass('checked')) {
      return false;
    }
    elem.siblings().removeClass('checked');
    elem.addClass('checked');
  });
  $('.calculator__block .steps .step .buttons .button.next').on('click', function(){
    var elem = $(this);
    var answer = elem.parents('.step').find('.answer');
    if (answer.hasClass('image')) {
      answer.children('input[type="hidden"]').val(answer.find('.items .item.checked .text .caption').text());
    }
  });

  $('.calculator__block .steps .step .answer .items .item .radio label').on('click', function () {
    $(this).parents('.radio').find('input[type="radio"]').trigger('click');
  });

  var goal_id = '';
  $('[data-goal]').on('click', function () {
    goal_id = $(this).attr('data-goal');
  });

  $(".test").on("submit", function() {
    var form = $(this);
    var error = false;
    var button = $(this).find('button');

    if (form.find("input[name='phone']").length>0) {
      var tph = form.find("input[name='phone']").val();
      tph = !tph.match(/^\+7 \([0-9]{3}\) [0-9]{3}-[0-9]{2}\-[0-9]{2}/);
      if(tph == true) {
        form.find("input[name='phone']").addClass("error");
        error = true;
      }
      else if(tph == false){
        form.find("input[name='phone']").removeClass("error");
      }
    }
    if(error == false) {
      if (form.find('input[name="confirm"]').prop('checked')==false) {
        alert('Подтвердите согласие на обработку персональных данных!');
        return false;
      }
      button.prop("disabled", true);
      $.ajax({
        type: 'POST',
        url: window.wp_data.theme_url + 'sendmessage.php',
        data: $(this).serialize(),
        success: function(data) {
          if(data == "true") {
            form.trigger('reset');
            $('.calculator__block .steps').removeClass('active').fadeOut(0);
            $('.calculator__block .complete').fadeOut(0).fadeIn(300);

            button.prop("disabled", false);

            // if (goal_id!=='') {
            //   goal_ya(goal_id);
            // }
          }
        }
      });
    }
    return false;
  });


});