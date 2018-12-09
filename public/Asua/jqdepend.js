function ajax(url,getpars,typ,responseType,responseFunc){
$.ajax({
 url:url,type:typ,data:getpars,dataType:responseType,success:responseFunc,statuscode:{
	 404:function(){
		 alert('Response not found');
	 }
 }
 });
}
$.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content")
        }
    });
function registerGroup(){
	setLoaders({elem:'regGroupResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/group/create",{"names":$("#names").val(),"username":$("#names").val(),"names":$("#names").val()},"POST","text",function(res){
		if(res=="ok"){
			loadGroup("setContent",null);
			$("#names").val("");
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
//	setLoaders({elem:'tblGroups',elemtype:'table',msg:'Loading Data...'});
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
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ 15000+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td>"
              +'<td><button type="button" class="btn btn-default" onclick="document.getElementById(\'groupid\').value='+loadeduser[i].id+'"  data-toggle="modal" data-target="#modalAddMember"> Add members</button>  <button type="button" onclick=\"loadMembers('+loadeduser[i].id+')\" class="btn btn-success" data-toggle="modal" data-target="#modalViewMember"> view members</button>';
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
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
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
	ajax("/product/create",{"cate":"register","sessid":$("#sessid").val(),"name":$("#names").val(),"uname":$("#uname").val(),"nid":$("#nid").val(),"phone":$("#phone").val(),"email":$("#email").val(),"category":$("#userCate").val(),"password":$("#pwd").val(),"address":$("#address").val()},"POST","text",function(res){
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
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
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
	setLoaders({elem:'regSavingResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/saving/create",{"groupid":$("#groupid").val(),"memberid":$("#memberid").val(),"amount":$("#amountSaving").val()},"POST","text",function(res){
		if(res=="ok"){
			$("#amountSaving").val("")
		$("#regSavingResponse").html("<font color='green'>Saving Registered Success</font>");
loadSaving("setContent",null);
			}else{
		$("#regSavingResponse").html("<font color='red'>Failed to Register Saving</font> ");
		}
clearMsg("#regSavingResponse");
	});
}
function loadSaving(){
	ajax("/saving",{},"GET","json",function(res){
setLoadedSaving(res);
	});
}

function setLoadedSaving(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].group_names +"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].amount+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Saving Found</center></td></tr>"
              }
			$("#loadedsaving").html(users);

}


function registerWithdraw(){
	setLoaders({elem:'regGroupResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/withdraws/create",{"cate":"register","sessid":$("#sessid").val(),"groupid":$("#groupid").val(),"amount":$("#amount").val()},"POST","text",function(res){
		if(res=="ok"){
			loadWithdraw("setContent",null);
			$("#amount").val("")
		$("#regSavingResponse").html("<font color='green'>Saving Registered Success</font>");
}else{
		$("#regSavingResponse").html("<font color='red'>Failed to Register Saving</font> ");
		}
clearMsg("#regSavingResponse");
	});
}
function loadWithdraw(){
	ajax("/withdraws",{cate:'load'},"GET","json",function(res){
setLoadedSaving(res);
	});
}

function setLoadedWithdraw(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].group_names +"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].amount+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Saving Found</center></td></tr>"
              }
			$("#loadedsaving").html(users);

}
function registerGroupMembers(){
	setLoaders({elem:'regMemberResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/members/create",{"groupid":$("#groupid").val(),"groupid":$("#groupid").val(),"names":$("#memberNames").val(),"nid":$("#memberNid").val(),"parentid":($("#parentnid").val()==null?0:$("#parentnid").val())},"POST","text",function(res){
		if(res=="ok"){
			$("#memberNid").val("");$("#memberNames").val("");$("#parentnid").val("");
		$("#regMemberResponse").html("<font color='green'>Member Registered Success</font>");
loadMembers("setContent",null);
			}else{
		$("#regMemberResponse").html("<font color='red'>Failed to Register Member</font> ");
		}
clearMsg("#regMemberResponse");
	});
}
function loadMembers(id){
	ajax("/members/"+id,{},"GET","json",function(res){
setLoadedMembers(res);
	});
}

function setLoadedMembers(loadeduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].group_name +"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ (loadeduser[i].nid!=0?loadeduser[i].nid:loadeduser[i].parentnid)+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td>"
              +"<td><button class='btn btn-default' data-dismiss='modal' onclick='document.getElementById(\"groupid\").value="+loadeduser[i].group_id+";document.getElementById(\"memberid\").value="+loadeduser[i].member_id+"' data-toggle='modal' data-target='#modalAddMoney'>Add Money</button></td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Members Found</center></td></tr>"
              }
			$("#loadedmembers").html(users);

}


function registerConfigurations(){
	setLoaders({elem:'regMemberResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/configuration/create",{"cate":"register","sessid":$("#sessid").val(),"names":$("#names").val(),"amount":$("#amount").val(),"ratio":$("#ratio").val(),"parentinid":$("#parentinid").val()},"POST","text",function(res){
		if(res=="ok"){
			loadConfiguration("setContent",null);
			$("#nid").val("");$("#names").val("");$("#parentnid").val("");
		$("#regMemberResponse").html("<font color='green'>Member Registered Success</font>");
}else{
		$("#regMemberResponse").html("<font color='red'>Failed to Register Member</font> ");
		}
clearMsg("#regMemberResponse");
	});
}
function loadConfiguration(){
	ajax("/configuration",{cate:'load'},"GET","json",function(res){
setLoadedConfiguration(res);
	});
}

function setLoadedConfiguration(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].group_names +"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].nid+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Configuration Found</center></td></tr>"
              }
			$("#loadedsaving").html(users);

}

function registerIdea(){
	setLoaders({elem:'regIdeaResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/idea/create",{"cate":"register","sessid":$("#sessid").val(),"name":$("#names").val(),"description":$("#descr").val(),"amountmin":$("#amountmin").val(),"amountmax":$("#amountmax").val()},"POST","text",function(res){
		if(res=="ok"){
			loadConfiguration("setContent",null);
			$("#names").val("");$("#descr").val("");$("#amountmin").val("");$("#amountmax").val("");
		$("#regIdeaResponse").html("<font color='green'>Idea Registered Success</font>");
}else{
		$("#regIdeaResponse").html("<font color='red'>Failed to Register Idea</font> ");
		}
clearMsg("#regIdeaResponse");
	});
}
function loadIdea(){
	ajax("/idea",{cate:'load'},"GET","json",function(res){
setLoadedConfiguration(res);
	});
}

function setLoadedIdea(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].group_names +"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].nid+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Configuration Found</center></td></tr>"
              }
			$("#loadedidea").html(users);

}

function registerFundingProject(){
	setLoaders({elem:'regFundingProjectResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/fundproject/create",{"cate":"register","sessid":$("#sessid").val(),"name":$("#names").val(),"description":$("#descr").val(),"amountmin":$("#amountmin").val(),"amountmax":$("#amountmax").val()},"POST","text",function(res){
		if(res=="ok"){
			loadConfiguration("setContent",null);
			$("#names").val("");$("#descr").val("");$("#amountmin").val("");$("#amountmax").val("");
		$("#regFundingProjectResponse").html("<font color='green'>Idea Registered Success</font>");
}else{
		$("#regFundingProjectResponse").html("<font color='red'>Failed to Register Idea</font> ");
		}
clearMsg("#regFundingProjectResponse");
	});
}
function addFunds(){
	setLoaders({elem:'regFundsResponse',elemtype:'container',msg:'Saving Data...'});
	ajax("/fundproject",{"cate":"register","sessid":$("#sessid").val(),"projectid":$("#projectid").val(),"amount":$("#amount").val()},"POST","text",function(res){
		if(res=="ok"){
			loadConfiguration("setContent",null);
			$("#amount").val("");
		$("#regFundingProjectResponse").html("<font color='green'>Fund Registered Success</font>");
}else{
		$("#regFundingProjectResponse").html("<font color='red'>Failed to Register Fund</font> ");
		}
clearMsg("#regFundingProjectResponse");
	});
}
function loadFundingProject(){
	ajax("/fundproject",{cate:'load'},"GET","json",function(res){
setLoadedFundingProject(res);
	});
}

function setLoadedFundingProject(loaduser){
var users="";
if(loadeduser.length!=0){
		 for(var i=0;i<loadeduser.length;i++){		 
		 	var passdata={cate:'setContent',reference:loadeduser[i].uid,username:loadeduser[i].name,phone:loadeduser[i].phone};
         users+="<tr>"
             +"<td>"+ (parseInt(i)+1)+"</td>"
             +"<td>"+ loadeduser[i].group_names +"</td>"
             +"<td>"+ loadeduser[i].names +"</td>"
             +"<td>"+ loadeduser[i].nid+"</td>"
              +"<td>"+ loadeduser[i].regdate.substring(0,16)+"</td></tr>"
			}
		}else{
		 users+="<tr>"
             +"<td colspan='10'><center>No Configuration Found</center></td></tr>"
              }
			$("#loadedidea").html(users);

}
//==========Optionals====================================
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