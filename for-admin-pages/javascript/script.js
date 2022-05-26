document.getElementById("usersOption").addEventListener("click",()=>{showUser();}) ;
// document.getElementById("categoriesOption").addEventListener("click", () => {
//   alert("1 clicked");
// });
// document.getElementById("subCategoriesOption").addEventListener("click", () => {
//   alert("2 clicked");
// });
document.getElementById("productsOption").addEventListener("click", () => {
  showProductsCategories();
  // alert("3 clicked");
});
// document.getElementById("popularListOption").addEventListener("click", () => {
//   alert("4 clicked");
// });
// document.getElementById("orderOption").addEventListener("click", () => {
//   alert("5 clicked");
// });
// document.getElementById("backFromEditUsers").addEventListener("click",()=>{showUser();}) ;
//to show user
function showUser() {
  var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("mainPart").innerHTML = this.responseText;
  }
};
  xhttp.open(
    "GET",
    "./users.php",
    true
    );
  xhttp.send();   
}

// to remove user 
function removeUser(id){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText)
      showUser();
    }
  };
    xhttp.open(
      "GET",
      "./for_functions/remove_users.php?id="+id,
      true
      );
    xhttp.send();     
}
// edit user
function editUser(id){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("mainPart").innerHTML = this.responseText;

    }
  };
    xhttp.open(
      "GET",
      "./for_functions/edit_users.php?id="+id,
      true
      );
    xhttp.send();     
}

  //to show products
  function showProductsCategories() {

    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mainPart").innerHTML = this.responseText;
    }
  };
    xhttp.open(
      "GET",
      "./products.php",
      true
      );
    xhttp.send();   
  }



// // displaying adding new product page
//   function addNewProduct(){
//     alert('add new btn  is clicked ');
//     var xhttp = new XMLHttpRequest();
//   xhttp.onreadystatechange = function () {
//     if (this.readyState == 4 && this.status == 200) {
//       document.getElementById("mainPart").innerHTML = this.responseText;
//     }
//   };
//     xhttp.open(
//       "GET",
//       "./for_functions/add_new_product.php",
//       true
//       );
//     xhttp.send();   
//   }

// function sendData() {
//   nameOfProduct=document.getElementById('nameOfProduct').value;
//   priceOfProduct=document.getElementById('priceOfProduct').value;
//   categoryOfProduct=document.getElementById('categoryOfProduct').value;
//   subCategoryOfProduct=document.getElementById('subCategoryOfProduct').value;
//   imageOfProduct=document.getElementById('imageOfProduct');
// console.log(imageOfProduct);
//   Description=document.getElementById('Description').value;

//   var http = new XMLHttpRequest();
// var url = './for_functions/adding_new_product_in_database.php';
// var params = 'nameOfProduct='+nameOfProduct+'&priceOfProduct='+priceOfProduct+'&categoryOfProduct='+categoryOfProduct+'&subCategoryOfProduct='+subCategoryOfProduct+'&Description='+Description;
// http.open('POST', url, true);

// //Send the proper header information along with the request
// http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

// http.onreadystatechange = function() {//Call a function when the state changes.
//     if(http.readyState == 4 && http.status == 200) {
//         alert(http.responseText);
//         showProductsCategories();
        
//     }
// }
// // http.append('');
// http.send(params);


// }


// removing product

function removeProduct(id){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      alert(this.responseText)
      showProductsCategories();
    }
  };
    xhttp.open(
      "GET",
      "./for_functions/remove_product.php?id="+id,
      true
      );
    xhttp.send();     
}
  
