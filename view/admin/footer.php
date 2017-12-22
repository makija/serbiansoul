<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="tinymce/plugin/tinymce/tinymce.min.js"></script>
<script src="tinymce/plugin/tinymce/init-tinymce.js"></script>
<script src="tinymce/js/getdata.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/scriptAdmin.js"></script>


<script type="text/javascript">


function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;
    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
}


$(document).ready(function(){

  var idURL = getUrlParameter('id');
  console.log(idURL);

  $.ajax({
    url:'api/ajaxEditPrices.php',
    method:'post',
    data:{id:idURL},
    dataType:'json',
    success:function(result){

  for(var i =0;i<result.length;i++){

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
  });  //function ends

}//for ends

}//suc ends

});

})


</script>


</body>
