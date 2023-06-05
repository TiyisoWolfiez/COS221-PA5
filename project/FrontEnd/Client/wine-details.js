var wineNameLocalStorage = localStorage.getItem('winery_name');
// Send a request to the API for the wine with name: wineNameLocalStorage
type = "SEARCH_WINE";
// const switchOnLoader = function(){
//     const websiteContainer = document.querySelector(".website-container");
//     websiteContainer.innerHTML = '<div class="spinner-container">' +
//                                     '<div class="spinner-grow text-success" role="status">' +
//                                         '<span class="sr-only">Loading...</span>' +
//                                     '</div>' +
//                                 '</div>';
// }
// switchOnLoader();
// Update the wine details using the response data from the API.
const getWineDetails = function() { // MUST BE POST with type->SEARCH_WINE
    const xhttpObject = new XMLHttpRequest();
    const body = JSON.stringify({
        "type": `${type}`,
        "name": `${wineNameLocalStorage}`
    });

    xhttpObject.onreadystatechange = function() {
        if (xhttpObject.readyState === 4 && xhttpObject.status === 200){
            var response = JSON.parse(xhttpObject.responseText);
            var data = response.data[0];
            console.log(data);
            document.getElementById('add_wine').innerHTML = `<div class="card mb-3 card-info-container" style="margin-top: 100px; padding: 100px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img id="image_wine" style="height: 500px; width:fit-content; padding: 20px; padding-left:150px;"  class="card-img-top" src="${data.wine_imageURL}" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 id="Wine_Name" class="card-title">${data.wine_name}</h5>
                    <p class="card-text">The Under Oaks Chenin Blanc 2016 is a bright and shiny wine, with has a pale straw-yellow colour. The wine is well balanced, full flavoured and displays strong notes of guava and tropical fruit salad on the nose and palate. It has a good acidity and a long fruity aftertaste.  Although it is very full-bodied this Chenin Blanc is soft on the palate and a pleasure to drink.</p>
                    <li class="card-text"><i class="fa fa-cutlery "></i>Enjoy now with seafood, smoked salmon, roast chicken and pork. Contains Sulphites, Milk.</li>
                    <br>
                    <li id="Winery" class="card-text"><strong>Winery:</strong> ${data.winery_name}</li>
                    <li id="Varietal" class="card-text"><strong>Varietal:</strong> ${data.varietal}</li>
                    <li id="Carbonation" class="card-text"><strong>Carbonation:</strong> ${data.carbonation}</li>
                    <li id="Sweetness" class="card-text"><strong>Sweetness:</strong> ${data.sweetness}</li>
                    <li id="Colour" class="card-text"><strong>Colour:</strong> ${data.colour}</li>
                    <li id="Vintage" class="card-text"><strong>Vintage:</strong> ${data.vintage}</li>
                    <li id="Year_Bottled" class="card-text"><strong>Year Bottled:</strong> ${data.year_bottled}</li>
                    <li id="Currency" class="card-text"><strong>Currency:</strong> ${data.currency}</li>
                    <li id="Country" class="card-text"><strong>Country:</strong> ${data.country}</li>
                    <li id="Regions" class="card-text"><strong>Regions:</strong> ${data.region}</li>
                    <li id="Price" class="card-text"><strong>Price:</strong> ${data.price_amount}</li>
                    <li id="Alcohol" class="card-text"><strong>Alcohol:</strong> ${data.alcohol_percentage}%</li>
                    <li id="Address" class="card-text"><strong>Address:</strong> ${data.address}</li>
                    <li id="Point_Score" class="card-text"><strong>Point Score:</strong> ${data.pointScore}</li>
                    <br>
                    <br>
                    <!-- ----------------------------Beginning Review------------------------------------- -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">
                            Add Review
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="reviewModalLabel">Write a Review</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                        <label for="reviewText">Review:</label>
                                        <textarea class="form-control" id="reviewText" rows="3" required></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="pointScore">Point Score (50-100):</label>
                                        <input type="number" class="form-control" id="pointScore" min="50" max="100" required>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ----------------------------End Review--------------------------------- -->
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>`;
        } else {
            console.log("Request failed with status: " + xhttpObject.status);
        }
    };
    xhttpObject.open("POST", "../../Backend/Api/Api.php", true);
    xhttpObject.setRequestHeader("Content-type", "application/json");
    xhttpObject.send(body);
}
// Updating the Wine Details
getWineDetails();