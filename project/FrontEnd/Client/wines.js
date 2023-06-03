const searchFor = function() {
    const searchbarval = document.getElementById("searchbar").value;
    switchOnLoader();

    if(searchbarval === "")return;

    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_WINES",
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)placeWineryElements(this.responseText);
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
}

$(document).ready(function(){
    var FilterBC = 'div.ms-3.btn.btn-light.btn-rounded.rounded-4.border.border-dark-subtle.filter-buttons';
    $(FilterBC).click(function(){
        console.log("Insideee");
        var flocation = $(this).html();
        console.log(flocation);
        var body = {
            type : 'GET_WINES',
            location : flocation
        }
        $.post( '../../Backend/Api/Api.php',body,function(data,status){
            if(status == "success")
            {
                placeWineryElements(data);
            }
            else console.log("Massive error blud:" + status);
        })
    })
})