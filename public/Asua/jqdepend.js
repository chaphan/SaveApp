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
	ajax("groups",data,"GET","json",function(res){
if(res!=null){	
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
	$("#loadedgroup").html("");
		}
});
}
function setLoadedGroup(loadeduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i]name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].balance+"</td>"
              +"<td>"+ loadeduser[i].numbers+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td>"
              +"<td style='text-align:center;position:inherit;' class='infostester'><li class='dropdown' style='list-style-type:none'><a href='#'id='dropBtnTester"+i+"' class='btn btn-primary glyphicon glyphicon-full-screen dropdown-toggle' data-toggle='dropdown'>More <i class='fa fa-caret-down'></i></a>"
               +"</a>"
                 +"<ul id='dropMenus"+i+"' class='dropdown-menu text-white' role='menu' aria-labelledby='dropBtn"+i+"'>"
              +"<li><div class='umoreInfo' style='padding-left:5px;padding-right:5px;'> Groupname:"+loadeduser[i]name+"<br>Registered:"+loadeduser[i].usr_registered+(loadeduser[i].usr_registered==0?" Person":" People")+" <br> Balance:"+(loadeduser[i].usr_amount!=null?cashSeparator(loadeduser[i].usr_amount.toString(),",",3):0)+" RWF <br> Paid:"+cashSeparator(loadeduser[i].paid_amount.toString(),",",3)+" RWF<br> Remain:"+cashSeparator(loadeduser[i].usr_remain_amount.toString(),",",3)+" RWF<br> Address:"+loadeduser[i].address+"</div></li>"
              +"</div></ul></li></td>"
              +"<td style='text-align:center;position:inherit;' class='cflmore'><li class='dropdown' style='list-style-type:none'><a href='#'id='dropBtn"+i+"' class='btn btn-info glyphicon glyphicon-full-screen dropdown-toggle' data-toggle='dropdown'>Action <i class='fa fa-caret-down'></i></a>"
               +"</a>"
                 +"<ul id='dropMenus"+i+"' class='dropdown-menu text-white' role='menu' aria-labelledby='dropBtn"+i+"'>"
               /* +"<td style='text-align:center;'><a href='#' onclick='loadGroupById(\"reset\","+loadeduser[i].uid+")' class='btn btn-primary reset' data-toggle='modal' data-target='#modalResetGroup'><i class='fa fa-lock'></i> Reset</a> &nbsp;&nbsp;"
             +"<a href='#'  onclick='loadGroupById(\"edit\","+loadeduser[i].uid+")'  class='btn btn-warning edituser glyphicon glyphicon-pencil'>Edit</a>"
              +"&nbsp;&nbsp;&nbsp;<a href='#' onclick='loadGroupById(\"delete\","+loadeduser[i].uid+")' class='btn btn-danger glyphicon glyphicon-remove' data-toggle='modal' data-target='#delModal' >Delete</a>"
                +"</a></td>"
               */
              +"<li><a href='#' onclick='loadGroupById(\"members\","+loadeduser[i].uid+")' class='btn btn-primary reset' data-toggle='modal' data-target='#modalMembersGroup'><i class='fa fa-lock'></i> Reset</a></li>"
              +"<li><a href='#'  onclick='loadGroupById(\"edit\","+loadeduser[i].uid+")'  class='btn btn-warning edituser glyphicon glyphicon-pencil'>Edit</a></li>"
              +"<li><a href='#' onclick='loadGroupById(\"delete\","+loadeduser[i].uid+")' class='btn btn-danger glyphicon glyphicon-remove' data-toggle='modal' data-target='#delModal' >Delete</a></li>"
              +"</div></ul></li></td>"
            +"</tr>";
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Groups Found</center></td></tr>"
              }
			$("#loadedgroup").html(users);
      }
function setLoadedComboGroups(obj,elem,reference){
var data=null;
if(reference==null){
  data="<option value='default'>Select Commissioner</option>";
  data+="<option value='0'>None</option>";
for(var i=0;i<obj.length;i++){
data+="<option value='"+obj[i].uid+"'>"+obj[i].names+"</option>"
}
}else{
for(var i=0;i<obj.length;i++){
if(obj[i].id==reference){
data+="<option value='"+obj[i].uid+"'>"+obj[i].names+"</option>"
}else{
data+="<option value='"+obj[i].uid+"'>"+obj[i].names+"</option>"
}
} 
}
$(elem).html(data);
}
function loadGroupMembers(){
	ajax("/members",{cate:'members'},"GET","json",function(res){
setLoadedGroupMembers(res);
	});
}
function setLoadedGroupMembers(){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i]name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].nid+"</td>"
              +"<td>"+ loadeduser[i].parentid+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Groups Members Found</center></td></tr>"
              }
			$("#loadedgroupmembers").html(users);

}

function registerProducts(){
	setLoaders({elem:'regGroupResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/product",{"cate":"register","sessid":$("#sessid").val(),"name":$("#names").val(),"uname":$("#uname").val(),"nid":$("#nid").val(),"phone":$("#phone").val(),"email":$("#email").val(),"category":$("#userCate").val(),"password":$("#pwd").val(),"address":$("#address").val()},"POST","text",function(res){
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
function loadProducts(){
	ajax("/products",{cate:'load'},"GET","json",function(res){
setLoadedProducts(res);
	});
}

function setLoadedProducts(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i]name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].nid+"</td>"
              +"<td>"+ loadeduser[i].parentid+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Groups Members Found</center></td></tr>"
              }
			$("#loadedgroupmembers").html(users);

}


function registerSaving(){
	setLoaders({elem:'regGroupResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/product",{"cate":"register","sessid":$("#sessid").val(),"name":$("#names").val(),"uname":$("#uname").val(),"nid":$("#nid").val(),"phone":$("#phone").val(),"email":$("#email").val(),"category":$("#userCate").val(),"password":$("#pwd").val(),"address":$("#address").val()},"POST","text",function(res){
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
function loadSaving(){
	ajax("/saving",{cate:'load'},"GET","json",function(res){
setLoadedSaving(res);
	});
}

function setLoadedSaving(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i]name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].nid+"</td>"
              +"<td>"+ loadeduser[i].parentid+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Groups Members Found</center></td></tr>"
              }
			$("#loadedgroupmembers").html(users);

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