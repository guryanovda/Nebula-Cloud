
<script src="https://www.google.com/jsapi?key=ABQIAAAAqOCxBlVyVQCCfNR4-0X52BRi8quysmrWI3zFGosiUfNQfus45xSVKakjKqOr9I5tqxAzWAlNsO5_bA" type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    google.load("search", "0");
    function OnLoad() {
      var searchControl = new google.search.SearchControl();

      var localSearch = new google.search.LocalSearch();
      searchControl.addSearcher(new google.search.WebSearch());
      searchControl.draw(document.getElementById("searchcontrol"));   
    }
    google.setOnLoadCallback(OnLoad);
	
    </script>
