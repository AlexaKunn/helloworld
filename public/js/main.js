
$(document).ready(function(){

    $('input[name!="address_2"]').focusout(function(){

      /**
      * form validation for registration,checking for empty fields
      *
      */

      if($(this).val() == '')
      {
        $(this).closest('.form-group').addClass('has-error');
        $('#'+$(this).attr('name')+'_help').remove();
        $(this).closest('.form-group').append('<span id="'+$(this).attr('name')+'_help" class="help-block">Cannot be blank</span>')
      }
      else
      {
        $(this).closest('.form-group').removeClass('has-error');
        $('#'+$(this).attr('name')+'_help').remove();

      }

    });




 });
