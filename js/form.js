  $('form.ajax').on('submit',function(){


var that = $(this);
var url=that.attr('action');
var type = that.attr('method');
var data={};
 that.find('[name]').each(function(index,value) {


var that = $(this);
var name=that.attr('name');
var value = that.val();
data[name]=value;


 }); 
$("#invalid-email").load(url,


data





	);


return false;


  });

