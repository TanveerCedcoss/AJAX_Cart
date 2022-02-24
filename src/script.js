$(document).ready(function(){
    console.log("In JS");
    $("#products").on("click",".add-to-cart",function(e){
        e.preventDefault();
        console.log("default prevented");
        var pid = $(this).data("id");
        console.log(pid);
        addProduct(pid);
       
    });

    
});


$("#cart").on("click",".x",function(){
    var pid = $(this).data("id");
    console.log(pid);
    deleteProduct(pid);
});

$("#cart").on("click","button",function(){
    console.log("empty activated");
    emptyCart();
});




function addProduct(pid)
{
    $.ajax({
        method: "GET",
        url: "add.php",
        dataType: "JSON",
        data: {id: pid}
    }).done(function( data ) {
        console.log(data);
        displayCart(data);
    });
}

function displayCart(data)
{
    var total=0;
    var table=
    "<table><tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Remove</th></tr>";
  for (i = 0; i < data.length; i++)
  {
      total=total+data[i].price*data[i].quantity;
      table +=
    "<tr><td>" +
    data[i].id +
    "</td><td>" +
    data[i].name +
    "</td><td>$" +
    data[i].price*data[i].quantity +
    "</td><td>" +
    data[i].quantity +
    "</td><td><input type='button' class='x' data-id="+data[i].id+" value='X'></td></tr>";
    
  
  }
  table +="<tr><th colspan='2'>TOTAL PRICE: $"+total+"</td><th colspan='3'><button>Empty Cart</button></th>";
  table +="</table>";
  $("#cart").html(table);
}

function deleteProduct(pid)
{
    $.ajax({
        method: "GET",
        url: "delete.php",
        dataType: "JSON",
        data: {id: pid}
    }).done(function( data ) {
        console.log(data);
        displayCart(data);
    });
}

function  emptyCart()
{
    console.log("empty");
    $.ajax({
        method: "GET",
        url: "empty.php",
        dataType: "JSON",
    }).done(function( data ) {
        console.log(data);
        displayCart(data);
    });
}