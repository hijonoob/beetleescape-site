if (typeof jQuery === 'undefined') { throw new Error('Beetle Escape\'s JavaScript requires jQuery') }

tinyMCE.init({
        mode : "textareas"
});

jQuery(function() {
  $('#acao-contraste a').click(
    function(e) {
      if($.cookie('contraste') === null) {
        $.cookie('contraste', 'on');
        $('body').addClass('contraste');
        e.preventDefault();
        return false;
      }else {
        if($.cookie('contraste') == 'on'){
          $.cookie('contraste', 'off');
          $('body').removeClass('contraste');
          e.preventDefault();
          return false;
        }else{
          $.cookie('contraste', 'on');
          $('body').addClass('contraste');
          e.preventDefault();
          return false;
        }
      }
  });

  if($.cookie('contraste') == 'on') {
    $('body').addClass('contraste');
    return false;
  }
});
