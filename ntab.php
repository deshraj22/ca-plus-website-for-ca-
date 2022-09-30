<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Private Limited</a></li>
    <li><a data-toggle="tab" href="#menu1">Partnership</a></li>
    <li><a data-toggle="tab" href="#menu2">Sole proprietorship</a></li>
    <li><a data-toggle="tab" href="#menu3">Limited Company</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="IMAGES/man-with-pen-signs-document.jpg"class="d-block mx-lg-auto img-fluid im" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            <img src="IMAGES/a.jpg" class="d-block mx-lg-auto img-fluid imm" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3 hm ser4">Private Limited </h1>
            <p class="lead pl zx2">A private limited company is that which has members between 2 to 200 in number without any limit for paid-up share capital. The number of directors can be between 2 to 15, and this makes it a closed system that has many benefits in terms of decision-making and sharing stake. A private limited company is a great way to establish business with family and friends as the liability is limited and there is no scope for any outsider influence. If you’re interested in registering your business as a private limited company, you can use our filing tools that will make registration a simple process without any confusion faced with documentation and other formalities.</p>
            <p class="lead pl zx2"> The Company Registration India is an online forum that is regulated and comes under the purview of the Companies Act, 2013. The site also adheres to the guidelines set by the Ministry of Corporate Affairs (MCA) and is processed by the Registrar of Companies from the Central Registration Centre (CRC). This portal for registering companies has a web-based filing system that we can assist you to fill.</p>
            <p class="lead pl zx2">Once you sign up with us to avail of our registration services, we will personally take over the job of establishing your company as a private limited company. With our years of experience, we have served a multitude of private companies pan-India and abroad.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
</body>
</html>