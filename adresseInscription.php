<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<datalist id="datalistAdresse">

</datalist>
   <script type="text/javascript">
            // Firefox, Google Chrome, Opera, Safari, Internet Explorer from version 9
        function OnInput (event) {
            alert ("The new content: " + event.target.value);
        }
            // Internet Explorer
        function OnPropChanged (event) {
            if (event.propertyName.toLowerCase () == "value") {
                alert ("The new content: " + event.srcElement.value);
            }
        }
    </script>

    <input name="adresse" id="idAdresse" type="text" oninput="OnInput (event)" onpropertychange="OnPropChanged (event)" value="Text field" />