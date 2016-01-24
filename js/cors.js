$(document).ready(function(){

$(".openMobileDropDialog").click(function(){

  var xhrobj=  $.ajax({
                         url: 'http://api.pricecheckindia.com/feed/product/mobile_phones.json?user=avrb1331&key=XWEKCSFNOYTGBQSD',
                         dataType: "jsonp",
 						timeout:60000,
 						async:true,
 						error:function(xhr,t)
 						{
 							if(xhr.status==404 || xhr.status==503 || t=="timeout")
 							{
 								xhrobj.abort();
 								alert('please try again later Something went wrong')
 							}
 						},
                         success: function (data)
 						{
                             var length = data.product.length;
                             var brands = [];
                             for(var i = 0; i < length; i++) {
                                 var storesLength = data.product[i].stores.length;
                                 if(storesLength > 0) {
                                     var index = jQuery.inArray(data.product[i].brand, brands);
                                     if(index == -1) {
                                         brands.push(data.product[i].brand);
                                     }
                                 }
                                 }
                             var html = "<option value='no'>Select Brand</option>";
                              for(var i = 0; i < brands.length; i++) {
                                 html += "<option value  = '"+brands[i]+"'>"+brands[i]+"</option>";
                              }
                             $("#mobiles_dropdown").html(html);
                             }

});




});


$("#mobiles_dropdown").change(function() {
$("#model_mobile_dropdown").html("");
var value = $("#mobiles_dropdown").val();
  var xhrobj=  $.ajax({
                         url: 'http://api.pricecheckindia.com/feed/product/mobile_phones.json?user=avrb1331&key=XWEKCSFNOYTGBQSD',
                         dataType: "jsonp",
            timeout:60000,
            async:true,
            error:function(xhr,t)
            {
              if(xhr.status==404 || xhr.status==503 || t=="timeout")
              {
                xhrobj.abort();
                alert('please try again later Something went wrong')
              }
            },
                         success: function (data)
            {
                             var length = data.product.length;
                             var brands = [];
                             for(var i = 0; i < length; i++) {
                                 var storesLength = data.product[i].stores.length;
                                 if(storesLength > 0) {
                                   var model = data.product[i].brand;
                                   if(model === value) {
                                     var index = jQuery.inArray(data.product[i].model, brands);
                                     if(index == -1) {
                                         brands.push(data.product[i].model);
                                     }

                                   }

                                 }
                                 }
                             var html = "<option value='no'>Select Model</option>";
                              for(var i = 0; i < brands.length; i++) {
                                 html += "<option value  = '"+brands[i]+"'>"+brands[i]+"</option>";
                              }
                             $("#model_mobile_dropdown").html(html);
                             }

});

});

// DONT COPY THE FUNCTIONS----- END FILE
});
// DONT COPY THE FUNCTIONS----- END FILE


function searchMobile() {
  var brand = $("#mobiles_dropdown").val();
  var model = $("#model_mobile_dropdown").val();
  document.location.href="search.php?category=mobile_phones&model="+model+"&brand="+brand;
}
