let lastServedId = 0;

window.onload = function(){
    /*
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_WINERY",
        "lastservedid": lastServedId
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            placeWineryElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
    */
}

const searchFor = function() {
    const searchbarval = document.getElementById("searchbar").value;
    if(searchbarval === "")return;
    switchOnLoader();

    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "SEARCH_WINERY",
        "name": searchbarval,
        "lastservedid": 0
    });

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200){
            switchOffLoader();
            placeWineryElements(this.responseText);
        }
    };

    xhttpObject.open("GET", "../../Api/Api.php");
    xhttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttpObject.send(body);
}

const fetchMoreDataAfterScroll = function(){

}

const switchOnLoader = function(){
    const websiteContainer = document.querySelector(".website-container");
    websiteContainer.innerHTML = '<div class="spinner-container">' +
                                    '<div class="spinner-grow text-success" role="status">' +
                                        '<span class="sr-only">Loading...</span>' +
                                    '</div>' +
                                '</div>';
}

const switchOffLoader = function(){
    const websiteContainer = document.querySelector(".website-container");
    websiteContainer.innerHTML = ''; 
}

const placeWineryElements = function(res){
    const jsonRes = JSON.parse(res);
    const websiteContainer = document.querySelector(".website-container");

    for(let i = 0; i < jsonRes.data.length; ++i){
        websiteContainer.innerHTML += '<div class="card card-item rounded-2" style="width: 18rem;">' +
                                '<div class="img-container">' +
                                '<img class="card-img-top" src="'+ jsonRes.data[i].winery_imageURL +'" alt="Card image cap">' +
                                '</div>' +
                                '<div class="card-body">' +
                                '<h5 class="card-title">'+ jsonRes.data[i].winery_name +'</h5>' +
                                '<p class="card-text">'+ jsonRes.data[i].description +'</p>' +
                                '</div>' +
                                '<ul class="list-group list-group-flush">' +
                                '<li class="list-group-item">Location: '+ jsonRes.data[i].address +'</li>' +
                                '<li class="list-group-item">Manager: '+ jsonRes.data[i].winery_manager +'</li>' +
                                '<li class="list-group-item">Status: '+ isVerified(jsonRes.data[i].isVerified) +'</li>' +
                                '</ul>' +
                            '</div>';
    }
    lastServedId = jsonRes.data[jsonRes.data.length - 1];
}

const isVerified = function(verfiedState){return verfiedState == 1 ? "verified" : "not verified"}

const filterBy = function(){

}

$(document).ready(function(){

    $("#opt1").click(()=>{
        FilterSearch("#opt1")
    })
    $("#opt2").click(()=>{
        FilterSearch("#opt2")
    })
    $("#opt3").click(()=>{
        FilterSearch("#opt3")
    })
    $("#opt4").click(()=>{
        FilterSearch("#opt4")
    })
    $("#opt5").click(()=>{
        FilterSearch("#opt5")
    })
    $("#opt6").click(()=>{
        FilterSearch("#opt6")
    })
    $("#opt7").click(()=>{
        FilterSearch("#opt7")
    })
    $("#opt8").click(()=>{
        FilterSearch("#opt8")
    })
        
    
    function FilterCheck(str){     /////Function for filtering takes in the number to know which option it is
        var location = '';
        switch (str) {
            case 2:
                location = "Cape Town";
                break;
        
            case 3:
                location = "Port Elizabeth";
                break;
            case 4:
                location = "Durban";
                break;
            case 5:
                location = "Johannesburg";
                break;
            case 6:
                location = "Pretoria";
                break;
            case 7:
                location = "East London";
                break;
            case 8:
                location = "Pietermaritzburg";
                break;
            case 9:
                location = "Bloemfontein";
                break;
        } 

    }
});

function FilterSearch(name)
{
    NotFound= false;
    flocation = $(name).html();
    console.log(flocation);
    var body = {
        type : 'GET_WINERIES',
        location : flocation
    }
    console.log(flocation);
    $.post( '../../Backend/Api/Api.php',body,function(data,status){
        if(status == "success")
        {
            placeWineryElements(data);
        }
        else console.log("Massive error blud:" + status);
    })
}
