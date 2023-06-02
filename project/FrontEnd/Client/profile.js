var req = new XMLHttpRequest();

req.onreadystatechange = function() {
  if (req.readyState == 4 && req.status == 200) {
    var res = req.responseText;

    var req2 = new XMLHttpRequest(); // Use a different variable name for the inner XMLHttpRequest

    var username = res;
    var json = { 'type': 'GET_USER_REVIEWS', 'username': username };

    req2.onreadystatechange = function() {
      if (req2.readyState == 4 && req2.status == 200) {
        var res = req2.responseText;
        var jRes = JSON.parse(res);
        var reviewOutput = "";
        

        for (var i in jRes.data) {
          reviewOutput += '<tr><th scope="row">' + jRes.data[i].reviewID + '</th><td>' + jRes.data[i].review_description + '</td><td><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></td><th scope="row action-btns"><i class="fa-solid fa-user-pen action-btn"></i></th><th scope="row action-btns"><i class="fa-solid fa-trash action-btn"></i></th></tr>';
        }

        document.querySelector('tbody').innerHTML = reviewOutput;
      }
    };

    req2.open('POST', '../../Backend/Api/Api.php');
    req2.send(JSON.stringify(json));
  }
};

req.open('GET', '../Components/SessionHandler.php', false);
req.send();

