<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="external.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ca plus</title>
</head>

<body>
<?php include("header.php"); ?>
    <!-- main content -->
    <div class="px-4 py-5 my-5 text-center">
        <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
        <div class="container-fluid ser2"> <marquee behavior="" direction="left"><h1 class="display-5 fw-bold" style="color:#66AD47 ;" id="mi">KNOW MORE ABOUT US</h1></marquee></div>

<img src="IMAGES/V8.jpg" alt="..." class="img-thumbnail img" style="width:30%; height:10%"></img>
<img src="IMAGES/V2.jpg" alt="..." class="img-thumbnail img" style="width:30%; height:10%"></img>
<img src="IMAGES/V3.jpg" alt="..." class="img-thumbnail img" style="width:30%; height:10%"></img>

        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p class="zx">One integrated business registration,TAX,ITR,TDS,GST,Business Audit and Accounting to
                help you manage your business and get better visibility into your financials.Let our experts take a load
                off by outsourcing your book-keeping and financial tasks to us. So you can focus on growing.</p>
           
         
          </blockquote>
        </div>
   
        </div>
    </div>
    <div class="container-fluid">
      <div class="row">
      <div class="side-contact bg-form">
      
      <div onclick="openForm()" class=" fbtn bg-btn  px-4 py-2" style="cursor:pointer;">Enquiry
      Now</div>
      <form action="formd.php" method="POST" name="modal_form">
      <div class="row">
      <div class="col-md-12 text-center py-2">
      <h4 style="  background-image: linear-gradient(to right, #ede574, #e1f5c4);margin-bottom:20px;margin-top:0px;letter-spacing:2px;">Get An Imediate Response</h4>
      </div>
      <div class="col-md-12">
      <div class="form-group">
      <input id="form_name" type="text" name="name" class="form-control" placeholder="Name" required="required" data-error="Name is required.">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <input id="form_name" type="number" name="mobile" class="form-control" placeholder="Mobile No *" required="required" data-error="Firstname is required.">
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <textarea id="form_message" name="message" class="form-control" placeholder="Message for me..." rows="3" required="required" data-error="Please, leave us a message."></textarea>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <button type="button" onclick="closeForm()" class="p-btn btn-danger rounded px-4 py-2">Cancel</button>
      <button type="submit" name="submit" id="submit_modal " class=" p-btn btn-warning rounded  px-3 py-2 float-right text-dark">Submit</button>
      </div>
      </div>
      </form>
      </div>
      </div>
      </div>
      <script type="text/javascript">
          /**
           *******Side-Contact Form*******
           **/
          function openForm() {
              let f = document.querySelector('.side-contact');
              if (f.style.right == "0px") {
                  f.style.right = "-320px";
              } else {
                  f.style.right = "0px";
              }
          }
      
          function closeForm() {
              document.querySelector('.side-contact').style.right = "-320px";
          }
      </script>
    <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom" style="color:#66AD47; text-align:center">WHAT WE OFFER</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
            </div>
            <div>
             <div class="container ser"><h3 class="j" id="bb">Business Registration</h3></div>
              <p class="xo">A private limited company is that which has members between 2 to 200 in number without any limit for paid-up share capital.</p>
              <!-- <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
            </div>
            <div>
            <div class="container ser"> <h3 class="j">Taxation</h3></div>
              <p class="xo">Filing Income Tax Returns is an annual occasion with different due dates for different types of taxpayers.</p>
              <!-- <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
            </div>
            <div>
            <div class="container ser"> <h3 class="j">Trademark</h3></div>
              <p class="xo">Trademark registration is meant to safeguard your brand and provide you with the necessary tools to avoid or stop another party from using similar signs to take advantage of the recognition of your business.</p>
              <!-- <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="container " style="margin-top: -101px;" >
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
            </div>
            <div>
            <div class="container ser"> <h3 class="j">Advisory</h3></div>
              <p class="xo">A strong advisory team can change the direction of your business and make it more successful due to the expert advice provided. Hiring a team of advisors can be an expensive affair and also time consuming.</p>
              <!-- <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
            </div>
            <div>
            <div class="container ser"><h3 class="j">IT Consulting</h3> </div>
              <p class="xo">Trust our Top Minds to eliminate work flow pain point, implement new technology. A managed IT services provider with IT consulting services can add immediate value.</p>
              <!-- <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
            </div>
            <div>
            <div class="container ser"><h3 class="j">ISO Certification</h3></div>
              <p class="xo">As a business, the quality of the products and services you provide are first and foremost in the minds of customers who seek to avail your business. .</p>
              <!-- <a href="#" class="btn btn-primary">
                Primary button
              </a> -->
            </div>
          </div>
        </div>
      </div>
    <!-- footer -->
    <?php include("footer.php");?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>