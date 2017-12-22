

$(document).ready(function(){
	$("#get-data-form").submit(function(e){

		var content = tinymce.get("texteditor").getContent();

		// $("#data-container").html(content);
    document.getElementById("data-container").textContent = content
    console.log(content)

  /*  display hidden*/
		/*return false;*/
	});
});