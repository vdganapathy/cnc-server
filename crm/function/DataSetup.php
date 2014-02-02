<!DOCTYPE html>
<html>

<head>
    <title>DataSetup</title>
<style>
table,td
table
{
   border-collapse:collapse;
}
tr
{
   border-bottom: 1px solid #000;
}
tr.last
{
   border-bottom: none;
}
</style>

</head>



<body>
    
    <div style="height:450px; width: 900px; border: .5px solid #000000; padding: 0px" id="main">
        
        <div style="float:left;width:20%; border: 0px solid #000000; padding: 0px; display: inline-block;" id="sub1">
            
        <table>
            <tr>
                <td><b>Service Type</b></td>
                <td onclick="sel('service_type')"> -->> </b></td>
            </tr>
            <tr>
                <td><b>Purchase from</b></td>
                 <td onclick="sel('purchase_from')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Unit Installed At </b></td>
                <td onclick="sel('unit_installed_at')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Unit Make</b></td>
                <td onclick="sel('unit_make')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Capacity</b></td>
                <td onclick="sel('capacity')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Star</b></td>
                <td onclick="sel('star')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Ac Type</b></td>
                <td onclick="sel('ac_type')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Complaint Nature</b></td>
                <td onclick="sel('Complaint_Nature')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Complaint Status</b></td>
                <td onclick="sel('complaint_status')"><b> -->> </b></td>
            </tr>
            <tr>
                <td><b>Technician Details</b></td>
                <td onclick="sel('TECH_DETAILS')"><b> -->> </b></td>
            </tr>
        </table>
        </div>
        
        
        
        <div style="float:right; width:80%;border: 0px solid #000000;padding: 0px; display: inline-block " id="sub2">
        	<div style="float:left; overflow:auto; width:60%;height:300px;border: 1px solid #000000;padding:0px;display: inline-block" id="indiv">
        		
        		
        	</div>
   				<button onclick="testing()">ADD</button>
        </div>
        <div id="modeless" style="display: none; width:500px; height:500px; border: 1px solid #000000; position:fixed;top: 50%;left: 50%;margin-left:-200px;margin-top:-150px;">
        
        </div>

    </div>
</body>
</html>