logging in:
---includes checking right password,checking username
-signing up:
---creating a apikey if we want them to and checking if its right(Dont hash the apikey);
---inserting data into database once signed up
-filters:
---Check with front end what filters pages will have



MAKING API REQUESTS:

API requests should include a JSON object describing the desired information
The JSON object should have a key called type.

When type = 'GET_WINERIES':
  Returns a JSON object of wineries.
  location (optional) -- contains the sub-keys longitude and latitude. Should be included when you want data sorted by proximity to that location.
  SouthAfrican (optional) -- if SouthAfrican == true will return only foreign wineries.
  By default will only return SouthAfrican wineries (as this is what we aim to promote)

When type = 'GET_WINE':
  Returns a JSON object of wines
  sort (optional) -- contains a string of one of the following: ("price_amount", "pointScore", "alcohol_percentage", "vintage", "year_bottled") the data will be sorted by that attribute
  filters (optional) -- contains a JSON sub object which can include any or all of the keys 'varietal', 'colour', 'carbonation', 'sweetness', 'country' AND should include the value to be filtered by 
      e.g. filters: {"colour": "red", "country": "South Africa"}
  lastcount (optional) -- the index of the last received wine, will the next wines after that wine in the results
       
When type = 'GET_VARIETAL':
  returns all available varietals

When type = 'GET_COUNTRY':
  returns all Countries in the database

When type = 'SEARCH_WINERY':
  name (required) -- the name of the winery to search for

When type = 'SEARCH_WINE':
  name (required) -- the name of the wine to search for
  lastcount (optional) -- the index of the last received wine, will the next wines after that wine in the results
