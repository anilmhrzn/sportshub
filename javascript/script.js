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
      // console.log(limit);
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
    document.getElementById('Categories_navbar_options').classList.remove('active_for_navbar_options');
    document.getElementById('home_navbar_options').classList.add('active_for_navbar_options');
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
      console.log(i);
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
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
// function loadCategories(){
//   alert('ok');
//   var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//     document.getElementById("main-page").innerHTML = this.responseText;
//   }
// };
// xhttp.open(
//   "GET",
//   "./../pages/for-dropdown-contents/for_list_of_categorires.php",
//   true
//   );
// xhttp.send();
// }   

var previous_selected_option='';
function setActive(id) {
  try {
    
  document.getElementById(this.previous_selected_option).classList.remove('active');
} catch (error) {
  
}
this.previous_selected_option=id;
  document.getElementById(id).classList.add('active');
}
function show_certain_page(page_name) {
  document.getElementById('home_navbar_options').classList.remove('active_for_navbar_options');
  document.getElementById('Categories_navbar_options').classList.add('active_for_navbar_options');
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
  xhttp.open("GET", "./../pages/fetch_products.php?categoryName="+categoryName+"&sub_categories_name="+sub_categories_name, true);
  xhttp.send();
  
  let sendName=categoryName+sub_categories_name;
  setActive(sendName);
  this.previous_selected_option=sendName;
}

// addto cart function

function add_to_cart(id,image_address,name,price){
  var productQunatity=document.getElementById('productQunatity').value
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert( this.responseText
      );
    }
  };
  xhttp.open("get", "./../cart/insert_into_cart.php?productId="+id+"&productName="+name+"&productPrice="+price+"&productQunatity="+productQunatity+"&image_address="+image_address, true)
  xhttp.send();
}



// view cart function
function viewCart(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

      document.getElementById("main-page").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "./../cart/view_cart.php", true);
  xhttp.send();
}
