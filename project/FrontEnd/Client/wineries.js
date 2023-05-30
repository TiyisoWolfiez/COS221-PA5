const searchFor = function() {
    const searchbarval = document.getElementById("searchbar").value;
    switchOnLoader();

    if(searchbarval === "")return;

    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": "GET_WINERIES",
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
for (let index = 2; index < 10; index++) {
    $("#inlineCheckbox" + index).change(function(){  ////go through all checkboxes and see if they checked
        FilterCheck(2);
    });  
}

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
    var body = {
        method : "filter",
        loc : location
    }
    .$post("../../Api/Api.php",body,function(data,status){
        if(status == 200)
        {
            var result = JSON.parse(data);
        }
        else console.log("Massive error blud");
    })
}