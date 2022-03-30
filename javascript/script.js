var i = 0;
var limit;
window.onload = function abc() {
    // this ajax is for loading home page in 
    loadHomePage();
  // function for_no_of_popular_products(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      limit = parseInt(this.responseText);
      console.log(limit);
    }
  };
  xhttp.open(
    "GET",
    "./files-for-main-content/no_of_popular_products.php",
    true
  );
  xhttp.send();

}
function loadHomePage(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("main-page").innerHTML = this.responseText;
      }
    };
    xhttp.open(
      "GET",
      "./../pages/main-page.php",
      true
    );
    xhttp.send();   
    loadPopularPicks();

}
function loadPopularPicks(){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open(
    "GET",
    "./files-for-main-content/fetch_for_popular_picks.php?currentPage=" + 0,
    true
  );
  xhttp.send();
}
function next() {
  if (limit > i) {
    i++;
    if (limit > i) {
      // console.log(i);
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
          console.log(i);
        }
      };
      xhttp.open(
        "GET",
        "./files-for-main-content/fetch_for_popular_picks.php?currentPage=" + i,
        true
      );
      xhttp.send();
    } else {
      i--;
    }
    // if(limit=i){
    //     i--;
    // }
  }
}
function prev() {
  if (i >= 0) {
    if (i > 0) {
      i--;
    }
    console.log(i);

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML = this.responseText;
        // console.log(i);
      }
    };
    xhttp.open(
      "GET",
      "./files-for-main-content/fetch_for_popular_picks.php?currentPage=" + i,
      true
    );
    xhttp.send();
  }
}
function show_certain_page(page_name) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("main-page").innerHTML = this.responseText;
      showProductsOfGivenSubcategories(page_name,'T-shirt');
    }
  };
  xhttp.open("GET", "./../pages/show_certain_category_page.php?categoryName="+page_name, true);
  xhttp.send();
}
function showProductsOfGivenSubcategories(categoryName,sub_categories_name){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("products").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "./../pages/record_of_products.php?categoryName="+categoryName+"&sub_categories_name="+sub_categories_name, true);
    xhttp.send();
}