let lastServedID = "";
let searchval = "";

window.onload = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=GET_WINE&lastcount=0");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const searchFor = function() {
    const searchbarval = document.getElementById("searchbar").value;
    searchval = searchbarval;
    switchOnLoader();

    const xhttpObject = new XMLHttpRequest();
    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            document.querySelector(".website-container").innerHTML = "";
            placeWineElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=SEARCH_WINE&lastcount=0&name=" + searchbarval);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const switchOnLoader = function(){
    const websiteContainer = document.querySelector(".website-container");
    websiteContainer.innerHTML += '<div class="spinner-container">' +
                                    '<div class="spinner-grow text-success" role="status">' +
                                        '<span class="sr-only">Loading...</span>' +
                                    '</div>' +
                                '</div>';
}

const switchOffLoader = function(){
    document.querySelector(".spinner-container").remove();
}

const placeWineElements = function(res){
    const jsonRes = JSON.parse(res);
    const websiteContainer = document.querySelector(".website-container");

    for(let i = 0; i < jsonRes.data.length; ++i){
        websiteContainer.innerHTML += '<div class="card card-item rounded-2" style="width: 18rem;">'+
                                        '<div class="img-container">'+
                                            '<img class="card-img-top" src="'+ jsonRes.data[i].wine_imageURL +'" alt="Card image cap">'+
                                        '</div>'+
                                        '<div class="card-body">'+
                                        '<h5 class="card-title">'+ jsonRes.data[i].wine_name +'</h5>' + 
                                        '<p class="card-text">'+ jsonRes.data[i].winery_name +'</p>'+
                                        '</div>'+
                                        '<ul class="list-group list-group-flush">'+
                                        '<li class="list-group-item"> <i class="fa-solid fa-circle-notch"></i> '+ jsonRes.data[i].varietal +'</li>'+
                                        '<li class="list-group-item"> <i class="fa-solid fa-palette"></i> '+ jsonRes.data[i].colour  +' </li>'+
                                        '<li class="list-group-item"> <i class="fa-solid fa-cubes-stacked"></i> '+ jsonRes.data[i].carbonation +' •  '+ jsonRes.data[i].sweetness +' </li>'+
                                        '<li class="list-group-item"><i class="fa-regular fa-calendar"></i> '+ jsonRes.data[i].year_bottled +'</li>'+
                                        '</ul>'+
                                    '</div>';
    }
    lastServedID = jsonRes.lastcount;
}

const filterBy = function(){

}

const loadMoreData = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();
    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            placeWineElements(this.responseText);
        }
    };

    const url = "";

    xhttpObject.open("GET", "../../Backend/Api/Api.php?" + "type=" + ( currentlyOpenTab === "managers" ? "GET_MANAGERS_ADMIN" : "GET_WINERY_ADMIN") + "&last_id=" + lastServedID);
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send();
}

const openWine = function(){

}