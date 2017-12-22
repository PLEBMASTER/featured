var $form = $('form#test-form'),
    url = 'https://script.google.com/macros/s/AKfycbzIGyys0TCY-hc6KvdtE0SKz51iNLcRPulONVKQyjdshxH_8uFM/exec'

$('#submit-form').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})
