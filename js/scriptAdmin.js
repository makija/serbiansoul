
$(document).ready(function(){
 $.ajax({
     url: "api/ajaxCategories.php",
     method: "get",
     dataType: "json",
     success: function(res) {
       for (var i = 0; i < res.length; i++) {
         $('#cat').append(
           "<option value=" + res[i].cat_id + ">" + res[i].cat_name + "</option>"
         )

       }
     }

   }) // ajaCatEnds

 $.ajax({
     url: "api/ajaxServices.php",
     method: "get",
     dataType: "json",
     success: function(res) {
         for (var i = 0; i < res.length; i++){
           if (i < 4) {
             $("#services .col-md-4:nth-child(2)").append(
               "<div class='form-check'><label class='form-check-label'><input  name ='serviceChecked[]' class='form-check-input' type='checkbox' value=" + res[i].srv_id + "><i class=" + res[i].srv_icon + "></i>" + res[i].srv_name + "</label></div>"
             )
           } // ifends
           else if (i >= 4 && i <= 8) {
             $("#services .col-md-4:nth-child(3)").append(
               "<div class='form-check'><label class='form-check-label'><input name ='serviceChecked[]' class='form-check-input' type='checkbox' value=" + res[i].srv_id + "><i class=" + res[i].srv_icon + "></i>" + res[i].srv_name + "</label></div>"
             )

           } else {
             $("#services .col-md-4:nth-child(4)").append(
               "<div class='form-check'><label class='form-check-label'><input name ='serviceChecked[]' class='form-check-input' type='checkbox' value=" + res[i].srv_id + "><i class=" + res[i].srv_icon + "></i>" + res[i].srv_name + "</label></div>"
             )

           }


           $("#extraDesc").append(
             "<option value=" + res[i].srv_id + ">" + res[i].srv_name + "</option>"
           )


         } // forends




       } // succesends

   })
   // ajaxserv ends

   $.ajax({
     url:"api/ajaxGetAll.php",
     method:"get",
     dataType:"json",
     success: function(res){
       for(var i = 0;i<res.length;i++){
             $('#allTours tbody').append('<tr><th scope="row">' + (i+1) + '</th> <td> <a href="?ctrl=admin&ctrlm=editTour&id=' + res[i].tour_id + '">'+res[i].cat_name +'</a> </td><td> <a href="?ctrl=admin&ctrlm=editTour&id=' + res[i].tour_id + '">'+res[i].tour_name +'</a> </td><td> <input  name ="active[]" class="form-check-input" type="checkbox" value=""></td></tr>');

       }

     }
   })
});






$(document).ready(function() {

      for(var i=0;i<50;i++){
          $('.minimum').append(
          '<option value='+ i +'>' + i + '</option>');
          $('.maximum').append(
          '<option value='+ i +'>' + i + '</option>');
        }



    var check = $("#services .col-md-4:nth-child(2)").html();



  }) // docReadyends



var priceDiv = 1;
var selectGroupValue = 1;

$(".btnPlus").click(function() {
  priceDiv++
  selectGroupValue++

  var idi = 'group' + priceDiv;
  var minSel = 'min' + selectGroupValue;
  var maxSel = 'max' + selectGroupValue

  var divCena = $('.divCena').html();

  var d = document.createElement('div');
  var p = d.className = 'row divCena ' + idi;


  $('#cena').append(d);

  $('.' + idi).append(divCena);
  $('.' + idi + ' .h6').text('Cena' + priceDiv);

  // $('.' + idi + ' select')[0].setAttribute("name", minSel);
  // $('.' + idi + ' select')[1].setAttribute("name", maxSel);

  $('.' + idi +' i')[0].setAttribute("class","icon-minus");
  $('.' + idi +' .btn').click(function(){
    $('.' + idi).remove();

  });

})

var des = 1;

$("#btnExtra").click(function(){

des++

cl = "extraDesc" +  des;

  var extra = $("#divExtraOpis").html();

  var d = document.createElement('div');
  var p = d.className = "col-md-12 "+ cl;

  $('#selectExtraDesc').append(d);

  $('.' +cl).append(extra);


})

$('#tourName').keyup(function() {
  var name = $(this).val();
  var value = name.toLowerCase().replace(' ', '-');

  $('#tourCover').val(value + '.jpg');
  $('#tourGallery').val(value);
})


$('.btnMinus').click(function(){

        var btn = $(this).parent();

        $(btn).parent().remove(); 
    })