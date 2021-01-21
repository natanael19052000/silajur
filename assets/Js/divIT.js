//########################### NAVBAR ################################
$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

// #################################################################

$(document).ready(function() {
    $('#example').DataTable();
} );

// #################################################################

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

// ########################### ADD ROW ##########################

function addRow(r){
	var cd;

	var nip = document.getElementById('NIP').value;
	var name = document.getElementById('name').value;
	var role = document.getElementById('role').value;
	var status = document.getElementById('status').value;

	var table = document.getElementById('example');

	var row = table.insertRow(1);

	var c_nip = row.insertCell(0);
	var c_name = row.insertCell(1);
	var c_role = row.insertCell(2);
	var c_status = row.insertCell(3);
	var c_act = row.insertCell(4);

	if (status==='Active') {
		cd = '<div class="btn-acc text-center col-sm-5">Active</div>';
	}
	else if (status==='Inactive') {
		cd = '<div class="btn-wait text-center col-sm-5">Inactive</div>';
	}
	else{
		cd = '<div class="btn-canc text-center col-sm-5">Suspended</div>                  ';
	}

	var hehe = '<td><a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons" data-toggle="modal" data-target="#exampleModal">&#xE8B8;</i></a>\n<a href="#" class="delete"  data-toggle="tooltip" onclick="deleteRow(this)"><i class="material-icons">&#xE5C9;</i></a></td>'

	c_nip.innerHTML = nip;
	c_name.innerHTML = '<a href="#">'+name+'</a>';
	c_role.innerHTML = role;
	c_status.innerHTML = cd;
	c_act.innerHTML = hehe;
}

// ########################### DELETE ROW ##########################

function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("example").deleteRow(i);
}