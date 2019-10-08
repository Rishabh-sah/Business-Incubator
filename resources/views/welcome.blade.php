@extends('layout.basic')
@section('content')
<style>
  body {
background: url("https://www.incimages.com/uploaded_files/image/1940x900/getty_506755198_362244.jpg") fixed;
}
h1 {
text-align: left;
color: #ff3300;
padding:10px;
border: 20px red;
margin: 0;
}
#navhead {
width: 500px;
padding:10px;
border: 20px red;
margin: 0; 
}
div img {
width: 150px;
padding:10px;
border: 20px red;
margin: 5;
}
</style>
</head>
<body>
<h1 id="heads">
  <img src="http://4.bp.blogspot.com/-KEwsbxvwCO0/S-r-yjzu65I/AAAAAAAAJME/xtxEsuxtNv8/s1600/book+logo.gif" width="50" alt="Logo">
  BOOKWORM HEAVEN
</h1>
<div id="navhead">
  
  <nav>
          
              
              <a href="#HOME">Home</a>
              <a href="file:///C:/Users/babli/Desktop/Rishabh/genre.html" onclick=alert("gfd")>Browse Genre</a>
              <a href="file:///C:/Users/babli/Desktop/Rishabh/author.html">Browse Authors</a>
              <a href="file:///C:/Users/babli/Desktop/Rishabh/about.html">About us</a>
              <a href="file:///C:/Users/babli/Desktop/Rishabh/order.html">Order Book</a>
                          
          
      </nav>
</div>
<hr>
<input type="text" placeholder="Search">
                  <button name="Search" type="submit">Search</button>
  <br>
  <div>
      <img src="https://covers.openlibrary.org/w/id/8167232-M.jpg" alt="Image">
      <img src="https://covers.openlibrary.org/w/id/8316074-M.jpg" alt="Image">
      <img src="https://covers.openlibrary.org/w/id/8302846-M.jpg" alt="Image">
      <img src="https://covers.openlibrary.org/w/id/8477115-M.jpg" alt="Image">
      <img src="https://covers.openlibrary.org/w/id/8311345-M.jpg" alt="Image">
      <img src="https://covers.openlibrary.org/w/id/7145464-M.jpg" alt="Image">
  </div>
  <footer>©Copyright</footer>
  @endsection
