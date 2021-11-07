<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      
      <div class="logo_name">backoffice</div>
      <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      
      <li>
        <a href="dashboard">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="{{ route('navbar.index') }}">
          <i class='bx bx-sidebar' ></i>
          <span class="links_name">Navbar</span>
        </a>
        <span class="tooltip">Navbar</span>
      </li>
      <li>
        <a href="{{ route('slider.index') }}">
          <i class='bx bx-slider' ></i>
          <span class="links_name">Slider</span>
        </a>
        <span class="tooltip">Slider</span>
      </li>
      <li>
        <a href="{{ route('about.index') }}">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">About</span>
        </a>
        <span class="tooltip">About</span>
      </li>
      <li>
        <a href="{{ route('classe.index') }}">
          <i class='bx bxs-category'></i>
          <span class="links_name">Classe</span>
        </a>
        <span class="tooltip">Classe</span>
      </li>

      <li>
        <a href="{{ route('trainer.index') }}">
          <i class='bx bx-network-chart' ></i>
          <span class="links_name">Trainer</span>
        </a>
        <span class="tooltip">Trainer</span>
      </li>
      <li>
        <a href="{{ route('gallery.index') }}">
          <i class='bx bx-photo-album' ></i>
          <span class="links_name">Galleries</span>
        </a>
        <span class="tooltip">Galleries</span>
      </li>
      <li>
        <a href="{{ route('event.index') }}">
          <i class='bx bxs-calendar-event' ></i>
          <span class="links_name">Event</span>
        </a>
        <span class="tooltip">Event</span>
      </li>
      <li>
        <a href="{{ route('pricing.index') }}">
          <i class='bx bx-euro' ></i>
          <span class="links_name">Pricing</span>
        </a>
        <span class="tooltip">Pricing</span>
      </li>
      <li>
        <a href="{{ route('client.index') }}">
          <i class='bx bx-transfer-alt' ></i>
          <span class="links_name">Client</span>
        </a>
        <span class="tooltip">Client</span>
      </li>
      <li>
        <a href="{{ route('map.index') }}">
          <i class='bx bx-map' ></i>
          <span class="links_name">map</span>
        </a>
        <span class="tooltip">map</span>
      </li>
      <li>
        <a href="{{ route('newslater.index') }}">
          <i class='bx bx-message-dots' ></i>
          <span class="links_name">Newslater</span>
        </a>
        <span class="tooltip">Newslater</span>
      </li>
      <li>
        <a href="{{ route('footer.index') }}">
          <i class='bx bx-link' ></i>
          <span class="links_name">Footer</span>
        </a>
        <span class="tooltip">Footer</span>
      </li>
      <li>
        <a href="/titre">
          <i class='bx bx-rename' ></i>
          <span class="links_name">Titre</span>
        </a>
        <span class="tooltip">Titre</span>
      </li>
      <li>
        <a href="{{ route('messagerie.index') }}">
          <i class='bx bx-mail-send'></i>
          <span class="links_name">Messagerie</span>
        </a>
        <span class="tooltip">Messagerie</span>
      </li>
      <li>
        <a href="{{ route('/userindex') }}">
          <i class='bx bx-user'></i>
          <span class="links_name">user</span>
        </a>
        <span class="tooltip">user</span>
      </li>
      <li class="profile">
        <a href="/">
          <i class='bx bx-log-out' ></i>
          <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
    </ul>
  </div>
  <section class="home-section">
      <div>
        @yield('content')
      </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
