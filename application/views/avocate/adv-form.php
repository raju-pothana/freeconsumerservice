<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      .adv-item {
        width: 100%;
        padding: 20px;
        border: 1px solid #d3d3d3;
        border-radius: 5px;
        margin-bottom: 20px;
      }
      .image-block {
        position: relative;
        overflow: hidden;
        max-width: 100px !important;
        padding: 0 !important;
        height: 100px;
        background-color: #dcd8d5;
      }
      .image-block > img {
        max-width: none;
        width: auto;
        height: 100%;
        display: block;
        position: absolute;
        top: 50%;
        right: 0;
        left: 50%;
        bottom: 0;
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
      }
    </style>
  </head>
  <body>
    <div class="container">
	<form method="post" action="<?=base_url();?>advocates">
      <div class="row">
        <div class="col-lg-12 d-flex my-4 px-0">
		
          <input type="text" name="nameField" placeholder="Search here" class="form-control" value="<?= $_POST['nameField'];?>" />
          <button type="submit" class="btn btn-primary d-flex ml-4" >
            <span>Search</span>
            <span class="ml-2"
              ><svg
                width="1em"
                height="1em"
                viewBox="0 0 16 16"
                class="bi bi-search"
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"
                />
                <path
                  fill-rule="evenodd"
                  d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"
                /></svg
            ></span>
          </button>
		  &nbsp;<a href="<?= base_url(); ?>advocates/add"><i class="fa fa-plus" aria-hidden="true"></i><button type="button" class="btn btn-primary d-flex ml-4">Add</button></a>
        </div>
      </div>
	  
	  </form>
      <div class="row">
	  <?php foreach ($advocates as $advocatesList) { ?>
        <div class="d-flex adv-item">
          <img src="<?=base_url();?><?= $advocatesList['passportphoto']; ?>" alt="photo" class="image-block" />
          <div class="col">
            <h4><?= $advocatesList['name_advocate']; ?></h4>
            <label><?= $advocatesList['address']; ?></label>
            <p>
              <span class=""
                ><svg
                  width="1em"
                  height="1em"
                  viewBox="0 0 16 16"
                  class="bi bi-briefcase-fill"
                  fill="#0079c1"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z"
                  />
                  <path
                    fill-rule="evenodd"
                    d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5v1.384l-7.614 2.03a1.5 1.5 0 0 1-.772 0L0 5.884V4.5zm5-2A1.5 1.5 0 0 1 6.5 1h3A1.5 1.5 0 0 1 11 2.5V3h-1v-.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V3H5v-.5z"
                  /></svg></span
              ><span class="mr-2"><?= $advocatesList['experience']; ?></span>years Experience
            </p>
          </div>
          <div class="col">
            <label class="text-danger">Specialized practiced areas</label>
            <p><?= $advocatesList['specialized_practice_areas']; ?></p>
            <a href="<?=base_url();?>advocates/view/<?= $advocatesList['id'];?>"><button class="btn btn-primary text-uppercase">Contact Now</button></a>
          </div>
        </div>
	  <?php } ?>
          
            
        </div>
      </div>
    </div>
  </body>
</html>
