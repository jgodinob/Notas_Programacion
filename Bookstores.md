* Editor de texto HTML+CSS+JS - [http://nicedit.com/](http://nicedit.com/)
```html
<div id="sample">
  <h4>
    Div Example
  </h4>
  <div id="myArea1" style="width: 300px; height: 100px; border: 1px solid #000;">
    This is some TEST CONTENT<br />
    In a DIV Tag<br />
    Click the Buttons to activate
  </div><button onclick="toggleArea1();">Toggle DIV Editor</button><br />
  <br />
  <h4>
    Textarea Example
  </h4>
  <div>
    <textarea style="width: 300px; height: 100px;" id="myArea2">
</textarea><br />
    <button onclick="addArea2();">Add Editor to TEXTAREA</button> <button onclick="removeArea2();">Remove Editor from TEXTAREA</button>
  </div>
  <div style="clear: both;"></div><script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
  var area1, area2;
 
  function toggleArea1() {
        if(!area1) {
                area1 = new nicEditor({fullPanel : true}).panelInstance('myArea1',{hasPanel : true});
        } else {
                area1.removeInstance('myArea1');
                area1 = null;
        }
  }
 
  function addArea2() {
        area2 = new nicEditor({fullPanel : true}).panelInstance('myArea2');
  }
  function removeArea2() {
        area2.removeInstance('myArea2');
  }
 
  bkLib.onDomLoaded(function() { toggleArea1(); });
  //]]>
  </script>
</div>
```
