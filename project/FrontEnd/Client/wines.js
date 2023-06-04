let lastServedID = "";
let searchval = "";

window.onload = function(){
    const xhttpObject = new XMLHttpRequest();
    switchOnLoader();

    xhttpObject.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200)placeWineElements(this.responseText);
    };

    xhttpObject.open("GET", "../../Backend/Api/Api.php?type=GET_WINE&lastcount=0");
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
                placeWineElements(data);
            }
            else console.log("Massive error blud:" + status);
        })
    })
})

const placeWineElements = function(res){
    const jsonRes = JSON.parse(res);
    const websiteContainer = document.querySelector(".website-container");

    for(let i = 0; i < jsonRes.data.length; ++i){
        websiteContainer.innerHTML += '<div class="card card-item rounded-2" style="width: 18rem;">' +
                                '<div class="img-container">' +
                                '<img class="card-img-top" src="'+ jsonRes.data[i].wine_imageURL +'" alt="Card image cap">' +
                                '</div>' +
                                '<div class="card-body">' +
                                '<h5 class="card-title">'+ jsonRes.data[i].wine_name +'</h5>' +
                                '<p class="card-text">'+ jsonRes.data[i].description +'</p>' +
                                '</div>' +
                                '<ul class="list-group list-group-flush">' +
                                '<li class="list-group-item">' + jsonRes.data[i].varietal +'</li>' +
                                '<li class="list-group-item"><i class="fa fa-home "></i>' + jsonRes.data[i].winery_name
                                '</ul>' +
                            '</div>';
    }
    lastServedId = jsonRes.data[jsonRes.data.length - 1];
}