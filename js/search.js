$(document).ready(function(){
  var xhrobj=  $.ajax({
                         url: 'http://api.pricecheckindia.com/feed/product/'+$("#category").val()+'/'+$("#model").val()+'.json?user=avrb1331&key=XWEKCSFNOYTGBQSD',
                         dataType: "jsonp",
            timeout:60000,
            async:true,
            error:function(xhr,t)
            {
              if(xhr.status==404 || xhr.status==503 || t=="timeout")
              {
                xhrobj.abort();
                alert('please try again later Something went wrong');
              }
            },
                         success: function (data)
            {
              var length = data.product.length;
              var price = [];
              var tableDetails = "";
              var image = "";
              for(var i = 0; i < length; i++) {
                var storeLength = data.product[i].stores.length;

                for(var j = 0; j < storeLength; j++) {
                  image = data.product[i].stores[j].image;
                  tableDetails += "<tr><td>"+data.product[i].stores[j].website+"</td><td>"+data.product[i].model+"</td><td>"+data.product[i].stores[j].price+"</td><td><a href='"+data.product[i].stores[j].url+"'>Click Here</a></td></tr>";
                  price.push(data.product[i].stores[j].price);
                }
              }

              var smallPrice = 999999999999;
              var bigPrice = 0;
              for(var i = 0; i < price.length; i++) {
                if(smallPrice > price[i]) {
                  smallPrice = price[i];
                }
                if(bigPrice < price[i]) {
                  bigPrice = price[i];
                }
              }

              $("#smallPrice").html("&#8377;"+smallPrice);
              $("#bigPrice").html("&#8377;"+bigPrice);
              $("#dataImage").html("<img src = '"+image+"' width = '265' height='276'>");
              $("#table_content").html(tableDetails);
            }});


});
