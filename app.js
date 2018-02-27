jQuery.validator.setDefaults({
  debug: true,
  success: "valid"
});     
$("document").ready(function()
    { 
      $("input").attr("required", "true");
      $( "#form" ).validate({
  rules: {
    nom: {
    required: true,
    minlength: 12,
    maxlength: 15,
    }
  }
})
      })  ;
     /*  $("#nom").keyup(function(event)
       {
        $('#content').html(this.value);
       }) ;
    })  ;
       
*/