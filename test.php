<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Hello World - Google  Web Search API Sample</title>
    <script src="https://www.google.com/jsapi"
        type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    //<!
    google.load('search', '1');

    function OnLoad() {
      // Create a search control
      var searchControl = new google.search.SearchControl();

      // Add in a full set of searchers
      var localSearch = new google.search.LocalSearch();
      searchControl.addSearcher(localSearch);
      searchControl.addSearcher(new google.search.WebSearch());

      // Set the Local Search center point
      localSearch.setCenterPoint("Chicago, IL");

      // tell the searcher to draw itself and tell it where to attach
      searchControl.draw(document.getElementById("searchcontrol"));

      // execute an inital search
      searchControl.execute("Chicago Bulls");
    }
    google.setOnLoadCallback(OnLoad);

    //]]>
    </script>
  </head>
  <body>
    <div id="searchcontrol">Loading</div>
  </body>
</html>