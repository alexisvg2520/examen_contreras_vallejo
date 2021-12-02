
  $(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var base = 'php\conexionBase.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});