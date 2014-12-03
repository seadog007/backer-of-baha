$(document)
  .ready(function() {

    var
      validationRules = {
        firstName: {
          identifier  : 'url',
          rules: [
            {
              type   : 'empty',
              prompt : '請填入網址'
            },
            {
              type   : 'url',
              prompt : '請填入正確的網址'
            }
          ]
        }
      }
    ;

    $('.ui.dropdown')
      .dropdown({
        on: 'hover'
      })
    ;

    $('.ui.form')
      .form(validationRules, {
        on: 'blur'
      })
    ;

    $('.masthead .information')
      .transition('scale in', 1000)
    ;
  })
;