function ajax(url,getpars,typ,responseType,responseFunc){
$.ajax({
 url:url,type:typ,data:getpars,dataType:responseType,success:responseFunc,statuscode:{
	 404:function(){
		 alert('Response not found');
	 }
 }
 });
}
function registerGroup(){
	setLoaders({elem:'regGroupResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/group",{"cate":"register","sessid":$("#sessid").val(),"name":$("#names").val(),"uname":$("#uname").val(),"nid":$("#nid").val(),"phone":$("#phone").val(),"email":$("#email").val(),"category":$("#userCate").val(),"password":$("#pwd").val(),"address":$("#address").val()},"POST","text",function(res){
		if(res=="ok"){
			loadGroup("setContent",null);
			$("#names").val("");$("#uname").val("");$("#phone").val("");$("#email").val("");$("#pwd").val("");$("#confPwd").val("");$("#address").val("");$("#nid").val("");
		$("#regGroupResponse").html("<font color='green'>Group Registered Success</font>");
}else{
		$("#regGroupResponse").html("<font color='red'>Failed to Register Group</font> ");
		}
clearMsg("#regGroupResponse");
	});
}
function loadGroup(cate,reference){
	var data={};data.cate="load";
	if(cate=='setContent'){
	setLoaders({elem:'tblGroups',elemtype:'table',msg:'Loading Data...'});
}else if(cate=='setComboCommissioner'){
	data.cate="loadcommissioner";
}
	ajax("ajax/users",data,"GET","json",function(res){
if(res.user!=null){	
switch(cate){
	case'setContent':
	setLoadedGroup(res);break;
	case 'setCombo':
	setComboGroups(res,"#userCate",reference);break;
	case 'updsetCombo':
	setComboGroups(res,"#upduserCate",reference);break;
	case'setComboCommissioner':
	setLoadedComboGroups(res,"#citbyCommissioner",reference);
	default:
	}			
}else{
	$("#loadedusers").html("");
		}
});
}
function setLoadedGroup(loadeduser){
var users="";
if(loadeduser.user.length!=0){
		 for(var i=0;i<loadeduser.user.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser.user[i].uid,username:loadeduser.user[i].username,phone:loadeduser.user[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser.user[i].names +"</td>"
             +"<td>"+ loadeduser.user[i].nid+"</td>"
             //+"<td>"+ loadeduser.user[i].username +"</td>"
              +"<td>"+ loadeduser.user[i].email+"</td>"
               +"<td>"+ loadeduser.user[i].phone+"</td>"
               +"<td>"+ loadeduser.user[i].category+"</td>"
              +"<td>"+ loadeduser.user[i].usr_regdate.substring(0,16)+"</td>"
              +"<td style='text-align:center;position:inherit;' class='infostester'><li class='dropdown' style='list-style-type:none'><a href='#'id='dropBtnTester"+i+"' class='btn btn-primary glyphicon glyphicon-full-screen dropdown-toggle' data-toggle='dropdown'>More <i class='fa fa-caret-down'></i></a>"
               +"</a>"
                 +"<ul id='dropMenus"+i+"' class='dropdown-menu text-white' role='menu' aria-labelledby='dropBtn"+i+"'>"
              +"<li><div class='umoreInfo' style='padding-left:5px;padding-right:5px;'> Groupname:"+loadeduser.user[i].username+"<br>Registered:"+loadeduser.user[i].usr_registered+(loadeduser.user[i].usr_registered==0?" Person":" People")+" <br> Balance:"+(loadeduser.user[i].usr_amount!=null?cashSeparator(loadeduser.user[i].usr_amount.toString(),",",3):0)+" RWF <br> Paid:"+cashSeparator(loadeduser.user[i].paid_amount.toString(),",",3)+" RWF<br> Remain:"+cashSeparator(loadeduser.user[i].usr_remain_amount.toString(),",",3)+" RWF<br> Address:"+loadeduser.user[i].address+"</div></li>"
              +"</div></ul></li></td>"
              +"<td style='text-align:center;position:inherit;' class='cflmore'><li class='dropdown' style='list-style-type:none'><a href='#'id='dropBtn"+i+"' class='btn btn-info glyphicon glyphicon-full-screen dropdown-toggle' data-toggle='dropdown'>Action <i class='fa fa-caret-down'></i></a>"
               +"</a>"
                 +"<ul id='dropMenus"+i+"' class='dropdown-menu text-white' role='menu' aria-labelledby='dropBtn"+i+"'>"
               /* +"<td style='text-align:center;'><a href='#' onclick='loadGroupById(\"reset\","+loadeduser.user[i].uid+")' class='btn btn-primary reset' data-toggle='modal' data-target='#modalResetGroup'><i class='fa fa-lock'></i> Reset</a> &nbsp;&nbsp;"
             +"<a href='#'  onclick='loadGroupById(\"edit\","+loadeduser.user[i].uid+")'  class='btn btn-warning edituser glyphicon glyphicon-pencil'>Edit</a>"
              +"&nbsp;&nbsp;&nbsp;<a href='#' onclick='loadGroupById(\"delete\","+loadeduser.user[i].uid+")' class='btn btn-danger glyphicon glyphicon-remove' data-toggle='modal' data-target='#delModal' >Delete</a>"
                +"</a></td>"
               */
              +"<li><a href='#' onclick='loadGroupById(\"reset\","+loadeduser.user[i].uid+")' class='btn btn-primary reset' data-toggle='modal' data-target='#modalResetGroup'><i class='fa fa-lock'></i> Reset</a></li>"
              +"<li><a href='#'  onclick='loadGroupById(\"edit\","+loadeduser.user[i].uid+")'  class='btn btn-warning edituser glyphicon glyphicon-pencil'>Edit</a></li>"
              +"<li><a href='#' onclick='loadGroupById(\"delete\","+loadeduser.user[i].uid+")' class='btn btn-danger glyphicon glyphicon-remove' data-toggle='modal' data-target='#delModal' >Delete</a></li>"
              +"</div></ul></li></td>"
            +"</tr>";
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Groups Found</center></td></tr>"
              }
			$("#loadedusers").html(users);
      }
	function setComboGroups(obj,elem,reference) {
		var selreps="";
		selreps="<option>Select Category</option>";
		for (var i=0;i<obj.user.length;i++) {
			if (elem=="#upduserCate") {
				if (obj.user[i].uid==reference) {//selected current representer
selreps+="<option value="+obj.user[i].uid+" selected>"+obj.user[i].name+"</option>";
} else if (obj.user[i].name==null) {//for one who has doesnt represent site
selreps+="<option value="+obj.user[i].uid+">"+obj.user[i].name+"</option>";
}
}else{//for new site registration assign representer
		if (elem=="#userCate" && obj.user[i].name==reference) {
selreps+="<option value="+obj.user[i].uid+">"+obj.user[i].name+"</option>";
}
//for Selection of Lab Technician Only
if (elem=="#labtechid") {
selreps+="<option value="+obj.user[i].uid+">"+obj.user[i].name+"</option>";
}
}
}//end loop
	$(elem).html(selreps);
}
function setLoadedComboGroups(obj,elem,reference){
var data=null;
if(reference==null){
  data="<option value='default'>Select Commissioner</option>";
  data+="<option value='0'>None</option>";
for(var i=0;i<obj.user.length;i++){
data+="<option value='"+obj.user[i].uid+"'>"+obj.user[i].names+"</option>"
}
}else{
for(var i=0;i<obj.user.length;i++){
if(obj.user[i].id==reference){
data+="<option value='"+obj.user[i].uid+"'>"+obj.user[i].names+"</option>"
}else{
data+="<option value='"+obj.user[i].uid+"'>"+obj.user[i].names+"</option>"
}
} 
}
$(elem).html(data);
}
function loadGroupById(cate,id){
	ajax("ajax/users",{"cate":"loadbyid","id":id},"GET","json",function(res){
        if(cate=='profile'){
            $("#resetid").val(res.user[0].uid);
            $("#profUname").html(res.user[0].username);
            $("#profEmail").html(res.user[0].email);
            $("#profPhone").html(res.user[0].phone);
            $("#profCategory").html(res.user[0].cate_name);
            $("#profAddress").html(res.user[0].address);
        }
        if(cate=='reset'){
            $("#resetid").val(res.user[0].uid);
            $("#resetuser").html(res.user[0].names);
        }
	if(cate=='edit'){
		setEditGroup(res);
	$("#userinfo").hide();
	$("#breadcrumb").hide();
	$("#updmoduserform").show();
	}
	if(cate=='delete'){
		setDeleteGroup(res);
	}
	});
}
function setEditGroup(data){
	$("#usrid").val(data.user[0].uid);
	$("#updnames").val(data.user[0].names);
	$("#upduname").val(data.user[0].username);
	$("#updphone").val(data.user[0].phone);
	$("#updemail").val(data.user[0].email);
	$("#updaddress").val(data.user[0].address);
	$("#updnid").val(data.user[0].nid);
//var userCateDOM=document.getElementById('upduserCate').getElementsByTagName('option');
loadCategory("updsetCombo",data.user[0].cate_id);
}
function setDeleteGroup(data){
	$("#deleteid").val(data.user[0].uid);
	$("#deluser").html("&nbsp;&nbsp;"+data.user[0].username);
}
function searchGroup(){
	ajax("ajax/users",{"cate":"search","key":$("#keyGroup").val()},"GET","json",function(res){
if(res.users.length!=0){
	setLoadedGroup(res);
	}else{
		$("#loadedusers").html("");
	}
	});
}
function updateGroup(){
clickController("disable","#btnupduser");
	setLoaders({elem:'updGroupResponse',elemtype:'container',msg:'Updating Data...'});
	ajax("ajax/users",{"cate":"update","id":$("#usrid").val(),"sessid":$("#sessid").val(),"name":$("#updnames").val(),"uname":$("#upduname").val(),"nid":$("#updnid").val(),"phone":$("#updphone").val(),"email":$("#updemail").val(),"category":$("#upduserCate").val(),"address":$("#updaddress").val()},"POST","text",function(res){
		if(res=="ok"){
			clickController("enable","#btnupduser");
			loadGroup("setContent",null);
			$("#updGroupResponse").html("<font color='green'>Group Updated Success</font>");
		}else if(res=='exist'){
clickController("enable","#btnupduser");
		$("#updGroupResponse").html("<font color='blue'>Some Information allready Exist to other user Must be different</font> ");
		}else{
clickController("enable","#btnupduser");
		$("#updGroupResponse").html("<font color='red'>Failed to Update Group</font> ");
		}
clearMsg("#updGroupResponse");
	});
}
function resetGroupPassword(){
    ajax("ajax/users",{"cate":"reset","sessid":$("#sessid").val(),"usercate":$("#usercate").val(),"id":$("#resetid").val(),"password":$("#resetnwpassword").val()},"POST","text",function(res){
        if(res=="ok"){
            loadGroup("setContent",null);
            $("#resetResponse").html("<font color='green'>Group Resetted Success Password</font>");
        }else{
            $("#resetResponse").html("<font color='red'>Failed to Group Business Password</font>");
        }
        clearMsg("#resetResponse");
    });
}
function deleteGroup(){
	ajax("ajax/users",{"cate":"delete","sessid":$("#sessid").val(),"usercate":$("#usercate").val(),"id":$("#deleteid").val(),"reason":$("#delReason").val()},"POST","text",function(res){				
	//alert(res);
	if(res=="ok"){
		loadGroup("setContent");
		$("#delResponse").html("<font color='green'>Group Removed Success</font>");
		}else{
		$("#delResponse").html("<font color='red'>Failed to Remove Group</font>");
		}
clearMsg("#delResponse");
	});
}	



function setComboSelection(obj,elem,reference) {
    var selreps="";
    selreps="<option value='default'>Select Rate Type</option>";
    for (var i=0;i<obj.length;i++) {
        if (obj[i]==reference) {//selected current notifications
            selreps+="<option value="+obj[i]+" selected>"+obj[i]+"</option>";
        }else{//for one who has doesnt notifications
            selreps+="<option value="+obj[i]+">"+obj[i]+"</option>";
        }
    }//end loop
    $(elem).html(selreps);
}

function setLoaders(obj){
switch(obj.elemtype){
	case'table':
	var thead=document.getElementById(obj.elem).getElementsByTagName('thead')[0];
	var tdLen=thead.getElementsByTagName('tr')[0].getElementsByTagName('th').length;//colspan for tbody
	var tbody=document.getElementById(obj.elem).getElementsByTagName('tbody')[0];
tbody.innerHTML="<tr><td colspan="+tdLen+" style='font-size:14px;font-weight:bold'><center>"+obj.msg+"</center></td></tr>";
	break;
	case'container':
	document.getElementById(obj.elem).innerHTML=obj.msg;
	break;
}
}


//AutoClear Msg
function clearMsg(elem){
setTimeout(function(){
$(elem).html("");
},5000);
}