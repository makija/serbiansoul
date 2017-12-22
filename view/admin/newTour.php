

<form action="" method="post">

  <div class="container" id="tour">

    <div class="row boxes border border-secondary rounded">



      <div class="col-md-8 ">
        <select name="tourCat" class="custom-select" id="cat">
          <option selected disabled>Izaberi kategoriju</option>
        </select>


          <div class="form-group">
            <label class="col-form-label" for="tourName">Naziv ture</label>
            <input name="tourName" type="text" class="form-control" id="tourName">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="tourCover">Cover slika</label>
            <input name="tourCover" type="text" class="form-control" id="tourCover">
          </div>

          <div class="form-group">
            <label class="col-form-label" for="tourGallery">Galerija</label>
            <input name="tourGallery" type="text" class="form-control" id="tourGallery">
          </div>

          <div class="form-row">
            <div class="col">
              <label class="col-form-label" for="longitude">Longitude</label>
              <input name="longitude" type="text" class="form-control" placeholder="longitude" value="" id="longitude">
            </div>
            <div class="col">
              <label class="col-form-label" for="latitude">Latitude</label>
              <input name="latitude" type="text" class="form-control" placeholder="latitude" value="" id="latitude">
            </div>
          </div>

          <div class="descTour">
            <p>Karatk opis</p>
            <textarea class="tinymce" id="texteditor" name="shortDesc" rows="8" cols="80" id="shortDesc" data-container=''></textarea>
          </div>

          <div class="descTour">
            <p>Opis ture</p>
            <textarea name="tourDesc" rows="8" cols="80" id="shortDesc" class="tinymce" data-container=''></textarea>
          </div>

          <div class="descTour">
            <p>Program</p>
            <textarea name="tourProgram" rows="8" cols="80" id="desc" class="tinymce" data-container=''></textarea>
          </div>


      </div>

      <div class="col-md-4">
        <select value='1' name='priority' class="custom-select">
          <option selected disabled>Prioritet</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>

        </select>

<div class='form-check spec'><label class='form-check-label'>
 <input name='spec' class='form-check-input' type='checkbox' value='0' ><i class=" "></i> Special</label></div>

      </div>





    </div>
    <!-- row ends -->





    <div class="row boxes border border-secondary rounded " id="cena">
      <div class="row divCena">
        <div class="col-md-10">
          <p class="h6">Cena 1
          </p>
        </div>
        <div class="col-md-2 cenaPlus">
          <button type="button" class="btn btn-secondary btnPlus"> <i class="icon-plus"></i> </button>
        </div>

        <div class="col-md-3">
          <p>Grupa</p>
          <select name="min[]" class="custom-select minimum" >
            <option selected disabled>Min people</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>

        </div>

        <div class="col-md-3">
          <p>Grupa</p>
          <select name=max[] class="custom-select maximum" >
            <option selected disabled>Max ljudi</option>

          </select>

        </div>

        <div class=" col-md-2 price">
          <p>Cena</p>
          <input name="price[]" type="text" class="form-control" value='0'>
        </div>

        <div class=" col-md-2 price">
          <p>Cena %</p>
          <input name = "disPrice[]" type="text" class="form-control" value='0' >
        </div>

      </div>




    </div>
    <!-- row ends -->

    <div class="row boxes border border-secondary rounded" id="services">

      <div class="col-md-12">
        <p class="h6 service">Services</p>

      </div>

      <div class="col-md-4">
      </div>

      <div class="col-md-4">
      </div>

      <div class="col-md-4">
      </div>



    </div>


    <div class="row boxes border border-secondary rounded" id="selectExtraDesc">
        <div class="col-md-12" id="divExtraOpis">

          <p class="h6">Dodaj extra opis za service</p>  <button type="button" id="btnExtra" > Dodaj opis</button>

          <select  id="extraDesc" class="custom-select" name="srvDescId[]">
            <option selected disabled>Izaberi service</option>

          </select>

          <div class="form-group">
            <label class="col-form-label" for="formGroupExampleInput2">Galerija</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="srvDesc[]">

          </div>


        </div>



      </div>


<div class="row">
    <input type="submit" name="newTour" value="Unesi turu">
</div>

  </div>


</form>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
