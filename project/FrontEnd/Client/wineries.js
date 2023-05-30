const searchFor = function() {
    var searchbarval = document.getElementById("searchbar");
    switchOnLoader();

    if(searchbarval === "")return;

    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_WINERIES",
        "limit": 24,
        "search":{ "make": searchbarval,},
        "return": "*",
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)placeWineryElements(this.responseText);
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
}

const switchOnLoader = function(){

}

const placeWineryElements = function(res){
    const jsonRes = JSON.parse(res);
}