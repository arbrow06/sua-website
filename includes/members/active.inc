<h2>Active Members</h2>

<table id="sortable" class="sortable" width="600" border="0" cellspacing="1" cellpadding="5">
  <tr>
    <th width="187" scope="col"><h4>Name</h4></th>
    <th width="91" scope="col"><h4>Certification</h4></th>
    <th width="112" scope="col"><h4>Member Since</h4></th>
  </tr>
  <?php
  //imports a list of members and creates table rows for active members
include('memberlist.php');
$json_ml = json_decode($ml, true);
foreach($json_ml['active'] as $k){
echo "<tr>
    <td scope=\"col\">$k[name]</td>
    <td scope=\"col\">$k[HighCert]</td>
    <td scope=\"col\">$k[Joined]</td>
  </tr>";
}
?>
  
</table>


