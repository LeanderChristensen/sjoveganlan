<?php
$servername = "hidden";
$username = "hidden";
$password = "hidden";
$dbname = "hidden";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<script type="text/javascript">
$( function() {
  $( '#seat01' ).tooltip({
    //track: true
  });
} );
</script>
<style>
table, th, td {
  border: 1px solid black;
  text-align: center;
}
</style>
<div id="seatmap">
<p id="kantine">Kantine</p>
<table style="allign:center;"><tr><td id="kiosk">Kiosk</td></tr></table>
<table><tr id="row1">
  <td id="seat1" onclick="showUser(&quot;1&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">1</td>
  <td id="seat2" onclick="showUser(&quot;2&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">2</td>
  <td id="seat3" onclick="showUser(&quot;3&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">3</td>
  <td id="seat4" onclick="showUser(&quot;4&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">4</td>
  <td id="seat5" onclick="showUser(&quot;5&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">5</td>
  <td id="seat6" onclick="showUser(&quot;6&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">6</td>
  <td id="seat7" onclick="showUser(&quot;7&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">7</td>
  <td id="seat8" onclick="showUser(&quot;8&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">8</td>
  <td id="seat9" onclick="showUser(&quot;9&quot;)"   data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">9</td>
  <td id="seat10" onclick="showUser(&quot;10&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">10</td></tr></table>
<table><tr id="row2">
  <td id="seat11" onclick="showUser(&quot;11&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">11</td>
  <td id="seat12" onclick="showUser(&quot;12&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">12</td>
  <td id="seat13" onclick="showUser(&quot;13&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">13</td>
  <td id="seat14" onclick="showUser(&quot;14&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">14</td>
  <td id="seat15" onclick="showUser(&quot;15&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">15</td>
  <td id="seat16" onclick="showUser(&quot;16&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">16</td>
  <td id="seat17" onclick="showUser(&quot;17&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">17</td>
  <td id="seat18" onclick="showUser(&quot;18&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">18</td>
  <td id="seat19" onclick="showUser(&quot;19&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">19</td>
  <td id="seat20" onclick="showUser(&quot;20&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">20</td></tr></table>

<table><tr id="row3">
  <td id="seat21" onclick="showUser(&quot;21&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">21</td>
  <td id="seat22" onclick="showUser(&quot;22&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">22</td>
  <td id="seat23" onclick="showUser(&quot;23&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">23</td>
  <td id="seat24" onclick="showUser(&quot;24&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">24</td>
  <td id="seat25" onclick="showUser(&quot;25&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">25</td>
  <td id="seat26" onclick="showUser(&quot;26&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">26</td>
  <td id="seat27" onclick="showUser(&quot;27&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">27</td>
  <td id="seat28" onclick="showUser(&quot;28&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">28</td>
  <td id="seat29" onclick="showUser(&quot;29&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">29</td>
  <td id="seat30" onclick="showUser(&quot;30&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">30</td></tr></table>
<table><tr id="row4">
  <td id="seat31" onclick="showUser(&quot;31&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">31</td>
  <td id="seat32" onclick="showUser(&quot;32&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">32</td>
  <td id="seat33" onclick="showUser(&quot;33&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">33</td>
  <td id="seat34" onclick="showUser(&quot;34&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">34</td>
  <td id="seat35" onclick="showUser(&quot;35&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">35</td>
  <td id="seat36" onclick="showUser(&quot;36&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">36</td>
  <td id="seat37" onclick="showUser(&quot;37&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">37</td>
  <td id="seat38" onclick="showUser(&quot;38&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">38</td>
  <td id="seat39" onclick="showUser(&quot;39&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">39</td>
  <td id="seat40" onclick="showUser(&quot;40&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">40</td></tr></table>

<table><tr id="row5">
  <td id="seat41" onclick="showUser(&quot;41&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">41</td>
  <td id="seat42" onclick="showUser(&quot;42&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">42</td>
  <td id="seat43" onclick="showUser(&quot;43&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">43</td>
  <td id="seat44" onclick="showUser(&quot;44&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">44</td>
  <td id="seat45" onclick="showUser(&quot;45&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">45</td>
  <td id="seat46" onclick="showUser(&quot;46&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">46</td>
  <td id="seat47" onclick="showUser(&quot;47&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">47</td>
  <td id="seat48" onclick="showUser(&quot;48&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">48</td>
  <td id="seat49" onclick="showUser(&quot;49&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">49</td>
  <td id="seat50" onclick="showUser(&quot;50&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">50</td></tr></table>
<table><tr id="row6">
  <td id="seat51" onclick="showUser(&quot;51&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">51</td>
  <td id="seat52" onclick="showUser(&quot;52&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">52</td>
  <td id="seat53" onclick="showUser(&quot;53&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">53</td>
  <td id="seat54" onclick="showUser(&quot;54&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">54</td>
  <td id="seat55" onclick="showUser(&quot;55&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">55</td>
  <td id="seat56" onclick="showUser(&quot;56&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">56</td>
  <td id="seat57" onclick="showUser(&quot;57&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">57</td>
  <td id="seat58" onclick="showUser(&quot;58&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">58</td>
  <td id="seat59" onclick="showUser(&quot;59&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">59</td>
  <td id="seat60" onclick="showUser(&quot;60&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">60</td></tr></table>
<table><tr id="row7">
  <td id="seat61" onclick="showUser(&quot;61&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">61</td>
  <td id="seat62" onclick="showUser(&quot;62&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">62</td>
  <td id="seat63" onclick="showUser(&quot;63&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">63</td>
  <td id="seat64" onclick="showUser(&quot;64&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">64</td>
  <td id="seat65" onclick="showUser(&quot;65&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">65</td>
  <td id="seat66" onclick="showUser(&quot;66&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">66</td>
  <td id="seat67" onclick="showUser(&quot;67&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">67</td>
  <td id="seat68" onclick="showUser(&quot;68&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">68</td>
  <td id="seat69" onclick="showUser(&quot;69&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">69</td>
  <td id="seat70" onclick="showUser(&quot;70&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">70</td></tr></table>
<table><tr id="row8">
  <td id="seat71" onclick="showUser(&quot;71&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >71</td>
  <td id="seat72" onclick="showUser(&quot;72&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >72</td>
  <td id="seat73" onclick="showUser(&quot;73&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >73</td>
  <td id="seat74" onclick="showUser(&quot;74&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >74</td>
  <td id="seat75" onclick="showUser(&quot;75&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >75</td>
  <td id="seat76" onclick="showUser(&quot;76&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >76</td>
  <td id="seat77" onclick="showUser(&quot;77&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >77</td>
  <td id="seat78" onclick="showUser(&quot;78&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >78</td>
  <td id="seat79" onclick="showUser(&quot;79&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >79</td>
  <td id="seat80" onclick="showUser(&quot;80&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo" >80</td></tr></table>
<table><tr id="crewLeft">
  <td id="seat81" onclick="showUser(&quot;81&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">81</td>
  <td id="seat82" onclick="showUser(&quot;82&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">82</td>
  <td id="seat83" onclick="showUser(&quot;83&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">83</td>
  <td id="seat84" onclick="showUser(&quot;84&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">84</td>
  <td id="seat85" onclick="showUser(&quot;85&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">85</td>
  <td id="seat86" onclick="showUser(&quot;86&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">86</td>
  <td id="seat87" onclick="showUser(&quot;87&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">87</td>
  <td id="seat88" onclick="showUser(&quot;88&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">88</td></tr></table>
<table><tr id="crewRight">
  <td id="seat89" onclick="showUser(&quot;89&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">89</td>
  <td id="seat90" onclick="showUser(&quot;90&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">90</td>
  <td id="seat91" onclick="showUser(&quot;91&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">91</td>
  <td id="seat92" onclick="showUser(&quot;92&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">92</td>
  <td id="seat93" onclick="showUser(&quot;93&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">93</td>
  <td id="seat94" onclick="showUser(&quot;94&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">94</td>
  <td id="seat95" onclick="showUser(&quot;95&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">95</td>
  <td id="seat96" onclick="showUser(&quot;96&quot;)" data-container="body" data-tooltip="tooltip" class="seat" data-toggle="modal" data-target="#seatInfo">96</td></tr></table>
<p id="inngang2">Inngang bak, toalett</p>
<p id="bib">Bibliotek</p>
<p id="inngang">Hovedinngang</p>
</div>

<p style="margin-bottom:70%;"></p>

<!-- Modal -->
<div id="seatInfo" class="modal fade" role="dialog">
  <div class="modal-dialog modal-xl">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Seat info</h4>
      </div>
      <div class="modal-body" id="txtHint">
          <p>Laster inn ...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Lukk</button>
      </div>
    </div>
</div>
</div>
